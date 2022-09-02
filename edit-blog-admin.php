<?php
  session_start();
  if(!isset($_SESSION['uname'])){
    header("Location: http://localhost/khass-project/login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="adminhome.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="../path/to/flowbite/dist/flowbite.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />
    <link rel="stylesheet" href="about-admin.css">
    <link rel="stylesheet" href="managmnet-admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title>Update Blog</title>

    <?php
        include 'managmnet-admin-style.php';
        include 'main-style.php';
    ?>
</head>

<body>
    <div class="nav-admin-about">
        <?php 
          include 'aside.php';
    include 'connection.php';
    $Sr2=$_GET['Sr'];
    $sql="SELECT * FROM blog WHERE Sr=$Sr2";
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($res);

    ?>
        <div class="r-content-main relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="heading">

                <div class="admin-heading">

                    <h1><?php echo $_SESSION['uname']."'s"; ?> Admin Panel</h1>
                    <div class="logout-btn">
                        <a href="logout.php">Log out</a>
                    </div>

                </div>
                <form class="px-4" action="" method="POST" enctype="multipart/form-data">
                    <div class="about-changes temp">
                        <div class="header">
                            <h1><label for="head"> Add Header</label></h1>
                            <textarea name="head" id="head" placeholder="<?php echo $row['head'] ?>"
                                required></textarea>
                        </div>
                        <div class="imgss">
                            <div class="img">
                                <h1>Add Picture</h1>
                                <!-- <a href=""><i class="fa-solid fa-user-large"></i></a> -->
                                <input type="file" name="pfile" required>

                            </div>
                            <div class="img">
                                <h1>Add Header Picture</h1>
                                <!-- <a href=""><i class="fa-solid fa-plus"></i></a> -->
                                <input type="file" name="hfile" required>

                            </div>
                        </div>
                    </div>
                    <div class="about-changes">
                        <div class="header">
                            <h1><label for="date">Add Publish Date</h1>
                            <textarea name="date" id="date" placeholder="<?php echo $row['date'] ?>"
                                required></textarea>
                        </div>
                    </div>
                    <div class="discripition">
                        <h1><label for="des">Descripition</h1>
                        <textarea name="des" id="des" placeholder="<?php echo $row['des'] ?>" required></textarea>
                        <!-- <div class="img1">
                        <h1>Add Picture</h1>
                        <a href=""><i class="fa-solid fa-plus"></i></a>
                    </div> -->
                        <input type="submit" value="Update Blog" name="submit">
                    </div>
                </form>

            </div>

            <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
            <script src="../path/to/flowbite/dist/flowbite.js"></script>
        </div>
</body>

</html>
<?php 
if(isset($_POST['submit'])){

    $head = $_POST['head'];
    $date = $_POST['date'];
    $des=  mysqli_real_escape_string($conn,$_POST['des']);

    $pfile = $_FILES['pfile'];
    $hfile = $_FILES['hfile'];

    $pfile_name = $pfile['name'];
    $hfile_name = $hfile['name'];

    $pfiletmp = $pfile['tmp_name'];
    $hfiletmp = $hfile['tmp_name'];

    $pfileext = explode('.',$pfile_name);
    $hfileext = explode('.',$hfile_name);

    $pfileext_lower = strtolower(end($pfileext));
    $hfileext_lower = strtolower(end($hfileext));

    $pfileext_main = array('png','jpg','jpeg');
    $hfileext_main = array('png','jpg','jpeg');

    $Sr3=$_GET['Sr'];

    if((in_array($pfileext_lower,$pfileext_main)) && (in_array($hfileext_lower,$hfileext_main))){
        $pdest_file = 'upload/'.$pfile_name;
        move_uploaded_file($pfiletmp,$pdest_file);

        $hdest_file = 'upload/'.$hfile_name;
        move_uploaded_file($hfiletmp,$hdest_file);

    $sql = "Update blog set head='$head',date='$date',des='$des',pfile='$pdest_file',hfile='$hdest_file' WHERE Sr=$Sr3";
    $res = mysqli_query($conn,$sql) or die("<script> swal('', 'An error occured. Please try again', 'error'); </script>"); ?>
<script>
swal("", "Data entered successfully", "success");
</script><?php }
}
?>