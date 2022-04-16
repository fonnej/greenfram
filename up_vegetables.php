<?php 
session_start();
include 'condb.php';
if(!$_SESSION['id_admin']==true){
header('Refresh:0; url=login.php');	
 exit;
}
  ?>
<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="../project/p_img/icon/logopng.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
    <title>ติดตามการปลูกผักภายในฟาร์ม</title>
    <style>
body{
font-family: kanit;
background-color:#F0FFF0;
</style>



<?php session_start();
include 'condb.php';
?><div class="container"><br>
<a href="../project/animals/management.php" class="btn btn-outline-success"><i class="bi bi-box-arrow-left"></i> ย้อนกลับ</a> </center><br></div>
<FONT Face="Kanit">
<center><img src="p_img/photo_all/mg.png" width="20%" align='center'></center>
    
<form action="up_vegetables_db.php" method="POST" enctype="multipart/form-data" >
<div class="container">
<div class="row"><br><br>
<center><h3>ติดตามการปลูกผักภายในฟาร์ม</h3> </center>
<h4>กรอกข้อมูลการติดตามผัก</h4>
				<div class="col-sm-6"> 
				<label for="Username" class="form-label">ชื่อผัก :<span style="color: red;">&nbsp;*</span></label>
				<input type="text" class="form-control" name ="name_vegetable" placeholder="ชื่อผัก" required >
			</div>
			<div class="col-md-6" id="datetimepicker1">
				<label for="exampleInputEmail1" class="form-label"><i class="bi bi-calendar"></i> วันที่ปลูก : <span style="color: red;">&nbsp;*</span></label>
				<input type="date" class="form-control"  name="plan_date" placeholder="กรอกจำนวนวันที่ปลูก" required>
			</div>
			<div class="col-md-6">
				<label for="form-label" class="form-label"><i class="bi bi-app-indicator"></i> อายุการปลูกผัก :<span style="color: red;">&nbsp;*</span></label>
				<input type="number" class="form-control"  name="harvest_age" placeholder="กรอกอายุการปลูก" required >
			</div>
            <div class="col-md-6">
				<label for="form-label" class="form-label"><i class="bi bi-alarm"></i> เหลือจำนวนวัน :<span style="color: red;">&nbsp;*</span></label>
				<input type="number" class="form-control"  name="how_day" placeholder="จำนวนวันที่ใกล้จะเก็บ" required >
			</div>
			<div class="col-md-6" id="datetimepicker1">
				<label for="exampleInputEmail1" class="form-label"><i class="bi bi-calendar"></i> วันที่เก็บเกี่ยว : <span style="color: red;">&nbsp;*</span></label>
				<input type="date" class="form-control"  name="harvest_date" placeholder="กรอกจำนวนวันที่ปลูก" required>
			</div>
            <div class="col-md-6">
			<i class="bi bi-bank2"></i> สถานะการปลูกผัก : <span style="color: red;">&nbsp;*</span>
			<select class="form-control"  name="status" required>
			<option value="กรุณาเลือกสถานะการปลูกผัก">--กรุณาเลือกสถานะการปลูกผัก--
			<option value="กำลังปลูก">กำลังปลูก
			<option value="อยู่ในช่วงการปลูก">อยู่ในช่วงการปลูก
            <option value="กำลังเก็บเกี่ยว">กำลังเก็บเกี่ยว
			</select>	
			</div>
            <div class="col-md-6">
				<label for="exampleInputEmail1" class="form-label">รูปผัก :<span style="color: red;">&nbsp;*</label> 
				<input type="file" class="form-control"  name="img" required>
			</div>
            
            <center><br><button type="submit" name="buy_animal" class="btn btn-outline-success"><i class="bi bi-check-circle"></i> บันทึก</button><br><br></center>
</div>
</form>
<br>
<table border="0" <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="p_img/photo_all/footer2.png" alt="First slide">
                        </div>
                        
                    
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous"></script>
</font>
</body>

</html>