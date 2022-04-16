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
    <link rel="icon" type="image/x-icon" href="../project/p_img/icon/logopng.png">
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>แก้ไขข้อมูลการสั่งจอง/สั่งซื้อ</title>
  </head>
  <center>
  <style>
    
body{
font-family: kanit;
background-color:#F0FFF0;
</style>


<?php
    if(isset($_GET['id'])){
      require_once 'user_connect.php';
      $stmt = $conn->prepare("SELECT* FROM buy_animal WHERE id=?");
      $stmt->execute([$_GET['id']]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      //ถ้าคิวรี่ผิดพลาดให้กลับไปหน้า index
      if($stmt->rowCount() < 1){
          header('Location: index.php');
          exit();
      }
    }//isset
    ?>
  </center>     
      <center><img src="p_img/photo_all/ani.png" width="30%" align='center'></center>
    <form action="animal_farm_edit_db.php" method="POST" enctype="multipart/form-data" >
<div class="container">
<div align="center">
<div class="row">
<h3></h3>
</div>
  
<div class="container">
<div class="row"><br><br>
<h3>แก้ไขข้อมูลการสั่งจอง/สั่งซื้อสัตว์เลี้ยง</h3>  
				<div class="col-sm-6"> 
				<label for="Username" class="form-label">ชื่อ - นามสกุล :</label>
				<input type="text" class="form-control" name ="s_name" placeholder="กรุณากรอกชื่อ - นามสกุล" required /value="<?= $row['s_name'];?>">
			</div>
			
			<div class="col-md-6">
				<label for="exampleInputEmail1" class="form-label"><i class="bi bi-envelope"></i> อีเมล์ :</label>
				<input type="email" class="form-control"  name="s_email" placeholder="กรุณากรอกอีเมล์" required /value="<?= $row['s_email'];?>">
			</div>
			
			<div class="col-sm-6">
				<label for="exampleInputEmail1" class="form-label"><i class="bi bi-telephone-fill"></i> เบอร์โทรศัพท์มือถือ :</label>
				<input type="text" class="form-control"  name="s_phone" placeholder="กรุณากรอกเบอร์โทรติดต่อ"required /value="<?= $row['s_phone'];?>">
				
			</div>
			<div class="col-md-6" id="datetimepicker1">
				<label for="exampleInputEmail1" class="form-label"><i class="bi bi-calendar"></i> วันที่ต้องการรับสัตว์เลี้ยง : <span style="color: red;">&nbsp;*</span></label>
				<input type="text" class="form-control"  name="s_pick_up_date" placeholder="กรุณากรอกเรื่องที่ติดต่อ" required /value="<?= $row['s_pick_up_date'];?>">
			</div>
			<div class="col-md-6" id="datetimepicker1">
				<label for="exampleInputEmail1" class="form-label"><i class="bi bi-calendar"></i> เลือกประเภทสัตว์ : <span style="color: red;">&nbsp;*</span></label>
				<input type="text" class="form-control"  name="s_type" placeholder="กรุณากรอกเรื่องที่ติดต่อ" required /value="<?= $row['s_type'];?>">
			</div>
			<div class="col-sm-6">
				<label for="exampleInputEmail1" class="form-label"><i class="bi bi-calendar-check-fill"></i> ช่วงอายุประมาณ : (ปี)<span style="color: red;">&nbsp;*</span></label>
				<input type="number" class="form-control"  name="s_year" placeholder="กรุณาเลือกช่วงอายุสัตว์ (ปี)"required min='0'/value="<?= $row['s_year'];?>">
				
			</div>
            <div class="col-sm-6">
				<label for="exampleInputEmail1" class="form-label"><i class="bi bi-calendar-check-fill"></i> ช่วงอายุประมาณ : (เดือน)<span style="color: red;">&nbsp;*</span></label>
				<input type="number" class="form-control"  name="s_mont" placeholder="กรุณาเลือกช่วงอายุสัตว์ (เดือน) "required  min='1'/value="<?= $row['s_mont'];?>">
				
			</div>
            <div class="col-sm-6">
				<label for="exampleInputEmail1" class="form-label"><i class="bi bi-list-ol"></i> จำนวนสัตว์ที่ต้องการ :<span style="color: red;">&nbsp;*</span></label>
				<input type="number" class="form-control"  name="s_quantity" placeholder="กรุณาเลือกจำนวนสัตว์ที่ต้องการ "required  min='1'/value="<?= $row['s_quantity'];?>">
			</div>
            <div class="col-sm-6">
				<label for="exampleInputEmail1" class="form-label"><i class="bi bi-telephone-fill"></i> ที่อยู่ผู้ซื้อ :<span style="color: red;">&nbsp;*</span></label>
				<input type="text" class="form-control"  name="s_address" placeholder="กรุณาเลือกจำนวนสัตว์ที่ต้องการ "required  min='1'/value="<?= $row['s_address'];?>">
			</div>
            <input type="hidden" name="id" value="<?= $row['id'];?>">
            <center><br><button type="submit" name="buy_animals" class="btn btn-outline-success"><i class="bi bi-bag-plus"></i> บันทึกข้อมูล</button><br><br></center>
</div>
</form>
<br>
<table border="0" <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        
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
</div>
  </body>
</html>