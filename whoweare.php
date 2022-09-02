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
        <link rel="stylesheet" href="blog.css">
        <link rel="stylesheet" href="latest.css">
        <link rel="stylesheet" href="partner.css">
        <link rel="stylesheet" href="ration.css">
        <link rel="stylesheet"
            href="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
            />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
            />
        <title>who we are</title>
        <?php
        include 'main-style.php';
    ?>
    </head>
  <body>
    <div class="nav">
      <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn" id="hide">
          <i class="fas fa-bars"></i>
        </label>
        <label class="logo"> <img src="f/Group 16264.png" alt=""></label>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="partner.php">Partner</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="latest.php">Latest News</a></li>
        </ul>
        <ul class="btn">
          <li class="btn"><a href="donation-form.php">Donate</a></li>
        </ul>
      </nav>
      <div class="nav-content">
    <div class="nav-pic">
      <img src="f/donation.jpg" alt="">
    </div>
    <div class="heading">
      <h1>Who We Are</h1>
    </div>
  </div>
    </div>

    <div class="about">
    <?php
         include 'connection.php';
        $sql = "SELECT * FROM about order by Sr DESC";
        $res = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($res)){
      ?>
        <div class="about1 abouts">
            <div class="about-content">
                <p><?php echo $row['des'] ?></p>
            </div>
            <div class="about-img">
                <img src="<?php echo $row['img'] ?>" alt="">
            </div>
        </div>
        <?php } ?>

    </div>
    <?php 
    include 'footer.php';
    ?>
</body>
</html>