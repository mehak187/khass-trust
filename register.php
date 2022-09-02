<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <?php
        include 'form-style.php';
        include 'translate.php';
    ?>
  <style>
   
    
.goog-text-highlight {
    background: none !important;
    box-shadow: none !important;
}

#goog-gt-tt,
.goog-te-balloon-frame {
    display: none !important;
}

.goog-te-gadget {
    height: 28px !important;
    overflow: hidden;
}

.goog-logo-link {
    display: none !important;
}

body {
    top: 0px !important;
}


  </style>
</head>

<body>
    <div class="login-form">
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            <h1>Register</h1>
            <div class="form-field">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
            </div>

            <div class="form-field">
                <label for="email">Email address</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div class="form-field">
                <label for="mob">Mobile Number</label>
                <input type="text" name="mob" id="mob" required>
            </div>

            <div class="form-field">
                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass" required>
            </div>

            <div class="form-field">
                <label for="repass">Retype password</label>
                <input type="password" name="repass" id="repass" required>
            </div>

            <div class="submit-btn">
                <input type="submit" value="Register" name="submit">
            </div>
            <div class="alt-link">
                <p>Already have an acoount, <a href="login.php">Log in</a></p>
            </div>
        </form>
    </div>
</body>
</html>
<?php
    include 'connection.php';
    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email =mysqli_real_escape_string($conn, $_POST['email']);
        $phone =mysqli_real_escape_string($conn, $_POST['mob']);
        $pass =mysqli_real_escape_string($conn, $_POST['pass']);
        $repass =mysqli_real_escape_string($conn, $_POST['repass']);
// secure passwords
        $s_pass = password_hash($pass,PASSWORD_BCRYPT);
        $s_repass = password_hash($repass,PASSWORD_BCRYPT);
// select email
        $sql_email = "SELECT * FROM register WHERE email='$email'";
        $res_email = mysqli_query($conn,$sql_email);

        $num_email = mysqli_num_rows($res_email);
// Condition1:*Check email exist or not* if nmbr of rows greater than 0 show error email already exist
        if($num_email>0){
            ?><script>
            swal("", "Email already exist. Login instead", "error");
            </script><?php
        }
// Condition1:else(if nmbr of rows is 0 it means there is no already existing email) then exucute the following code.
        else{
    // Condition1b: Check pass and retype pass are same. If same insert the record in database
    // condition m jo pass and repass use kren ge wo without encryption wla kren ge
            if($pass == $repass){
                $sql_insert = "INSERT INTO register(name,email,phone,pass,repass) 
                VALUES('$name','$email','$phone','$s_pass','$s_repass')";

                $res_insert = mysqli_query($conn,$sql_insert);
                ?><script>
                swal("", "You are successfully registered", "success");
            </script><?php
            }
    // Condition1b: Else show error
            else{
                ?><script>
                swal("", "Password and retype Password are not same", "error");
            </script><?php
            }
        }
    }
?>