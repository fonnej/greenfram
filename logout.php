<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
body{
font-family: Prompt;
</style>
</head>

<body>

</body>

</html>
<?php
session_start();
session_destroy();
$_SESSION[''];

echo "<script>
  Swal.fire(
    'ออกจากระบบสำเร็จ!',
    'You clicked the button!',
    'success')
    </script>";
header('Refresh:2; url=login.php');	
?>