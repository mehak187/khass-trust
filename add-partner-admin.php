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
    <link rel="stylesheet" href="about-admin.css">

    <link rel="stylesheet" href="partner-adim.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />
    <link rel="stylesheet" href="about-admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add-partner-admin</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <?php
        include 'main-style.php';
    ?>
</head>

<body>
    <div class="nav-admin-about">
        <?php 
          include 'aside.php';
        ?>
        <div class="r-content-main partner-style">
            <div class="heading">
                <div class="admin-heading">
                    <h1><?php echo $_SESSION['uname']."'s"; ?> Admin Panel</h1>
                    <div class="logout-btn">
                        <a href="logout.php">Log out</a>
                    </div>

                </div>
                <div class="add-partner-admin">
                    <div id="form-main">
                        <div id="form-div">
                            <form class="form" id="form1" method="post" action="" enctype="multipart/form-data">
                                <div class="submit">
                                    <input type="file" name="file" id="button-blue1" />
                                    <!-- <div class="ease"></div> -->
                                </div>
                                <p class="name">
                                    <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]]
                            feedback-input" placeholder="Enter peson or organization name:" id="name" name="name"
                                        required />
                                </p>

                                <p class="contact">
                                    <input name="contact" type="text" class="validate[required,custom[email]]
                            feedback-input" id="contact" placeholder="Enter Contact no:" name="contact" required />
                                </p>

                                <p class="email">
                                    <input name="email" type="email" class="validate[required,custom[email]]
                            feedback-input" id="email" placeholder="Enter Email here:" name="email" required />
                                </p>

                                <p class="contact">
                                    <input name="des" type="text" class="validate[required,custom[email]]
                            feedback-input" id="des" placeholder="Enter description:" required />
                                </p>

                                <div class="submit" style="margin-top:20px">
                                    <input type="submit" value="Add Partner" id="button-blue" name="submit" />
                                    <!-- <div class="ease"></div> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>
<?php
            include 'connection.php';
            if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $contact = $_POST['contact'];
                $email = $_POST['email'];
                $des = $_POST['des'];

                $myfile = $_FILES['file'];
                $filename = $myfile['name'];
                $filetmp = $myfile['tmp_name'];

                $fileext = explode('.',$filename);
                $fileext_lower = strtolower(end($fileext));
                $fileext_main = array('jpg','jpeg','png');

                if(in_array($fileext_lower,$fileext_main)) {
                    $dest_file = 'upload/' .$filename;
                    move_uploaded_file($filetmp,$dest_file);
                        $sql = "INSERT INTO partner(p_name,p_contact,p_email,img,des) VALUES('$name','$contact','$email','$dest_file','$des')";
                        $res = mysqli_query($conn,$sql); 
                                        
                        ?><script>
swal("", "Partner data added successfully", "success");
</script>
<?php
                }
                else{
                    ?><script>
swal("", "Please choose an image", "error");
</script><?php
                }
            }
          ?>