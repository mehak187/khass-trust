<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="voulnter-form.css">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>volunteer form</title>
    <?php
            include 'main-style.php';
        ?>
</head>

<body>
    <div class="nav">
    <?php
        include 'nav.php';
      ?>
        <div class="form v-form">
            <h1 class="main-heading">Voulnteer Form</h1>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
                <div class="main-div">
                    <div class="name">
                        <div class="one-name1">
                            <h1>Name:</h1>
                            <input type="text" name="fname" placeholder="First Name" required>
                            <input type="text" name="lname" placeholder="Last Name" required>
                        </div>
                        <div class="one-name">
                            <h1>Father Name:</h1>
                            <input type="text" name="fat_name" id="" placeholder="Father Name" required>
                        </div>
                        <div class="one-name">
                            <h1>Date of Birth:</h1>
                            <input type="text" name="DOB" id="" placeholder="Date of birth">
                        </div>
                    </div>
                    <div class="pic">
                        <a href="">
                            <p><i class="fa-solid fa-plus"></i> Add Pic</p>
                        </a>
                        <input type="file" name="file" required>

                    </div>
                    
                </div>
                <div class="id-card">
                    <h1>ID Card number:</h1>
                    <input type="text" name="idcard" id="">
                </div>
                <div class="contact-email">
                    <div class="one-name">
                        <h1>Telephone:</h1>
                        <input type="number" name="telephone" id="" required>
                    </div>
                    <div class="one-name">
                        <h1>Contact Number:</h1>
                        <input type="text" name="contact" id="" required>
                    </div>
                </div>
                <div class="email">
                    <h1>E-mail</h1>
                    <input type="email" name="email" required> 
                </div>
                <div class="address">
                    <h1>Address</h1>
                    <input type="text" name="address" required>
                </div>
                <div class="address">
                    <h1>Person to be contated in emergency</h1>
                    <input type="text" name="g_name" required>
                </div>
                <div class="contact-email">
                    <div class="one-name">
                        <h1>Relationsip:</h1>
                        <input type="text" name="g_rel" id="" required>
                    </div>
                    <div class="one-name">
                        <h1>Telephone:</h1>
                        <input type="text" name="g_tel" id="">
                    </div>
                </div>

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-2 col-md-6">
                        <h1>Institution</h1>
                        <input type="text" name="inst_name" id="">
                        <input type="text" name="" id="">
                        <input type="text" name="" id="">
                        <input type="text" name="" id="">
                        <input type="text" name="" id="">

                    </div>

                    <div class="col-lg-2 col-md-6">
                        <h1>Degree</h1>
                        <input type="text" name="deg_name" id="">
                        <input type="text" name="" id="">
                        <input type="text" name="" id="">
                        <input type="text" name="" id="">
                        <input type="text" name="" id="">

                    </div>

                    <div class="col-lg-2 col-md-6">
                        <h1>Major Subject</h1>
                        <input type="text" name="m_subject" id="">
                        <input type="text" name="" id="">
                        <input type="text" name="" id="">
                        <input type="text" name="" id="">
                        <input type="text" name="" id="">

                    </div>

                    <div class="col-lg-2 col-md-6">
                        <h1>Grade</h1>
                        <input type="text" name="grade" id="">
                        <input type="text" name="" id="">
                        <input type="text" name="" id="">
                        <input type="text" name="" id="">
                        <input type="text" name="" id="">

                    </div>

                    <div class="col-lg-2 col-md-6">
                        <h1>Year</h1>
                        <input type="text" name="year" id="">
                        <input type="text" name="" id="">
                        <input type="text" name="" id="">
                        <input type="text" name="" id="">
                        <input type="text" name="" id="">

                    </div>
                </div>
                <div class="contact-email">
                    <div class="one-name">
                        <h1>From Date:</h1>
                        <input type="text" name="f_date" id="">
                    </div>
                    <div class="one-name">
                        <h1>To Date:</h1>
                        <input type="text" name="t_date" id="">
                    </div>
                </div>
                <div class="btns vol">
                    <input class="btn1" type="submit" value="Add" name="submit">
                    <input class="btn2" type="reset" value="Reset" name="reset">
                </div>
        </div>
        </form>
    </div>
    </div>
</body>

</html>
<?php
    include 'connection.php';
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $name = $fname . " " .$lname;
        $fat_name = $_POST['fat_name'];
        $DOB = $_POST['DOB'];
        $idcard = $_POST['idcard'];
        $telephone = $_POST['telephone'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $g_name = $_POST['g_name'];
        $g_rel = $_POST['g_rel'];
        $g_tel = $_POST['g_tel'];
        $f_date = $_POST['f_date'];
        $t_date = $_POST['t_date'];
        $deg_name = $_POST['deg_name'];
        $m_subject = $_POST['m_subject'];
        $grade = $_POST['grade'];
        $year = $_POST['year'];
       $inst_name = $_POST['inst_name'];

        $myfile = $_FILES['file'];
        $filename = $myfile['name'];
        $filetmp = $myfile['tmp_name'];
        $fileext = explode('.',$filename);
        $fileext_lower = strtolower(end($fileext));
        $fileext_main = array('jpg','jpeg','png');

        if(in_array($fileext_lower,$fileext_main)) {
            $dest_file = 'upload/' .$filename;
            move_uploaded_file($filetmp,$dest_file);
             $sql = "INSERT INTO vol_admin(name,fat_name,DOB,idcard,telephone,contact,email,address,g_name,g_rel,g_tel,f_date,t_date,deg_name,m_subject,grade,year,inst_name,img)
             VALUES('$name','$fat_name','$DOB','$idcard','$telephone','$contact','$email','$address','$g_name','$g_rel','$g_tel','$f_date','$t_date','$deg_name','$m_subject','$grade','$year','$inst_name','$dest_file')";
 
            $res = mysqli_query($conn,$sql) or die("<script> swal('', 'An error occured. Please try again', 'error'); </script>");
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