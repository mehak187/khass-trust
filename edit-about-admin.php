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
    <title>Update about admin</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <?php
        include 'main-style.php';
    ?>
</head>

<body>
    <div class="nav-admin-about">
        <?php 
            include 'aside.php';
            include 'connection.php';
            $Sr2=$_GET['Sr'];
            
            $sql="SELECT * FROM about WHERE Sr=$Sr2";
            $res=mysqli_query($conn,$sql);
            $row=mysqli_fetch_assoc($res);

            if(isset($_POST['submit'])){
                $header = $_POST['header'];
                $des = mysqli_real_escape_string($conn,$_POST['des']);

                $myfile = $_FILES['file'];
                $filename = $myfile['name'];
                $filetmp = $myfile['tmp_name'];
                $fileext = explode('.',$filename);
                $fileext_lower = strtolower(end($fileext));
                $fileext_main = array('jpg','jpeg','png');

                $Sr3=$_GET['Sr'];
                if(in_array($fileext_lower,$fileext_main)) {
                    $dest_file = 'upload/' .$filename;
                    move_uploaded_file($filetmp,$dest_file);
                $sql2 = "UPDATE about set header='$header',des='$des', img='$dest_file' WHERE Sr='$Sr3'";
                $res3 = mysqli_query($conn,$sql2) or die("Query failed"); ?><script>
                swal("", "Data updated successfully", "success");
                </script><?php
                }
                else{ 
                ?><script>
                swal("", "Please choose an image", "error");
                </script><?php
                }
            }
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
                    <div class="about-changes">
                        <div class="header">
                        <h1><label for="head">Add About Header</label></h1>
                            <textarea name="header"  id="head" placeholder="<?php echo $row['header']?>" required></textarea>
                        </div>
                        <div class="img">
                            <h1>Add Picture</h1>
                            <input type="file" name="file" required>
                            <!-- <a href=""><i class="fa-solid fa-plus"></i></a> -->
                        </div>

                    </div>
                    <div class="discripition">
                    <h1><label for="des">Descripition</h1>
                        <textarea name="des" id="des" placeholder="<?php echo $row['des']?>" required></textarea>
                        <input type="submit" value="Update" name="submit">
                    </div>
                </form>
            </div>

            <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
            <script src="../path/to/flowbite/dist/flowbite.js"></script>
        </div>
</body>

</html>