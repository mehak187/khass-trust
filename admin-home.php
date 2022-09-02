<?php
  session_start();
  if(!isset($_SESSION['uname'])){
    header("Location: http://localhost/khass-project/login.php");
  }
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <link rel="stylesheet" href="adminhome.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="adminhome.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="../path/to/flowbite/dist/flowbite.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />
    <link rel="stylesheet" href="about-admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin home</title>
    <?php
        // include 'form-style.php';
        include 'main-style.php';
    ?>
</head>

<body>
    <div class="nav-admin-about">
        <?php
          include 'aside.php';
        ?>
        <div class="r-content-main relative overflow-x-auto shadow-sm sm:rounded-lg">
        <div class="heading">
            <div class="admin-heading">
                <h1><?php echo $_SESSION['uname']."'s"; ?> Admin Panel</h1>
                <div class="logout-btn">
                    <a href="logout.php">Log out</a>
                </div>
            </div>
            <div class="admin-home">
                <h1><i class="fa-solid fa-house-chimney"></i>Home</h1>
                <li class="home-page"><a href="index.php"> Visit
                        Home Page</li>
                </a>
            </div>
            <div class="home-option  px-3">
                <div class="home-option1">
                    <ul>
                        <li><a href="video-admin.php">Watch Videos</li>
                        </a>
                        <li><a href="admin-partner.php">Our Partners</li>
                        </a>
                        <li><a href="about-admin.php">Who we are?</li>
                        </a>
                        <li><a href="activity-admin.php">Our Activity</li>
                        </a>
                        <li><a href="founder-admin.php">Our Founder</li>
                        </a>
                        <li><a href="managmnet-admin.php">Our Managment</li>
                        </a>
                        <li><a href="blog-admin.php">Latest Blog</li>
                        </a>
                    </ul>
                </div>
                <div class="home-option2">
                    <ul>
                        <li><a href="voulnteer-admin.php">Volunteer form information</li>
                        </a>
                        <li><a href="donation-admin.php">Donation form information</li>
                        </a>

                    </ul>
                </div>

            </div>
        </div>
</div>
    </div>
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.js"></script>
</body>

</html>