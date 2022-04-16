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
//1. เชื่อมต่อ database: 
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
  //Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
    date_default_timezone_set('Asia/Bangkok');
	//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
	$date1 = date("Ymd_His");
	//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
	$numrand = (mt_rand());
	
//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
	$p_id = $_POST["p_id"];
	$p_name = $_POST["p_name"];
	$p_price = $_POST['p_price'];
	$type_id = $_POST["type_id"];
	$p_qty = $_POST['p_qty'];
	$p_detail = $_POST["p_detail"];
	$p_img = (isset($_POST['p_img']) ? $_POST['p_img'] : '');
	$img2 = $_POST['img2'];
	$upload=$_FILES['p_img']['name'];
	if($upload !='') { 
 
	//โฟลเดอร์ที่เก็บไฟล์
	$path="p_img/";
	//ตัวขื่อกับนามสกุลภาพออกจากกัน
	$type = strrchr($_FILES['p_img']['name'],".");
	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
	$newname =$numrand.$date1.$type;
 
	$path_copy=$path.$newname;
	$path_link="p_img/".$newname;
	//คัดลอกไฟล์ไปยังโฟลเดอร์
	move_uploaded_file($_FILES['p_img']['tmp_name'],$path_copy);  
		
	}else {
		$newname = $img2;
	
	}

//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
	
	$sql = "UPDATE tbl_product SET  
			p_name='$p_name',
			p_price='$p_price',
			p_qty='$p_qty',
			type_id='$type_id', 
			p_detail='$p_detail',
			p_img='$newname'
			WHERE p_id='$p_id' ";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
if($result){
	echo "<script>
	Swal.fire(
	  'อัพเดตสินค้าสำเร็จ!',
	  'You clicked the button!',
	  'success')
	  </script>";
	header('Refresh:3; url=product.php');
}
else{
	echo "<script>
	Swal.fire({
	  position: 'top',
	  icon: 'error',
	  title: 'อัพเดตสินค้าไม่สำเร็จ',
	  showConfirmButton: false,
	  timer: 1000
	})
	
	</script>";

}
?>