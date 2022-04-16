<?php 
session_start();
include 'condb.php';
if(!$_SESSION['user_id']==true){
header('Refresh:0; url=login.php');	
 exit;
}
  ?>
<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$detail = $_POST['detail'];
$details = $_POST['details'];

?>
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
			$serverName = "localhost";
			$userName = "root";
			$userPassword ="12345678";
			$dbName ="pro";
			$connect_db =mysqli_connect($serverName,$userName,$userPassword,$dbName,);
			date_default_timezone_set("Asia/Bangkok");
			$apply_date =date("F j, Y, g:i a");
			
		$sql_command= "insert into contact (name,email,phone,detail,details) values ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["phone"]."','".$_POST["detail"]."','".$_POST["details"]."')";
        
		
		$run_queary = mysqli_query($connect_db,$sql_command);
		
		 echo "<script>
    Swal.fire(
        'ส่งแบบสอบถามสำเร็จ!',
        'You clicked the button!',
        'success')
        </script>";
      header('Refresh:3; url=contact_.php');

        
            mysqli_close($connect_db);

        ?>