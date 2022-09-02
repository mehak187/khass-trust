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
    <link rel="stylesheet" href="fullblog.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>full blog</title>
    <?php
        include 'main-style.php';
        ?>
</head>

<body>
    
    <div class="nav">
        <?php
        include 'nav.php';
        ?>
        <div class="nav-content">
        </div>
    </div>
    <div class="f-blog-m">
    <div class="nav-pic">
    <?php
        include 'connection.php';
        $Sr3=$_GET['Sr'];
        $sql = "SELECT * FROM blog WHERE Sr=$Sr3";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res);?>
    <img src="<?php echo $row['hfile'] ?>" alt="">
    </div>
    <div class="fullblog-heading">
        <h1>Daily Exercise</h1>
        <div class="full-blog-writer">
            <div class="p-by">
            <p>Posted by:Mr.TAHA</p>
            <p>Posted Date:<?php echo $row['date'] ?>
            </div>
            <div class="p-by">
            <img
                    src="data:image/jpeg;base64,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"
                    alt=""></p>
                   
            </div>

        </div>
    </div>
    <div class="main-exercise-blog">
        <div class="exercise-blog-content">
            <div class="exercise-blog1">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa cumque repellat culpa facilis,
                    incidunt dolor eveniet dignissimos? Eaque, consectetur reprehenderit? Autem voluptatem deleniti
                    necessitatibus laboriosam eveniet provident quam inventore minus nam incidunt nemo, iusto, assumenda
                    modi alias similique. Praesentium dolorem commodi, incidunt expedita illum exercitationem debitis
                    quod quidem nesciunt maiores, voluptatem non impedit est? Itaque aperiam nihil aliquam inventore
                    cupiditate?</p>
            </div>
            <div class="exercise-blog1-img">
                <img src="<?php echo $row['pfile'] ?>" alt="">
            </div>
            <div class="exercise-blog1">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi qui obcaecati, eveniet consequatur
                    est ratione rerum, recusandae quis nulla animi quae provident maiores. Deserunt iste deleniti neque
                    fugiat, placeat cupiditate aperiam, facilis molestiae laudantium ea aliquam modi aut repellat
                    praesentium tempora saepe explicabo amet laboriosam odit quisquam voluptatum veniam quaerat fuga.
                    Amet aspernatur eveniet quaerat impedit similique aperiam officia distinctio animi, veniam incidunt
                    facere, aliquam assumenda unde aut sunt temporibus ea! Aliquid ea, quaerat similique aliquam
                    nesciunt iste excepturi perferendis. Doloribus, eum saepe. Velit consequatur sequi, doloremque natus
                    officiis vitae incidunt quos maxime quis possimus neque distinctio consectetur obcaecati ex!</p>
            </div>
        </div>
        <div class="exercise-blog2">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt unde nihil cumque vel iste.
                Consequuntur, repellat eos nostrum, unde dolor asperiores dicta ipsum, at quam excepturi odit esse?
                Natus, ipsum commodi placeat similique corporis, perspiciatis quod consectetur doloremque ducimus fugit
                cum. Iusto nisi consectetur possimus assumenda ratione eveniet omnis nostrum at commodi voluptatem
                maiores eos explicabo minima excepturi soluta corporis, asperiores, maxime eligendi! Consequuntur ad
                doloremque corrupti ab, deserunt quas sed, earum assumenda modi eveniet minima quaerat. Totam corrupti
                sint ea doloribus, laborum accusantium sequi quas quod iste eligendi cupiditate necessitatibus debitis
                impedit, obcaecati aspernatur, reiciendis optio? Sint, sunt. Perferendis id doloribus earum dignissimos
                iste quidem! Officiis neque obcaecati atque recusandae iusto eius, nobis id explicabo in animi corporis
                odio porro laudantium vero ipsam eos sint repellendus. Expedita non vitae ad facere officiis. Aspernatur
                veniam voluptate sapiente ratione quibusdam perspiciatis. Numquam, sequi. Voluptas nihil minima officiis
                quae placeat porro, autem accusantium culpa quod ducimus debitis suscipit, deleniti ipsa necessitatibus
                tempore laboriosam a velit pariatur similique vitae excepturi. Eveniet veniam hic quo, dolore
                exercitationem impedit, qui suscipit non voluptatem similique sunt! Molestiae dolorem nihil ad aliquam
                numquam asperiores dolor voluptates odit, illum reiciendis doloribus natus eveniet omnis inventore
                possimus voluptatem.</p>
        </div>
    </div>
    <?php 
    include 'footer.php';
    ?>
    </div>
</body>

</html>