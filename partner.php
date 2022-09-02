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
    <link rel="stylesheet" href="partner.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>partner</title>
    <!-- ---------slider------- -->
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <script src="https://kit.fontawesome.com/088d3f36f9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <?php
        include 'main-style.php';
      ?>
</head>

<body>
    <div class="nav">
        <?php
        include 'nav.php';
        include 'connection.php';
         ?>
        <div class="nav-content nav-for-hero">
            <div class="nav-pic">
                <img src="f/donation.jpg" alt="No image">
            </div>
            <div class="heading" bis_skin_checked="1">
                <h1>Partner</h1>
            </div>
        </div>
    </div>
    <div class="about">
        <div class="about1 abouts">
            <div class="about-content">
                <h1>Honory and voluntary Services</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Facere,
                    qui, fuga ipsam quidem eligendi non veniam inventore
                    nesciunt, quis
                    officia reprehenderit tempore minus? Neque sit
                    aspernatur maiores
                    officia temporibus! Possimus, repudiandae? Optio.</p>
            </div>
            <div class="about-img">
                <img src="f/images (4).jpg" alt="">
            </div>
        </div>
    </div>

    <!-- -----------partner-slider------- -->
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

    </div>

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