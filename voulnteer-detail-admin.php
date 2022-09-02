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
    <title>volunteer detail</title>
    <?php
        include 'main-style.php';
    ?>
</head>

<body>
    <div class="nav-admin-about">
        <?php
    include 'aside.php';
    include 'connection.php';
  
          $vol_id2 = $_GET['vol_id'];
          $sql = "SELECT * FROM vol_admin WHERE vol_id=$vol_id2";
          $res = mysqli_query($conn,$sql);
          $row = mysqli_fetch_assoc($res);
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
                <h1>Voulnteer Information Detail</h1>
                <img src="<?php echo $row['img'] ?>" alt="">
                <p>Name: <br> <?php echo $row['name'] ?></p>
                <p>Father Name: <br> <?php echo $row['fat_name'] ?></p>
                <p>Date of Birth: <br> <?php echo $row['DOB'] ?></p>
                <p>ID Crad No: <br> <?php echo $row['idcard'] ?></p>
                <p>Telephon(resd): <br> <?php echo $row['telephone'] ?></p>
                <p>Contact Number: <br> <?php echo $row['contact'] ?></p>
                <p>Email: <br> <?php echo $row['email'] ?></p>
                <p>Address: <br><?php echo $row['address'] ?></p>
                <p>Person to contact in Emergency: <br><?php echo $row['g_name'] ?></p>
                <p>Relationship: <br> <?php echo $row['g_rel'] ?></p>
                <p>Telephone: <br> <?php echo $row['g_tel'] ?></p>
                <h1>Qualification Information Detail</h1>
                <p>Institution: <br> <?php echo $row['inst_name']?></p>
                <p>Degree: <br><?php echo $row['inst_name']?></p>
                <p>Major subject: <br> <?php echo $row['deg_name']?></p>
                <p>Grade: <br><?php echo $row['grade']?></p>
                <p>Year : <br><?php echo $row['year']?></p>

                <h1>Availabilty Details</h1>
                <p>Availabile dates</p>
                <p>From: <br> <?php echo $row['f_date'] ?> To <?php echo $row['t_date'] ?></p>
                <p></p>
                <p></p>
            </div>

        </div>

        <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
        <script src="../path/to/flowbite/dist/flowbite.js"></script>
</div>
</body>

</html>