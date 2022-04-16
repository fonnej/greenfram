<?php 
session_start();
include 'condb.php';
if(!$_SESSION['id_admin']==true){
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
font-family: kanit;
</style>
</head>


</body>

</html><?php

 //ถ้ามีค่าส่งมาจากฟอร์ม
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['detail']) && isset($_POST['details']) && isset($_POST['status']) && isset($_POST['id'])) {
    //ไฟล์เชื่อมต่อฐานข้อมูล
     require_once 'user_condb.php';
//ประกาศตัวแปรรับค่าจากฟอร์ม
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone =  $_POST['phone'];
$detail = $_POST['detail'];
$details = $_POST['details'];
$status = $_POST['status'];

//sql update
// $stmt = $conn->prepare("UPDATE user_member SET user=:user, pass=:pass title=:title fname=:fname lname=:lname gender=:gender email=:email social_account=:social_account phone=:phone address=:address WHERE id=:id");


$sql = "UPDATE contact SET  
			id='$id',
			name ='$name',
			email='$email',
			phone='$phone', 
			detail='$detail',
			details='$details',
            status='$status'
			WHERE id='$id' ";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
mysqli_close($con); //ปิดการเชื่อมต่อ database 

if($result){
	echo "<script>
	Swal.fire(
	  'อัพเดตข้อมูลติดต่อสอบถามสำเร็จ!',
	  'You clicked the button!',
	  'success')
	  </script>";
	header('Refresh:2; url=contact_list.php');
}
else{
	echo "<script>
	Swal.fire({
	  position: 'top',
	  icon: 'error',
	  title: 'อัพเดตข้อมูลติดต่อสอบถามไม่สำเร็จ',
	  showConfirmButton: false,
	  timer: 1000
	})
	
	</script>";
}}
?>