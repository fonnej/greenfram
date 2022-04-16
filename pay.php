<?php
session_start();
include 'condb.php';
if (!$_SESSION['user_id'] == true) {
    header('Refresh:0; url=login.php');
    exit;
}
?>
<?php session_start();
include 'condb.php';
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
    <title>การชำระเงิน</title>
</head>

<body>

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
  <h1>ยืนยันการชำระเงิน</h1>
  <p>* มีข้อสงสัยหรือสอบถามได้ที่ 089-456-789 หรือ Email : Greenfarm@gmail.com</p>
</div>
    
<center><h3>ช่องทางการชำระเงิน</h3></center>
    
<center><img src="p_img/photo_all/bank.png" width="30%" alt="..."></center><br><br>

<form action="pay_db.php" method="post" enctype="multipart/form-data" >
<div class="container">
<div class="row "><br><br>
<h3>กรุณากรอกข้อมูลในการชำระเงิน</h3> 
				<div class="col-sm-6"> 
				<label for="Username" class="form-label">ชื่อ - นามสกุล :<span style="color: red;">&nbsp;*</label>
				<input type="text" class="form-control" name ="m_name" placeholder="กรุณากรอกชื่อ - นามสกุล" required /value="<?php echo $_SESSION['fname'],' ',$_SESSION['lname'] ?>">
			</div>
			
			<div class="col-md-6">
				<label for="exampleInputEmail1" class="form-label"><i class="bi bi-envelope"></i> อีเมล์ :<span style="color: red;">&nbsp;*</label>
				<input type="email" class="form-control"  name="m_email" placeholder="กรุณากรอกอีเมล์" required /value="<?php echo $_SESSION['email'] ?>">
			</div>
			
			<div class="col-sm-6">
				<label for="exampleInputEmail1" class="form-label"><i class="bi bi-telephone-fill"></i> เบอร์โทรศัพท์มือถือ :<span style="color: red;">&nbsp;*</label>
				<input type="text" class="form-control"  name="m_phone" placeholder="กรุณากรอกเบอร์โทรติดต่อ"required /value="<?php echo $_SESSION['phone']?>">
				
			</div>
			<div class="col-md-6" id="datetimepicker1">
				<label for="exampleInputEmail1" class="form-label"><i class="bi bi-calendar"></i> วันที่ชำระเงิน :<span style="color: red;">&nbsp;*</label>
				<input type="date" class="form-control"  name="m_date" placeholder="กรุณากรอกเรื่องที่ติดต่อ" required>
			</div>
            <div class="col-md-6">
			<i class="bi bi-bank2"></i> ธนาคารของท่านที่ต้องการชำระ : <span style="color: red;">&nbsp;*
			<select class="form-control"  name="m_bank" required>
			<option value="กรุณาเลือกธนาคาร">--กรุณาเลือกธนาคาร--
			<option value="ธนาคารกรุงเทพ">ธนาคารกรุงเทพ
			<option value="ธนาคารกสิกรไทย">ธนาคารกสิกรไทย
            <option value="ธนาคารกรุงไทย">ธนาคารกรุงไทย
            <option value="ธนาคารไทยพาณิชย์">ธนาคารไทยพาณิชย์
            <option value="ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร">ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร
            <option value="ธนาคารออมสิน">ธนาคารออมสิน
			</select>	
			</div>
            <div class="col-md-6">
				<label for="exampleInputEmail1" class="form-label">หลักฐานการชำระเงิน :<span style="color: red;">&nbsp;*</label> 
				<input type="file" class="form-control"  name="m_statement" required>
			</div>
            <div class="col-md-6">
				<label for="exampleInputEmail1" class="form-label"><i class="bi bi-currency-bitcoin"></i> จำนวนที่ชำระ :<span style="color: red;">&nbsp;*</label> 
				<input type="number" class="form-control"  name="m_tatal" required placeholder="กรอกจำนวนเงินที่ท่านชำระ">
			</div>
            <div class="col-md-6">
			<i class="bi bi-bookmark-star-fill"></i> ประเภทการชำระเงิน : <span style="color: red;">&nbsp;*
			<select class="form-control"  name="m_type" required>
			<option value="กรุณาเลือกประเภทการชำระเงิน">--กรุณาเลือกประเภทการชำระเงิน--
			<option value="ชำระเงินสินค้า">ชำระเงินสินค้า
			<option value="ชำระเงินซื้อสัตว์เลี้ยง">ชำระเงินสัตว์เลี้ยง
			</select>	
			</div>
            <div class="col-md-6">
			<i class="bi bi-cash-coin"></i> สถานะการชำระเงิน :
			<select class="form-control"  name="m_status" required readonly>
			<option value="กำลังดำเนินการ">กำลังดำเนินการ
			</select>	
			</div>
            
            <br><br><br><br><center><button type="submit" name="btn_contact" class="btn btn-outline-success"><i class="bi bi-cart-check"></i> ยืนยันการชำระเงิน</button><br><br></center>
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