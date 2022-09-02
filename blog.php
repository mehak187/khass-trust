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
    <!-- <link rel="stylesheet" href="blog.css"> -->
    <link rel="stylesheet" href="partner.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Document</title>
    <?php
        include 'blog-style.php';
        include 'main-style.php';
    ?>
  
</head>
<body>
    <div class="nav">
        <?php
        include 'nav.php';
        include 'connection.php';
        $sql = "SELECT * FROM blog order by Sr DESC";
        $res = mysqli_query($conn,$sql);
      ?>
    </div>
    <div class="most-viewed-blog">
        <h1 class="main-blog-heading">Most Viewed Blogs</h1>
        <div class="most-viewed-blogs">
            <div class="blog-1">
                <?php
                $i = 1;
                 while(($row = mysqli_fetch_assoc($res)) && ($i<=4)){ ?>
                    <div class="blog1">
                        <a href="fullblog.php"><img src="<?php echo $row['hfile'] ?>" alt=""></a>
                        <div class="blog1-content">
                            <h1><?php echo $row['head'] ?></h1>
                            <p><?php echo $row['des'] ?>
                            </p>
                            <a href="fullblog.php?Sr=<?php echo $row['Sr'];?>">Read More</a>
                        </div>
                    </div> <?php $i++; ?>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="most-viewed-blog">
        <h1 class="main-blog-heading">All posts</h1>
        <div class="most-viewed-blogs">
            <div class="blog-1">
            <?php
             $sql2 = "SELECT * FROM blog";
             $res2 = mysqli_query($conn,$sql2);
                 while($row2 = mysqli_fetch_assoc($res2)){ ?>
                <div class="blog1">
                    <img src="<?php echo $row2['hfile'] ?>" alt="">
                    <div class="blog1-content">
                        <h1><?php echo $row2['head'] ?></h1>
                        <p><?php echo $row2['des'] ?>
                        </p>
                        <a href="fullblog.php?Sr=<?php echo $row2['Sr'];?>">Read More</a>
                    </div>
                </div>
                <?php } ?>
            </div>
            
        </div>
    </div>
    <!-- <div class="most-viewed-blog">
        <div class="most-viewed-blogs">
            <div class="blog-1">
                <div class="blog1">
                    <img src="f/blog1.jpg" alt="">
                    <div class="blog1-content">
                        <h1>Exercise</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos architecto sit numquam
                            doloribus, veniam alias delectus aliquam necessitatibus illum quod cum explicabo iure ad
                            ducimus exercitationem
                        </p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="blog1">
                    <img src="f/covid.jpg" alt="">
                    <div class="blog1-content">
                        <h1>Covid 19</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos architecto sit numquam
                            doloribus, veniam alias delectus aliquam necessitatibus illum quod cum explicabo iure ad
                            ducimus exercitationem
                        </p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="blog-2">
                <div class="blog1">
                    <img src="f/blog1.jpg" alt="">
                    <div class="blog1-content">
                        <h1>Exercise</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos architecto sit numquam
                            doloribus, veniam alias delectus aliquam necessitatibus illum quod cum explicabo iure ad
                            ducimus exercitationem
                        </p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="blog1">
                    <img src="f/blog4.jpg" alt="">
                    <div class="blog1-content">
                        <h1>Exercise</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos architecto sit numquam
                            doloribus, veniam alias delectus aliquam necessitatibus illum quod cum explicabo iure ad
                            ducimus exercitationem
                        </p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <?php 
    include 'footer.php';
    ?>
</body>

</html>