<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
    include 'connection.php';
     $id2 = $_GET['id'];

     $sql4 = "DELETE FROM news WHERE id=$id2" or die("Query failed");
     $res = mysqli_query($conn,$sql4);

     ?><script>
     swal("", "Data entered successfully", "success");
 </script><?php
include 'latest-news-admin.php'; 
        ?>
</body>
</html>