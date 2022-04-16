<?php 
session_start();
include 'condb.php';
if(!$_SESSION['user_id']==true){
header('Refresh:0; url=login.php');	
 exit;
}
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
// print_r($_POST);

$s_name = $_POST['s_name'];
$s_email = $_POST['s_email'];
$s_phone = $_POST['s_phone'];
$s_pick_up_date = $_POST['s_pick_up_date'];
$s_type = $_POST['s_type'];
$s_year = $_POST['s_year'];
$s_mont = $_POST['s_mont'];
$s_quantity = $_POST['s_quantity'];
$s_address = $_POST['s_address'];
?>
<?php

			$serverName = "localhost";
			$userName = "root";
			$userPassword ="12345678";
			$dbName ="pro";
			$connect_db =mysqli_connect($serverName,$userName,$userPassword,$dbName,);
			date_default_timezone_set("Asia/Bangkok");
			$apply_date =date("F j, Y, g:i a");

		$sql_command="INSERT INTO buy_animal
        (s_name,s_email,s_phone,s_pick_up_date,s_type,s_year,s_mont,s_quantity,s_address)VALUES(
        '$s_name','$s_email','$s_phone','$s_pick_up_date','$s_type','$s_year','$s_mont','$s_quantity','$s_address')";
        
		
		$run_queary = mysqli_query($connect_db,$sql_command);
		// echo $sql_command;
        if($run_queary){
            echo "<script>
            Swal.fire(
              'การสั่งซื้อสัตว์สำเร็จ!',
              'You clicked the button!',
              'success')
              </script>";
            header('Refresh:2; url=pay.php');
        }
        else{
            echo "<script>
            Swal.fire({
              position: 'top',
              icon: 'error',
              title: 'การสั่งซื้อสัตว์ไม่สำเร็จ',
              showConfirmButton: false,
              timer: 1000
            })
            
            </script>";
        
        }
        mysqli_close($con);
        ?>