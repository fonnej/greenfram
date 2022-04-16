
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
	
</body>
</html><meta charset="UTF-8">
<?php
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
date_default_timezone_set('Asia/Bangkok');
	//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
	$date1 = date("Ymd_His");
	//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
	$numrand = (mt_rand());
	//รับค่าไฟล์จากฟอร์ม
    if(isset($_POST['submit'])){
$type_animals = $_POST['type_animals'];
$animals_id = $_POST['animals_id'];
$animals_date = $_POST['animals_date'];
$animals_sex = $_POST['animals_sex'];
$animals_age_y = $_POST['animals_age_y'];
$animals_age_m = $_POST['animals_age_m'];
$p_img =(isset($_POST['animals_pig']) ? $_POST['animals_pig'] :'');
//img
	$upload=$_FILES['animals_pig'];
	if($upload <> '') {

	//โฟลเดอร์ที่เก็บไฟล์
	$path="animals_pig/";
	//ตัวขื่อกับนามสกุลภาพออกจากกัน
	$type = strrchr($_FILES['animals_pig']['name'],".");
	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
	$newname ='animals_pig'.$numrand.$date1.$type;
	$path_copy=$path.$newname;
	$path_link="animals_pig/".$newname;
	//คัดลอกไฟล์ไปยังโฟลเดอร์
	move_uploaded_file($_FILES['animals_pig']['tmp_name'],$path_copy);
	}}
	// เพิ่มไฟล์เข้าไปในตาราง uploadfile
	
		$sql = "INSERT INTO tbl_animals
		(
        type_animals,
		animals_id,
		animals_date,
		animals_sex,
		animals_age_y,
        animals_age_m,
		animals_pig
		)
		VALUES
		(
		'$type_animals',
		'$animals_id',
		'$animals_date',
		'$animals_sex',
		'$animals_age_y',
        '$animals_age_m',
		'$newname')";
		
		$result = mysqli_query($con, $sql);// or die ("Error in query: $sql " . mysqli_error());
	
	mysqli_close($con);
	// javascript แสดงการ upload file
	
	
	if($result){
		echo "<script>
		Swal.fire(
		  'เพิ่มสำเร็จ!',
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
		  title: 'เพิ่มไม่สำเร็จ',
		  showConfirmButton: false,
		  timer: 1000
		})
		
		</script>";
	
	}
	?>