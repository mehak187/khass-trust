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
    <title>video-admin</title>
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
                <div class="about-changes temp">
                    <div class="header">
                        <h1>Add Header</h1>
                        <textarea name="header" required></textarea>
                    </div>
                </div>
                <div class="about-changes">
                    <div class="header" required>
                        <h1>Add Video Duration</h1>
                        <textarea name="duration"></textarea>
                        
                    </div>
                    <div class="img">
                    <h1>Add Video</h1>
                    <!-- <a href=""><i class="fa-solid fa-plus"></i></a> -->
                    <input style="margin-top:10px" type="file" name="file" required>

                </div>
                </div>
                <div class="discripition">
                    <h1>Descripition</h1>
                    <textarea name="des" required></textarea>
                  
                       <input type="submit" value="Add" name="submit">
                </div>
            </form>
        </div>

        <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
        <script src="../path/to/flowbite/dist/flowbite.js"></script>
</body>

</html>
<?php
    include 'connection.php';
        if(isset($_POST['submit'])){
      $header = mysqli_real_escape_string($conn, $_POST['header']);
      $des = mysqli_real_escape_string($conn, $_POST['des']);
      $duration = mysqli_real_escape_string($conn, $_POST['duration']);
      $file = $_FILES['file'];
      $filename = $file['name'];
      $filetmp = $file['tmp_name'];
      $fileext = explode('.',$filename);
      $fileext_lower =strtolower(end($fileext));
      $fileext_main = array('mp4','mp3');
      if(in_array($fileext_lower, $fileext_main)){
        $dest_file = 'upload/' .$filename;
        move_uploaded_file($filetmp,$dest_file);
        
        $sql = "INSERT INTO video(header,des,duration,video) VALUES('$header','$des','$duration','$dest_file')" or die("<script> swal('', 'An error occured. Please try again', 'error'); </script>");
        $res = mysqli_query($conn,$sql);
        ?><script>
    swal("", "Video added successfully", "success");
</script><?php
      }
      else{
        ?><script>
        swal("", "Please choose a video", "error");
        </script><?php
      }
  
    }
   
?>
 </div>