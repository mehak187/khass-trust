<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title>Login</title>
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
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
            <h1>Login</h1>

            <div class="form-field">
                <label for="email">Email address</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div class="form-field">
                <label for="pass">Pass</label>
                <input type="password" name="pass" id="pass" required>
            </div>

            <div class="submit-btn">
                <input type="submit" value="Login" name="submit">
            </div>
            <div class="alt-link">
                <p>Don't have an account, <a href="register.php">Sign up</a></p>
            </div>
        </form>
    </div>
</body>
</html>
<?php
    include 'connection.php';
    // CONDITION 1:
    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
// Select where db email id is equal to user entered email id
        $sql_email = "SELECT * FROM register WHERE email='$email'";
        $email_res = mysqli_query($conn,$sql_email) or die("query unsuccesful");

        $email_num = mysqli_num_rows($email_res);    
        // CONDITION 1a IF: check if such email exist which is equal to user typed email
        if($email_num>0) {
           // store specific email in $emailrow_fetch
            $emailrow_fetch = mysqli_fetch_assoc($email_res);
           // store the password of specific fetched email row in email_pass
            $emailrow_pass = $emailrow_fetch['pass'];
            $_SESSION['uname'] = $emailrow_fetch['name'];
           // check if password of fetched email row = entered password
            $pass_decode = password_verify($pass,$emailrow_pass);
            // CONDITION 1ai IF::
            if($pass_decode){
                echo "LOGIN successful";
                header("Location: http://localhost/khass-project/admin-home.php");
             }
            // CONDITION 1ai else::
            else{
               
?><script>
swal("", "Invalid Password", "error");
</script><?php

            }
        }
        // CONDITION 1a else:
        else{
            
?><script>
swal("", "Invalid email", "error");
</script><?php

        }
    }
?>