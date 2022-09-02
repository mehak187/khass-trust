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
        <title>founder</title>
        <?php
        include 'main-style.php';
      ?>
    </head>
    <body>
    <?php
        include 'connection.php';
      ?>
        <div class="nav">
        <?php
        include 'nav.php';
        ?>
        </div>
        <div class="main-founder">
            <div class="our-founder m-founder">
            <?php
            $f_select_query = "Select * FROM founder";
            $res_f_query = mysqli_query($conn,$f_select_query) or die("query failed");
            $i = 1;
            while(($row_founder=mysqli_fetch_assoc($res_f_query)) && ($i<=1)){ 
                ?>
                <div class="founder">
                    <h1 class="head-h1">Our Founder</h1>
                    <div class="founder-img">
                        <img src="<?php echo $row_founder['img']?>"
                            alt="">
                    </div>
                    <div class="founder-content">
                        <h2><?php echo $row_founder['head']?></h2>
                        <p><?php echo $row_founder['des']?></p>
                    </div>
                </div>
                <?php $i++; } ?>
            </div>
            <div class="management">
                <h1 class="head-h1">Our Management</h1>
                <?php
            $m_select_query = "Select * FROM management";
            $res_m_query = mysqli_query($conn,$m_select_query) or die("query failed");
            // $j = 1;
            while($row_man=mysqli_fetch_assoc($res_m_query)){ 
                ?>
                <div class="mang-person person1">
                    <img
                        src="<?php echo $row_man['img']?>"
                        alt="">
                    <div class="mang-person-content">
                        <h1><?php echo $row_man['head']?></h1>
                        <h3><?php echo $row_man['position']?></h3>
                        <p><?php echo $row_man['des']?></p>
                    </div>
                </div>
                <?php  } ?>
            </div>
        </div>
        <?php 
    include 'footer.php';
    ?>

    </body>
</html>
