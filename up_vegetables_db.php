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
	$date = date('Y-m-j');
	//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
	$numrand = (mt_rand());
	//รับค่าไฟล์จากฟอร์ม
  $name_vegetable = $_POST['name_vegetable'];
  $plan_date = $_POST['plan_date'];
  $harvest_age = $_POST['harvest_age'];
  $how_day = $_POST['how_day'];
  $harvest_date = $_POST['harvest_date'];
  $status = $_POST['status'];
$img =(isset($_POST['img']) ? $_POST['img'] :'');
//img
	$upload=$_FILES['img'];
	if($upload <> '') {

	//โฟลเดอร์ที่เก็บไฟล์
	$path="img_vegetable/";
	//ตัวขื่อกับนามสกุลภาพออกจากกัน
	$type = strrchr($_FILES['img']['name'],".");
	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
	$newname ='v'.$numrand.$date.$type;
	$path_copy=$path.$newname;
	$path_link="img_vegetable/".$newname;
	//คัดลอกไฟล์ไปยังโฟลเดอร์
	move_uploaded_file($_FILES['img']['tmp_name'],$path_copy);
	}
	// เพิ่มไฟล์เข้าไปในตาราง uploadfile
	
		$sql = "INSERT INTO vegetable
		(
        name_vegetable,
		plan_date,
		harvest_age,
        how_day,
		harvest_date,
		status,
        img
		)
		VALUES
		(
		'$name_vegetable',
		'$plan_date',
		'$harvest_age',
        '$how_day',
		'$harvest_date',
        '$status',
		'$newname')";
		
		$result = mysqli_query($con, $sql);// or die ("Error in query: $sql " . mysqli_error());
	
	mysqli_close($con);
	// javascript แสดงการ upload file
	
	
	if($result){
		echo "<script>
		Swal.fire(
		  'บันทึกข้อมูลผักสำเร็จ!',
		  'You clicked the button!',
		  'success')
		  </script>";
		header('Refresh:2; url=up_vegetables.php');
	}
	else{
		echo "<script>
		Swal.fire({
		  position: 'top',
		  icon: 'error',
		  title: 'บันทึกข้อมูลผักไม่สำเร็จ',
		  showConfirmButton: false,
		  timer: 1000
		})
		
		</script>";
	
	}
	?>