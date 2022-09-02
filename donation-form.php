<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="crossorigin="anonymous"
      referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="donation-form.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      />
    <title>Donation form</title>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <?php
        include 'form-style.php';
        include 'main-style.php';
      ?>
  </head>
  <body>
    <div class="nav">
    <?php
        include 'nav.php';
      ?>
     <div class="form">
         <h1 class="main-heading">Donation Form</h1>
       
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="POST">
            <div class="name">
                <div class="one-name">
                <h1>First Name:</h1>
                <input type="text" name="f_name" id="" placeholder="Enter donor first name" required>
            </div>
                <div class="one-name">
                <h1>Last Name:</h1>
                <input type="text" name="l_name" id=""placeholder="Enter donor last name" required>
            </div>
            </div>
            <div class="organize">
            <h1>Organization:</h1>
            <input type="text" name="organization" id="organization" placeholder="If on behlaf of an organization or group of peoples">
        </div>
            <div class="contact-email">
                <div class="one-name">
                <h1>Contact Number:</h1>
                <input type="text" name="contact" id="contact" placeholder="Enter numeric number only" required>
            </div>
                <div class="one-name">
                <h1>Email:</h1>
                <input type="email" name="email" id="email" placeholder="Enter Emial here" required>
            </div>
            </div>
            <div class="adress">
                <div class="one-name">
                <h1>Address:</h1>
                <input type="text" name="address" id="" required>
            </div>
                <div class="one-name">
                <h1>Personal Message</h1>
                <input type="text" name="msg" id="" required>
            </div>
            </div>
            <div class="name">
                <div class="one-name">
                <h1>Country</h1>
                <input type="text" name="country" id="" required>
            </div>
                <div class="one-name">
                <h1>City</h1>
                <input type="text" name="city" id="" required>
            </div>
            </div>
            <div class="name">
                <div class="one-name">
                <h1>State/Province</h1>
                <input type="text" name="state" id="" required>
            </div>
                <div class="one-name">
                <h1>Zip</h1>
                <input type="text" name="zip" id="">
            </div>
            </div>
            <h1 class="info">Dontaion Information:</h1>
            <div class="name">
                <div class="one-name">
                <h1>Amount</h1>
                <input type="text" name="amount" id="" required>
            </div>
                <div class="one-name">
                <h1>Currency</h1>
                <input type="text" name="currency" id="" required>
            </div>
            </div> <div class="name">
                <div class="one-name">
                <h1>Frequency</h1>
                <input type="text" name="frequency" id="" required>
            </div>
                <div class="one-name">
                <h1>On account of:</h1>
                <input type="text" name="account_of" id="" required>
            </div>
            </div>
            <div class="btns_main">
            <input class="btn1" type="submit" value="submit" name="submit">
            <input class="btn2" type="reset" value="reset" name="reset">
        </div>
        </form>
     </div>
    </div>
    
  </body>
</html>
<?php
include 'connection.php';
    if(isset($_POST['submit'])){
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $organization = $_POST['organization'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $msg = mysqli_real_escape_string($conn, $_POST['msg']);
        $country = $_POST['country'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];
        $amount = $_POST['amount'];
        $currency = $_POST['currency'];
        $frequency = $_POST['frequency'];
        $account_of = $_POST['account_of'];

        $sql = "INSERT INTO donation_form(f_name,l_name,organization,contact,email,address,msg,
        country,city,state,zip,amount,currency,frequency,account_of)
        VALUES('$f_name','$l_name','$organization','$contact','$email','$address','$msg',
        '$country','$city','$state','$zip','$amount','$currency','$frequency','$account_of')";

        $result = mysqli_query($conn,$sql);
        ?><script>
        swal("", "Data entered successfully", "success");
    </script><?php
    }
?>