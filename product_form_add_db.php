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
font-family: Prompt;
</style>
</head>

<body>

</body>

</html>
<meta charset="UTF-8">
<?php
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
date_default_timezone_set('Asia/Bangkok');
	//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
	$date = date("Ymd");
	//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
	$numrand = (mt_rand());
	//รับค่าไฟล์จากฟอร์ม
$p_name = $_POST['p_name'];
$p_price = $_POST['p_price'];
$type_id = $_POST['type_id'];
$p_qty = $_POST['p_qty'];
$p_detail = $_POST['p_detail'];
$p_img =(isset($_POST['p_img']) ? $_POST['p_img'] :'');
//img
	$upload=$_FILES['p_img'];
	if($upload <> '') {

	//โฟลเดอร์ที่เก็บไฟล์
	$path="file_product/";
	//ตัวขื่อกับนามสกุลภาพออกจากกัน
	$type = strrchr($_FILES['p_img']['name'],".");
	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
	$newname ='p_img'.$numrand.$date.$type;
	$path_copy=$path.$newname;
	$path_link="file_product/".$newname;
	//คัดลอกไฟล์ไปยังโฟลเดอร์
	move_uploaded_file($_FILES['p_img']['tmp_name'],$path_copy);
	}
	// เพิ่มไฟล์เข้าไปในตาราง uploadfile
	
		$sql = "INSERT INTO tbl_product
		(
		p_name,
		p_price,
		p_qty,
		type_id,
		p_detail,
		p_img
		)
		VALUES
		(
		'$p_name',
		'$p_price',
		'$p_qty',
		'$type_id',
		'$p_detail',
		'$newname')";
		
		$result = mysqli_query($con, $sql);// or die ("Error in query: $sql " . mysqli_error());
	
	mysqli_close($con);
	// javascript แสดงการ upload file
	
	
	if($result){
		echo "<script>
		Swal.fire(
		  'เพิ่มสินค้าสำเร็จ!',
		  'You clicked the button!',
		  'success')
		  </script>";
		header('Refresh:2; url=product.php');
	}
	else{
		echo "<script>
		Swal.fire({
		  position: 'top',
		  icon: 'error',
		  title: 'เพิ่มสินค้าไม่สำเร็จ',
		  showConfirmButton: false,
		  timer: 1000
		})
		
		</script>";
	
	}
	?>