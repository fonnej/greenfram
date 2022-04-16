<?php 
session_start();
include 'condb.php';
if(!$_SESSION['user_id']==true){
header('Refresh:0; url=login.php');	
 exit;
}
  ?>
<!doctype html>
<html >
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- Favicon-->
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
		<!-- Bootstrap CSS -->
		<link rel="icon" type="image/x-icon" href="../project/p_img/icon/logopng.png">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<title>ติดต่อเรา</title>
		<link rel="stylesheet"
			href="https://fonts.googleapis.com/css?family=Mitr">
			<style>
				body{
					font-family: Prompt;
				}
			</style>
			<style>
				html, body {
					height: 100%; margin: 0;
					background-color:#ffffff;
					background-repeat: no-repeat;
					background-position: center center;
					background-attachment: fixed;
					background-size: cover;
				}
			#header{background-color: #ffffff; min-height:25%; /*margin-top: 0px;*/}
			#content{background-color: #ffffff; min-height:65%;}
			#footer{background-color: #cfcf70; min-height:10%;}
			#page{width: 80%; height: 100%;}
			</style>
		</head>
		<body>
			<div class="container" id="">
				<nav class="navbar navbar-expand-lg navbar-light " style="background-color:#f0f3f0; ">
					<a class="navbar-brand" href="index.php"><img src="P_img/photo_all/logopng.png" height="60" >กรีนฟาร์ม</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item active">
								<a class="nav-link" href="index.php"><i class="bi bi-house-door"></i> หน้าแรก</a>
							</li>
							
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
									data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<!-- dropdownแยกประเภทสินค้า---> <i class="bi bi-basket2"></i> ผลิตภัณฑ์
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="index.php?act=showbytype&type_id=1">ผักสลัดปลอดสารพิษ</a>
									<a class="dropdown-item"
										href="index.php?act=showbytype&type_id=2">ไข่ไก่และไข่เป็ดจากฟาร์ม</a>
									<a class="dropdown-item" href="index.php?act=showbytype&type_id=3">ผลิตภัณฑ์จากไส้เดือน</a>
									<a class="dropdown-item"
										href="index.php?act=showbytype&type_id=4">ผลิตภัณฑ์จากเศษไม้ในฟาร์ม</a>
									<a class="dropdown-item"
										href="index.php?act=showbytype&type_id=5">ผลิตภัณฑ์จากดินและแกลบ</a>
									<a class="dropdown-item" href="index.php?act=showbytype&type_id=6">ผลิตภัณฑ์จากมะพร้าว</a>
									<a class="dropdown-item" href="index.php?act=showbytype&type_id=7">ผลิตภัณฑ์น้ำผึ้ง</a>
									<a class="dropdown-item" href="index.php?act=showbytype&type_id=8">ผลิตภัณฑ์นม</a>
									<a class="dropdown-item" href="index.php?act=showbytype&type_id=9">ผลิตภัณฑ์โยกิร์ต</a>
									<a class="dropdown-item" href="index.php?act=showbytype&type_id=10">ผลิตภัณฑ์นมร้านกาแฟ</a>
								</div>
							</li>
							<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <!-- dropdownแยกประเภทสินค้า---> <i class="bi bi-menu-app"></i> เกี่ยวกับเรา
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="about.php">เกี่ยวกับเรา</a>
                            <a class="dropdown-item" href="follow_up_vegetables.php">การติดตามผักภายในฟาร์ม</a>
                            <a class="dropdown-item"href="animal_farm.php">การจำหน่ายสัตว์เลี้ยงในฟาร์ม</a>
                            
                        </div>
                    </li>
							<li class="nav-item">
								<a class="nav-link" href="#"><i class="bi bi-bell"></i> ติดต่อเรา</a>
							</li>
							</li>
						</ul>
					
							<a href="cart.php" class="btn btn-outline-success" type="submit">
								<i class="bi-cart-fill me-1"></i>
								Cart
								<span class="badge bg-dark text-white ms-1 rounded-pill"></span>
	</a>
						&nbsp;&nbsp;&nbsp;
	
					<div class="btn-group">
						<button type="button" class="btn btn-outline-dark "><i class="bi bi-person-check"></i> <?php echo $_SESSION["fname"]; ?></button>
						<button type="button" class="btn btn-outline-dark  dropdown-toggle dropdown-toggle-split"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="sr-only">Toggle Dropdown</span>
						</button>
						
						<div class="dropdown-menu">
						<a href="pay.php" class="dropdown-item"><i class="bi bi-clipboard"></i> ช่องทางการชำระเงิน</a>
							
							<a class="dropdown-item" href="logout.php"><i class="bi bi-box-arrow-right"></i> ออกจากระบบ</a>
						</div>
					</div>
			</nav>
				<!--end navbar-->
				<br><div id="content"> 
					<div class="row-50 mx-40">
						<center><img src="p_img/photo_all/logopng.png" width="30%" align='center'></center>
						<center><h3>แผนที่เดินทาง</h3></center>
						<center><img src="p_img/photo_all/map2.png" width="50%" align='center'></center>
						<center><h4 ><div class="col-10">ติดต่อเรา</div></h4></center>
						<center><h6 class="ux-title">ตำบล ขุนแม่ลาน้อย อำเภอแม่ลาน้อย, แม่ฮ่องสอน 58120</h6></center>
						<center><div class="col-10"><p>โทร. 084 568 9797</p></div></center>
						<center><div class="col-10"><p>E-mail : Greenfarmscenter@gmail.com</p></div></center>
						<center><div class="col-10"><p>18.7451777, 99.1195708</p></div></center>
						<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121014.09891596652!2d98.0937927578009!3d18.58798297969727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30db1fa68a1740e5%3A0x40346c5fa8bbd70!2sKhun%20Mae%20La%20Noi%2C%20Mae%20La%20Noi%20District%2C%20Mae%20Hong%20Son%2058120!5e0!3m2!1sen!2sth!4v1639627386313!5m2!1sen!2sth" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>
						<br><br><hr>
						
					
<html lang="en">
	<head>
	
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
body{
font-family: Prompt;
</style>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
</head>
<body>
	<center><h2>สอบถามข้อมูล</h2></center>

			<form action="contact.php" method="POST">
			<div class="row ">
				<div class="col-sm-6"> 
				<label for="Username" class="form-label">ชื่อ :<span style="color: red;">&nbsp;*</label>
				<input type="text" class="form-control" name ="name" placeholder="ชื่อติดต่อกลับ" required>
			</div>
			
			<div class="col-md-6">
				<label for="exampleInputEmail1" class="form-label">อีเมล์ :<span style="color: red;">&nbsp;*</label>
				<input type="email" class="form-control"  name="email" placeholder="อีเมล์ติดต่อกลับ"required>
			</div>
			
			<div class="col-sm-6">
				<label for="exampleInputEmail1" class="form-label">เบอร์โทรศัพท์ :<span style="color: red;">&nbsp;*</label>
				<input type="text" class="form-control"  name="phone" placeholder="เบอร์โทรติดต่อ"required>
				
			</div>
			<div class="col-md-6">
				<label for="exampleInputEmail1" class="form-label">หัวเรื่อง :<span style="color: red;">&nbsp;*</label>
				<input type="text" class="form-control"  name="detail" placeholder="เรื่องที่ติดต่อ" required>
			</div>
			<div class="col-md-6">
				<div class="form-group">
                   <p class="p-area">ใส่รายละเอียดข้อความ<span style="color: red;">&nbsp;*</span></p>
                    
					<textarea name="details" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="รายละเอียดข้อมูลในการสอบถาม" required></textarea>
                </div>
                </div>
			
			
			</div>
		</div>
</div>
</div>
<center><button type="submit" name="btn_contact" class="btn btn-outline-success"><i class="bi bi-arrow-up-circle-fill"></i> ส่งข้อมูล</button><br><br></center>
</form>


<img class="d-block w-100" src="p_img/photo_all/footer2.png" alt="First slide">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>
