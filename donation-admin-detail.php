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
    <link rel="stylesheet" href="detail-form.css">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />
    <link rel="stylesheet" href="about-admin.css">
    <link rel="stylesheet" href="managmnet-admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation admin detail</title>
    <?php
        include 'main-style.php';
        include 'connection.php';
  
        $id2 = $_GET['id'];
        $sql = "SELECT * FROM donation_form WHERE id=$id2";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res);
        $num = mysqli_num_rows($res);
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
            <div class="form-detail v-form-det">
                <?php if($num>0) { ?>
                <h1>Donation Information Detail</h1>
                <p>Name: <?php echo $row['f_name']?></p>
                <p>Last Name: <?php echo $row['l_name']?></p>
                <p>Organization Name:<?php echo $row['organization']?></p>
                <p>Email: <?php echo $row['email']?></p>
                <p>Contact Number:<?php echo $row['contact']?></p>
                <p>Address: <?php echo $row['address']?></p>
                <p>Personal Message: <?php echo $row['msg']?></p>
                <p>Country: <?php echo $row['country']?></p>
                <p>City: <?php echo $row['city']?></p>
                <p>State/Province:<?php echo $row['state']?></p>
                <p>Zip code: <?php echo $row['zip']?></p>
                <h1>Donation Information Detail</h1>
                <p>Amount : <?php echo $row['amount']?></p>
                <p>Currency : <?php echo $row['currency']?></p>
                <p>Frequency : <?php echo $row['frequency']?></p>
                <p>On account of: <?php echo $row['account_of']?></p>
                <?php }
                else {
                    echo "<h1>There is no record to show<h1>";
                } ?>
            </div>

        </div>

        <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
        <script src="../path/to/flowbite/dist/flowbite.js"></script>
            </div>
</body>

</html>