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
     $Sr2 = $_GET['Sr'];
     $sql4 = "DELETE FROM about WHERE Sr=$Sr2" or die("Query failed");
     $res = mysqli_query($conn,$sql4);
?>

    <script>
          swal("", "Data deleted successfully", "success");
    </script>

<?php
// header("Location: http://localhost/khass-project/about-admin.php");
include 'about-admin.php';
        ?>
</body>
</html>
