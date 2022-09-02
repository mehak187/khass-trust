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
    <!-- <link rel="stylesheet" href="about.css"> -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>About</title>
    <?php 
      include 'about-style.php';
      include 'main-style.php';
    ?>
</head>

<body>
   <div class="about-m">
   <div class="nav">
        <?php
         include 'nav.php';
         include 'connection.php';
        $sql = "SELECT * FROM about order by Sr DESC";
        $res = mysqli_query($conn,$sql);
      ?>
        <div class="nav-content nav-for-hero">
            <div class="nav-pic">
                <img src="f/donation.jpg" alt="">
            </div>
            <div class="heading" bis_skin_checked="1">
                <h1>About Us</h1>
            </div>
        </div>
    </div>
    <div class="about">
        <?php
        while($row = mysqli_fetch_assoc($res)){
    ?>
        <div class="about1 abouts">
            <div class="about-content">
                <h1><?php echo $row['header'] ?></h1>
                <p><?php echo $row['des'] ?></p>
            </div>
            <div class="about-img">
                <img src="<?php echo $row['img']?>" alt="">
            </div>
        </div>
        <?php } ?>


    </div>
    <?php 
    include 'footer.php';
    ?>
   </div>
</body>
</html>
<?php
?>