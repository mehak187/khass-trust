<?php
  session_start();
  if(!isset($_SESSION['uname'])){
    header("Location: http://localhost/khass-project/login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="adminhome.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="../path/to/flowbite/dist/flowbite.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />
    <link rel="stylesheet" href="latest-news-admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latest news admin</title>
    
<?php
        include 'main-style.php';
    ?>
</head>
<body>
    <div class="nav-admin-about">
       <?php
            include 'aside.php'
       ?>
        <div class="r-content-main relative overflow-x-auto shadow-md lg:rounded-lg">
            <div class="heading">
                <div class="admin-heading">
                <h1><?php echo $_SESSION['uname']."'s"; ?> Admin Panel</h1>
                <div class="logout-btn">
                    <a href="logout.php">Log out</a>
                </div>

                </div>
                <div class="admin-home">
                    <h1></i>Latest News</h1>
                </div>
            </div>
            <section class="tbl-main">
            <table class="w-full text-lg text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Sr#
                        </th>
                        <th scope="col" class="px-6 py-3">
                            News Descripition
                        </th>
                        
                        <th scope="col" class="px-6 py-3">
                            <a href="add-news-admin.php" class="add-btn">Add</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                <?php
        include 'connection.php';
        $sql = "SELECT * FROM news";
        $res = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($res)){?>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                             <?php echo $row['id'] ?>
                        </th>
                        <td class="px-6 py-4">
                            <?php echo $row['head'] ?>
                        </td>
                    
                        <td class="px-6 py-4">
                            <a href="edit-news-admin.php?id=<?php echo $row['id'];?>"
                                class="font-medium admin-about-btn1 back-ground-blue-600 dark:text-blue-500 ">Edit</a>
                            <a href="del-news-admin.php?id=<?php echo $row['id'];?>"
                                class="font-medium text-blue-600 admin-about-btn2 dark:text-blue-500 ">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
        </div>
    </div>
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.js"></script>
</body>

</html>