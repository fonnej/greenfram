<?php
session_start();
include 'condb.php';
if (!$_SESSION['id_admin'] == true) {
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
if(isset($_POST['m_name']) && isset($_POST['m_type']) && isset($_POST['m_email']) && isset($_POST['m_phone']) && isset($_POST['m_date']) && isset($_POST['m_bank'])&& isset($_POST['m_status']) && isset($_POST['m_tatal']) && isset($_POST['m_statement']) && isset($_POST['id'])) {
    //ไฟล์เชื่อมต่อฐานข้อมูล
     require_once 'user_condb.php';
//ประกาศตัวแปรรับค่าจากฟอร์ม
$id = $_POST['id'];
$m_name = $_POST['m_name'];
$m_email =  $_POST['m_email'];
$m_phone = $_POST['m_phone'];
$m_date = $_POST['m_date'];
$m_bank = $_POST['m_bank'];
$m_status = $_POST['m_status'];
$m_type = $_POST['m_type'];
$m_tatal = $_POST['m_tatal'];
$m_statement = $_POST['m_statement'];


//sql update
// $stmt = $conn->prepare("UPDATE user_member SET user=:user, pass=:pass title=:title fname=:fname lname=:lname gender=:gender email=:email social_account=:social_account phone=:phone address=:address WHERE id=:id");


$sql = "UPDATE pay SET  
			id='$id',
			m_name='$m_name',
			m_email='$m_email',
			m_phone='$m_phone', 
			m_date='$m_date',
			m_type='$m_type',
			m_bank='$m_bank',
            m_status='$m_status',
            m_tatal='$m_tatal',
            m_statement='$m_statement'
			WHERE id='$id'";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
mysqli_close($con); //ปิดการเชื่อมต่อ database 

if($result){
	echo "<script>
	Swal.fire(
	  'อัพเดตข้อมูลการชำระเงินสำเร็จ!',
	  'You clicked the button!',
	  'success')
	  </script>";
	header('Refresh:2; url=pay_list.php');
}
else{
	echo "<script>
	Swal.fire({
	  position: 'top',
	  icon: 'error',
	  title: 'อัพเดตข้อมูลการชำระเงินไม่สำเร็จ',
	  showConfirmButton: false,
	  timer: 1000
	})
	
	</script>";
}}
?>