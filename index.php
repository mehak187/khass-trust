<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    
    <!-- ---------slider------- -->
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <script src="https://kit.fontawesome.com/088d3f36f9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <?php
    include 'main-style.php'; 
    ?>
</head>

<body>
    <div class="nav index-main-navbar">
        <div class="head-info">
            <p><i class="fa-solid fa-location-dot"></i> Head Office : Akbar plaza near 1122 Daska road ,Sailkot</p>
            <p>
                <i class="fa-solid fa-phone"></i> &nbsp&nbsp0527839759 &nbsp&nbsp&nbsp&nbsp
                <i class="fa-solid fa-envelope"></i> &nbsp&nbspKhasss@gmail.com
            </p>
            <span>
                <!-- --------google translater----- -->
                <div id="google_element"></div>
                <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate">
                </script>
                <script>
                function loadGoogleTranslate() {
                    new google.translate.TranslateElement(
                        "google_element");
                }
                </script>
                <!-- -------------------------- -->
            </span>
        </div>
        <?php
        // include 'nav.php';
        include 'connection.php';
      ?>
        <nav class="nav-index">
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
                <li><a href="login.php">Log in</a></li>
            </ul>
            <ul class="btn">
                <li class="btn"><a href="donation-form.php">Donate</a></li>
            </ul>
           
        </nav>
        <div class="nav-content">
                <div class="content-data">
                    <h1>KHASS TRUST</h1>
                    <h2>Work for Humanity,Make life smiles</h2>
                    <p>We are making needy people's life better with your donation</p>
                    <a href="voulnteer-form.php">Become a voulnteer</a>
                </div>
                <div class="content-icons">
                    <div class="content-icon1"><a href="videos.php"><img src="f/Icon 1.png" alt="">
                            <p>Watch videos</p>
                        </a>
                    </div>
                    <div class="content-icon1"><a href="partner.php"><img src="f/icon 2.png" alt="">
                            <p>Our Partners</p>
                        </a>
                    </div>
                    <div class="content-icon1"><a href="whoweare.php"><img src="f/Icon3.png" alt="">
                            <p>Who we are?</p>
                    </div>
                    </a>
                </div>
            </div>
    </div>
<!-- ================================
--------activity
=================================== -->
    <div class="heading-blog">
            <h1>Our Activities</h1>
            
        </div>
    <div class="activity">
    <?php
         $sql = "SELECT * FROM activity order by id DESC limit 3";
         $res = mysqli_query($conn,$sql);
         while($row = mysqli_fetch_assoc($res)){?>
            <div class="ration">
                <a href="orphan.php">
                    <div class="ration-img">
                        <img src="<?php echo $row['hfile']?>" alt="">
                    </div>
                </a>
                <div class="ration-content">
                    <h1><?php echo $row['head'] ?></h1>
                    <p><?php echo $row['des'] ?></p>
                    <a href="orphan.php?id=<?php echo $row['id'];?>">Read More</a>
                </div>
            </div>
        <?php } ?>
        
    </div>

<!-- ================================
--------partner-slider-
=================================== -->
<div class="my-partner-sec">
        <div class="my-p-sec-content">
            <h3>Our Partners</h3>
            <p>Khass trust is really thankfull to their partners for their sponsorship to full our trust expenditures
            </p>
            <div class="myslider">
                <?php
                        $sql = "SELECT * FROM partner order by Sr DESC";
                        $res = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($res)){
                ?>
                <div class="myslider-img">
                    <div class="slider-data">
                        <img src="<?php echo $row['img']?>" alt="">
                        <h1><?php echo $row['p_name'] ?></h1>
                        <p><?php echo $row['des'] ?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
<!-- ================================
--------founder-
=================================== -->
    <div class="main-founder">
        <div class="our-founder">
            <?php
            $f_select_query = "Select * FROM founder";
            $res_f_query = mysqli_query($conn,$f_select_query) or die("query failed");
            $i = 1;
            while(($row_founder=mysqli_fetch_assoc($res_f_query)) && ($i<=1)){ 
                ?>
            <div class="founder">
                <h1 class="head-h1"><a href="founder.php"> Our Founder </a></h1>
                <div class="founder-img">
                    <img src="<?php echo $row_founder['img']?>" alt="">
                </div>
                <div class="founder-content">
                    <h2><?php echo $row_founder['head']?></h2>
                    <p><?php echo $row_founder['des']?></p>
                    <a href="founder.php">Read More</a>
                </div>
            </div>
            <?php $i++; } ?>
        </div>
<!-- ================================
--------management-
=================================== -->
        <div class="management">
            <h1 class="head-h1"><a href="founder.php"> Our Management </a></h1>
            <?php
            $m_select_query = "Select * FROM management order by id DESC";
            $res_m_query = mysqli_query($conn,$m_select_query) or die("query failed");
            $j = 1;
            while(($row_man=mysqli_fetch_assoc($res_m_query)) && ($j<4)){ 
                ?>
            <div class="mang-person person1">
                <img src="<?php echo $row_man['img']?>" alt="">
                <div class="mang-person-content">
                    <h1><?php echo $row_man['head']?></h1>
                    <h3><?php echo $row_man['position']?></h3>
                    <p><?php echo $row_man['des']?></p>
                </div>
            </div>
            <?php $j++; } ?>

        </div>
    </div>
    <!-- #################BLOGS############### -->
    <div class="blog blog-home">
        <div class="heading-blog">
            <h1>Latest Blog</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste, ex
                tempore. Dicta.</p>
        </div>
        <div class="blog-img">
            <?php
             $sql2 = "SELECT * FROM blog order by Sr DESC LIMIT 3";
             $res2 = mysqli_query($conn,$sql2);
                 while($row2 = mysqli_fetch_assoc($res2)){ ?>
            <div class="blog-img1">
                <a href="fullblog.html"> <img src="<?php echo $row2['hfile'] ?>" alt=""></a>
                <div class="blog-img-content-p">
                    <p><?php echo $row2['date'] ?></p>
                </div>
                <div class="blog-img-content-a">
                    <a href="fullblog.php?Sr=<?php echo $row2['Sr'];?>">Read More</a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <!-- ############## Footer##########  -->
    <?php 
    include 'footer.php';
    ?>

<!-- ------------JS--------- -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script>
    $(".myslider").slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 2,
        prevArrow: ".priv_arrow",
        nextArrow: ".next_arrow",
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 375,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });
   
    </script>

</body>

</html>