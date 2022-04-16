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
    <link rel="icon" type="image/x-icon" href="../project/p_img/icon/logopng.png">
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
    <title>การสั่งจองสัตว์เลี้ยง</title>
</head>

<body>
<style>
.zoom {
  
}

.zoom:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>

<div class="zoom"></div>
<?php session_start();
include 'condb.php';
?>
<script type="text/javascript"> 
    $(function () {
      $('#datetimepicker1').datetimepicker({
			locale: 'th',
			format: 'L'
				});
	             });
                 
        </script>
        <?php include('navbar.php');?>
<FONT Face="Kanit">
<div class="container p-3 my-3 bg-success text-white">
  <h1>จำหน่ายสัตว์เลี้ยงในฟาร์ม</h1>
  <p>* มีข้อสงสัยหรือสอบถามได้ที่ 089-456-789 หรือ Email : Greenfarm@gmail.com</p>
</div>
    
<center><h3>สัตว์เลี้ยงภายในฟาร์ม</h3></center>
<div class="container">
                    <div class="row gy-3 my-3">
                    <div class="col-sm-6 col-md-4 col-lg-3" >
                        <div class="card">
                            <img src="all_img/t (8).jpg" class="zoom" alt="image" />
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3" >
                        <div class="card" ">
                            <img src="all_img/t (3).jpg" class="zoom" alt="Sunset Over the Sea" />
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3" >
                        <div class="card">
                            <img src="all_img/t (4).jpg" class="zoom" alt="Sunset Over the Sea" />
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3" >
                        <div class="card" >
                            <img src="all_img/t (15).jpg" class="zoom" alt="Sunset Over the Sea" />
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
<hr>
<form action="animal_farm_db.php" method="POST" enctype="multipart/form-data" >
<div class="container">
<div class="row"><br><br>
<h3>สั่งจอง/สั่งซื้อสัตว์เลี้ยงในฟาร์ม</h3> 
				<div class="col-sm-6"> 
				<label for="Username" class="form-label">ชื่อ - นามสกุล :</label>
				<input type="text" class="form-control" name ="s_name" placeholder="กรุณากรอกชื่อ - นามสกุล" required /value="<?php echo $_SESSION['fname'],' ',$_SESSION['lname'] ?>">
			</div>
			
			<div class="col-md-6">
				<label for="exampleInputEmail1" class="form-label"><i class="bi bi-envelope"></i> อีเมล์ :</label>
				<input type="email" class="form-control"  name="s_email" placeholder="กรุณากรอกอีเมล์" required /value="<?php echo $_SESSION['email'] ?>">
			</div>
			
			<div class="col-sm-6">
				<label for="exampleInputEmail1" class="form-label"><i class="bi bi-telephone-fill"></i> เบอร์โทรศัพท์มือถือ :</label>
				<input type="text" class="form-control"  name="s_phone" placeholder="กรุณากรอกเบอร์โทรติดต่อ"required /value="<?php echo $_SESSION['phone']?>">
				
			</div>
			<div class="col-md-6" id="datetimepicker1">
				<label for="exampleInputEmail1" class="form-label"><i class="bi bi-calendar"></i> วันที่ต้องการรับสัตว์เลี้ยง : <span style="color: red;">&nbsp;*</span></label>
				<input type="date" class="form-control"  name="s_pick_up_date" placeholder="กรุณากรอกเรื่องที่ติดต่อ" required>
			</div>
            <div class="col-md-6">
			<i class="bi bi-bank2"></i> เลือกประเภทสัตว์ : <span style="color: red;">&nbsp;*</span>
			<select class="form-control"  name="s_type" required>
			<option value="กรุณาเลือกสัตว์เลี้ยงที่ท่านต้องการ">--กรุณาเลือกสัตว์เลี้ยงที่ท่านต้องการ--
			<option value="วัว">วัว
			<option value="แม่ไก่">แม่ไก่
            <option value="หมู">หมู
            <option value="เป็ด">เป็ด
			</select>	
			</div>
			<div class="col-sm-6">
				<label for="exampleInputEmail1" class="form-label"><i class="bi bi-calendar-check-fill"></i> ช่วงอายุประมาณ : (ปี)<span style="color: red;">&nbsp;*</span></label>
				<input type="number" class="form-control"  name="s_year" placeholder="กรุณาเลือกช่วงอายุสัตว์ (ปี)"required min='0'>
				
			</div>
            <div class="col-sm-6">
				<label for="exampleInputEmail1" class="form-label"><i class="bi bi-calendar-check-fill"></i> ช่วงอายุประมาณ : (เดือน)<span style="color: red;">&nbsp;*</span></label>
				<input type="number" class="form-control"  name="s_mont" placeholder="กรุณาเลือกช่วงอายุสัตว์ (เดือน) "required  min='1'>
				
			</div>
            <div class="col-sm-6">
				<label for="exampleInputEmail1" class="form-label"><i class="bi bi-list-ol"></i> จำนวนสัตว์ที่ต้องการ :<span style="color: red;">&nbsp;*</span></label>
				<input type="number" class="form-control"  name="s_quantity" placeholder="กรุณาเลือกจำนวนสัตว์ที่ต้องการ "required  min='1'>
			</div>
            <div class="col-md-6">
				<div class="form-group">
                   <p class="p-area">รายละเอียดที่อยู่ ผู้สั่งจอง/ผู้ซื้อ<span style="color: red;">&nbsp;*</span></p>
                    
					<textarea name="s_address" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="กรุณาใส่รายละเอียดที่อยู่ให้ครบถ้วน" required> <?php echo $_SESSION['address'] ?> </textarea>
                </div>
                </div>
            
            <br><br><br><br><center><button type="submit" name="buy_animal" class="btn btn-outline-success"><i class="bi bi-cart-check-fill"></i> สั่งจอง/สั่งซื้อ</button><br><br></center>
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
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</FONT>
</body>
</html>