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
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>latest news</title>
    <?php
      include 'main-style.php';
    ?>
    
</head>
<body>
    <div class="latest-news-f">
        <div class="nav">
            <?php
        include 'nav.php';
        include 'connection.php';
      ?>
            <div class="latest-heading">
                <h1>Latest News</h1>
            </div>
        </div>
        <div class="trending-news">
            <h1 class="latest-news">Trending News</h1>
            <div class="trending-news1">
                <?php
                 $sql3 = "SELECT * FROM news order by id DESC limit 1";
                 $res3 = mysqli_query($conn,$sql3);
                 $row3 = mysqli_fetch_assoc($res3);
                 ?>
                <div class="covid-19">
                    <div class="covid-img">
                        <div class="co-img">
                            <img src="<?php echo $row3['hfile']?>" alt="">
                        </div>
                        <div class="covid-content">
                            <p><?php echo $row3['des']?></p>
                        </div>
                    </div>

                    <?php
                 $sql4 = "SELECT * FROM news order by id DESC limit 1,2";
                 $res4 = mysqli_query($conn,$sql4);
                 $row4 = mysqli_fetch_assoc($res4);
                 ?>
                    <div class="out-of-school">
                        <img src="<?php echo $row4['hfile']?>" alt="">
                        <p><?php echo $row4['des']?></p>
                    </div>
                </div>
                <div class="supply-things">
                    <?php
                 $sql = "SELECT * FROM news limit 3";
                 $res = mysqli_query($conn,$sql);
                 while($row = mysqli_fetch_assoc($res)){?>
                    <div class="supply-1">
                        <div class="supply-img">
                            <img src="<?php echo $row['hfile']?>" alt="">
                        </div>
                        <div class="supply-img-content">
                            <p><?php echo $row['des'] ?></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>


        <div class="weekly-news">
            <h1 class="weekly-news-heading">Weekly News</h1>
            <div class="weekly-news-content">
                <?php
                 $sql2 = "SELECT * FROM news order by id DESC";
                 $res2 = mysqli_query($conn,$sql2);
                 while($row2 = mysqli_fetch_assoc($res2)){?>
                <div class="weekly-news1">
                    <div class="weekly-news-img">
                        <img src="<?php echo $row2['hfile']?>" alt="">
                    </div>
                    <div class="weekly-news-img-content">
                        <p><?php echo $row2['des']?></p>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
        <?php 
    include 'footer.php';
    ?>
    </div>
</body>

</html>