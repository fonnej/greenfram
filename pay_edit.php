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
    <title>อัพเดตการชำระเงิน</title>
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
      $stmt = $conn->prepare("SELECT* FROM pay WHERE id=?");
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
      <center><img src="p_img/photo_all/pay1.png" width="20%" align='center'></center>
    <center> <h4>อัพเดตข้อมูลการชำระเงิน</h4></center>
    <form action="pay_edit_db.php" method="post" enctype="multipart/form-data" >
<div class="container">
<div align="center">
<div class="row">
<h3></h3>
</div>
  
				<div class="col-sm-6"> 
				<label for="Username" class="form-label">ชื่อ - นามสกุล :</label>
				<input type="text" class="form-control" name ="m_name" placeholder="กรุณากรอกชื่อ - นามสกุล" required /value="<?= $row['m_name'];?>">
			</div>
			
			<div class="col-md-6">
				<label for="exampleInputEmail1" class="form-label"><i class="bi bi-envelope"></i> อีเมล์ :</label>
				<input type="email" class="form-control"  name="m_email" placeholder="กรุณากรอกอีเมล์" required /value="<?= $row['m_email'];?>">
			</div>
			
			<div class="col-sm-6"> 
				<label for="exampleInputEmail1" class="form-label"><i class="bi bi-telephone-fill"></i> เบอร์โทรศัพท์มือถือ :</label>
				<input type="text" class="form-control"  name="m_phone" placeholder="กรุณากรอกเบอร์โทรติดต่อ"required value="<?= $row['m_phone'];?>">
			</div>
			<div class="col-md-6" id="datetimepicker1">
				<label for="exampleInputEmail1" class="form-label"><i class="bi bi-calendar"></i> วันที่ชำระเงิน :</label>
				<input type="date" class="form-control"  name="m_date" placeholder="กรุณากรอกเรื่องที่ติดต่อ" required value="<?= $row['m_date'];?>">
			</div>
        <div class="col-md-6">
				<label for="exampleInputEmail1" class="form-label">ธนาคารของท่านที่ต้องการชำระ :</label> 
				<input type="text" class="form-control"  name="m_bank" required value="<?= $row['m_bank'];?>">
        </div>
        <div class="col-md-6">
				<label for="exampleInputEmail1" class="form-label"><i class="bi bi-currency-bitcoin"></i> จำนวนที่ชำระ :</label> 
				<input type="number" class="form-control"  name="m_tatal" required placeholder="กรอกจำนวนเงินที่ท่านชำระ" value="<?= $row['m_tatal'];?>">
			</div>
      <div class="col-md-6">
				<label for="exampleInputEmail1" class="form-label">ประเภทการชำระเงิน :</label> 
				<input type="text" class="form-control"  name="m_type" required value="<?= $row['m_type'];?>">
        </div>
      <br>
      <div class="col-md-6">
            <img src="file_statement/<?php echo $row['m_statement'];?>" width="50%">
				<label for="exampleInputEmail1" class="form-label">หลักฐานการชำระเงิน :</label> 
       <h6> หลักฐานการชำระเงิน : </h6>
				<input type="text" class="form-control"  name="m_statement" required value="<?= $row['m_statement'];?>">
			</div>
      <div class="col-md-6">
			<i class="bi bi-cash-coin"></i> สถานะการชำระเงิน :
			<select class="form-control"  name="m_status" required >
			<option value="กำลังดำเนินการ">กำลังดำเนินการ
            <option value="ค้างชำระ">ค้างชำระ
            <option value="ชำระแล้ว">ชำระแล้ว
			</select>	
			</div>
            <input type="hidden" name="id" value="<?= $row['id'];?>">
            <br><br><br><center><button type="submit" name="btn_pay" class="btn btn-outline-success"><i class="bi bi-cart-check"></i> อัพเดตการชำระเงิน</button><br><br></center>
</div>
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
  </body>
</html>