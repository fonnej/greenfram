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
    $m_name = $_POST['m_name']; 
    $m_email = $_POST['m_email'];
    $m_phone = $_POST['m_phone'];
    $m_date = $_POST['m_date'];
    $m_bank = $_POST['m_bank'];
    $m_status = $_POST['m_status'];
    $m_tatal = $_POST['m_tatal'];
	$m_type = $_POST['m_type'];
$m_statement =(isset($_POST['m_statement']) ? $_POST['m_statement'] :'');
//img
	$upload=$_FILES['m_statement'];
	if($upload <> '') {

	//โฟลเดอร์ที่เก็บไฟล์
	$path="file_statement/";
	//ตัวขื่อกับนามสกุลภาพออกจากกัน
	$type = strrchr($_FILES['m_statement']['name'],".");
	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
	$newname ='statement'.$numrand.$date.$type;
	$path_copy=$path.$newname;
	$path_link="file_statement/".$newname;
	//คัดลอกไฟล์ไปยังโฟลเดอร์
	move_uploaded_file($_FILES['m_statement']['tmp_name'],$path_copy);
	}
	// เพิ่มไฟล์เข้าไปในตาราง uploadfile
	
		$sql = "INSERT INTO pay
		(
        m_name,
		m_email,
		m_phone,
        m_date,
		m_bank,
		m_status,
        m_tatal,
		m_type,
        m_statement
		)
		VALUES
		(
		'$m_name',
		'$m_email',
		'$m_phone',
        '$m_date',
		'$m_bank',
		'$m_status',
        '$m_tatal',
		'$m_type',
		'$newname')";
		
		$result = mysqli_query($con, $sql);// or die ("Error in query: $sql " . mysqli_error());
	
	mysqli_close($con);
	// javascript แสดงการ upload file
	
	
	if($result){
		echo "<script>
		Swal.fire(
		  'ยืนยันการชำระเงินสำเร็จ!',
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
		  title: 'การชำระเงินไม่สำเร็จ',
		  showConfirmButton: false,
		  timer: 1000
		})
		
		</script>";
	
	}
	?>