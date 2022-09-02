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
    <link rel="stylesheet" href="partner-deetail.css">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />
    <link rel="stylesheet" href="about-admin.css">
    <link rel="stylesheet" href="managmnet-admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partner detail</title>
    <?php
        include 'main-style.php';
    ?>
</head>

<body>
    <div class="nav-admin-about">
        <?php 
          include 'aside.php';
          include 'connection.php';

          $Sr2 = $_GET['Sr'];
          $sql = "SELECT * FROM partner WHERE Sr=$Sr2";
          $res = mysqli_query($conn,$sql);
          $row = mysqli_fetch_assoc($res);
        ?>
        <div class="r-content-main partner-style">
        <div class="heading">
            <div class="admin-heading">
                <h1><?php echo $_SESSION['uname']; ?> Admin Panel</h1>
                <div class="logout-btn">
                    <a href="logout.php">Log out</a>
                </div>


            </div>
            <div class="panel-main">
            <div class="panel-welcome">
                <h1>Partner Detail</h1>
                <p>Organization/Partner Name: <?php echo $row['p_name'] ?></p>
                <p>Email: <?php echo $row['p_email'] ?></p>
                <p>Contact no: <?php echo $row['p_contact'] ?></p>
                <p>Last Donate: 22 June 2022</p>
            </div>
            </div>
        </div>

        <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
        <script src="../path/to/flowbite/dist/flowbite.js"></script>
</div>
</body>

</html>