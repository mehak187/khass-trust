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
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="blog.css">
    <link rel="stylesheet" href="latest.css">
    <link rel="stylesheet" href="partner.css">
    <link rel="stylesheet" href="ration.css">
    <link rel="stylesheet" href="videos.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>video</title>
    <?php
        include 'main-style.php';
    ?>
</head>

<body>
    <?php 
            include 'connection.php';
            $sql = "SELECT * FROM video order by id DESC limit 3";
            $res = mysqli_query($conn,$sql);
        ?>
    <div class="nav">
        <div class="latest-news-f">
            <div class="nav">
                <?php
        include 'nav.php';
      ?>
                <div class="nav-content nav-for-hero">
                    <div class="nav-pic">
                        <img src="f/donation.jpg" alt="">
                    </div>
                    <div class="heading">
                        <h1>Videos</h1>
                    </div>
                </div>
            </div>
            <h1 class="main-heading">
                Most Viewd Videos
            </h1>
            <div class="main-video">
                <?php while($row = mysqli_fetch_assoc($res)) {?>
                <div class="video1">
                    <div class="video">
                        <video controls>
                            <source src="<?php echo $row['video']?>">
                        </video>
                    </div>
                    <div class="video-content">
                        <h1><?php echo $row['header']?></h1>
                        <p><?php echo $row['des']?></p>
                        <p>Video Duration:<?php echo $row['duration']?></p>
                    </div>
                </div>
                <?php } ?>
            </div>

            <h1 class="main-heading">
                Other videos
            </h1>
            <div class="all-videos other-videos">
                <?php 
          $sql2 = "SELECT * FROM video";
          $res2 = mysqli_query($conn,$sql2);
          while($row2 = mysqli_fetch_assoc($res2)) {?>
                <div class="video">
                    <video controls>
                        <source src="<?php echo $row2['video']?>">
                    </video>
                </div>

                <?php } ?>
            </div>
            <?php 
    include 'footer.php';
    ?>
</body>

</html>