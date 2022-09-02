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
    <title>Document</title>
    <?php
        include 'main-style.php';
    ?>

</head>

<body>
    <div class="nav-admin-about">
        <?php
            include 'aside.php';
        ?>
        <div class="r-content-main relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="heading">
            <div class="admin-heading">
                <h1><?php echo $_SESSION['uname']."'s"; ?> Admin Panel</h1>
                <div class="logout-btn">
                    <a href="logout.php">Log out</a>
                </div>
            </div>
        <form class="px-4" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
            <div class="admin-home">
                <h1>Our Managemnet</h1>
            </div>
            <div class="about-changes">
                <div class="header">
                    <h1>Add Managment Name</h1>
                    <textarea name="header"></textarea>
                </div>
                <div class="img">
                    <h1>Add Picture</h1>
                    <!-- <a href=""><i class="fa-solid fa-plus"></i></a> -->
                    <input style="margin-top:10px" type="file" name="file">

                </div>
            </div>
            
            <div class="discripition">
                 <div class="header" style="margin-bottom:40px">
                    <h1>Add Managment Header</h1>
                    <textarea name="position"></textarea>
                </div>
                <h1>Descripition</h1>
                <textarea name="des"></textarea>
                <input type="submit" value="Add" name="submit">
            </div>
</form>
        </div>

        <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
        <script src="../path/to/flowbite/dist/flowbite.js"></script>
</div>
</body>

</html>
<?php
    include 'connection.php';
        if(isset($_POST['submit'])){
      $header = mysqli_real_escape_string($conn, $_POST['header']);
      $des = mysqli_real_escape_string($conn, $_POST['des']);
      $position = mysqli_real_escape_string($conn, $_POST['position']);
    
      $file = $_FILES['file'];
      $filename = $file['name'];
      $filetmp = $file['tmp_name'];
      $fileext = explode('.',$filename);
      $fileext_lower =strtolower(end($fileext));
      $fileext_main = array('jpg','jpeg','png');
      if(in_array($fileext_lower, $fileext_main)){
        $dest_file = 'upload/' .$filename;
        move_uploaded_file($filetmp,$dest_file);
        
        $sql = "INSERT INTO management(head,des,img,position) VALUES('$header','$des','$dest_file','$position')" or die("<script> swal('', 'An error occured. Please try again', 'error'); </script>");
        $res = mysqli_query($conn,$sql);
        ?><script>
        swal("", "Data entered successfully", "success");
    </script><?php
      }
      else{
        ?><script>
        swal("", "Please choose an image", "error");
        </script><?php
        
      }
  
    }
?>