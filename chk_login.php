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

?>
<FONT Face="Mitr">
    <?php  
session_start();
  $serverName = "localhost";
  $userName = "root";
  $userPassword ="12345678";
  $dbName ="pro";

  $connect_db =mysqli_connect($serverName,$userName,$userPassword,$dbName,);
  date_default_timezone_set("Asia/Bangkok");

$chk_userid="select * from user_member where user_id ='".$_POST["user"]."' ";
$run_chk_userid = mysqli_query($connect_db,$chk_userid);

 $row_data = mysqli_fetch_array($run_chk_userid,MYSQLI_ASSOC);
if($row_data["pass"]==$_POST["pass"]) {
  $_SESSION["user_id"]=$_POST["user"];
  $_SESSION["pass"]=$_POST["pass"];
  $_SESSION["fname"]=$row_data["fname"];
  $_SESSION["lname"]=$row_data["lname"];
  $_SESSION["gender"]=$row_data["gender"];
  $_SESSION["email"]=$row_data["email"];
  $_SESSION["address"]=$row_data["address"];
  $_SESSION["phone"]=$row_data["phone"];
  $_SESSION["title"]=$_POST["title"];



  
  echo "<script>
  Swal.fire(
    'เข้าสู่ระบบสำเร็จ!',
    'You clicked the button!',
    'success')
    timer: 3000
    </script>";
  header('Refresh:2; url=show_index.php');
  

}else{
  echo "<script>
  Swal.fire({
    position: 'top',
    icon: 'error',
    title: 'Username หรือ PassWord ผิด',
    showConfirmButton: false,
    timer: 1000
  })
  </script>";
  header('Refresh:2; url=login.php');
}




mysqli_close($connect_db);
 ?>

</FONT>