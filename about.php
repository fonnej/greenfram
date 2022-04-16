<?php 
session_start();
include 'condb.php';
if(!$_SESSION['user_id']==true){
header('Refresh:0; url=login.php');	
 exit;
}
  ?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
		<!-- Bootstrap CSS -->
		<link rel="icon" type="image/x-icon" href="../project/p_img/icon/logopng.png">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<title>เกี่ยวกับเรา</title>
		<link rel="stylesheet"
			href="https://fonts.googleapis.com/css?family=Prompt">
			<style>
				body{
					font-family: Kanit;
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
			#footer{background-color: #cccc33; min-height:10%;}
			#page{width: 80%; height: 100%;}
			</style>
		</head>
		<body>
			
			<div class="container" id="">
				<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color:#f0f3f0; ">
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
								<a class="nav-link" href="contact_.php"><i class="bi bi-bell"></i> ติดต่อเรา</a>
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
			</font>
			<FONT Face="FC Home">
				<!--end navbar-------------------------------------------------------------->
				<div class="col-3"></div>
				<div class="col-3"></div>
				
				<div class="col-100"></div>
				<center><img src="p_img/photo_all/salad.jpg" width="100%" align='center'></center><br>
				
				
		<center><img src="p_img/photo_all/logopng.png" width="30%" align='center'></center>

		<h2><font color=#000000; ><div id="header" align='center'> <h1>กรีนฟาร์ม</h1>
			</div></h2></font>
			 <center><h3>ดินแดนแห่งธรรมชาติ บนท้องทุ่งกว้างพลิดเพลินกับกิจกรรมที่จะปลดปล่อยคุณออกจากวิถีเมือง <br> ผ่อนคลายกับการท่องเที่ยวเชิงเกษตร 
				แวะซื้อของฝาก เรียกได้ว่าครบจบในที่เดียว ที่กรีนฟาร์ม</h3></center><br>
				<!--Start slide -->
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
					  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
					  <div class="carousel-item active">
						<img class="d-block w-100" src="p_img/photo_all/salad.jpg" alt="First slide">
					  </div>
					  <div class="carousel-item">
						<img class="d-block w-100" src="p_img/photo_all/salad1.jpg" alt="Second slide">
					  </div>
					  <div class="carousel-item">
						<img class="d-block w-100" src="p_img/photo_all/salad.jpg" alt="Third slide">
					  </div>
					  <div class="carousel-item">
						<img class="d-block w-100" src="p_img/photo_all/salad1.jpg" alt="Third slide">
					  </div>
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
				  <!--end slide -->

				<h1>เกี่ยวกับเรา</h1>
				<h4><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ก้าวสู่อาณาจักรแห่งความทรงจำของกรีนฟาร์ม
					ผู้ซึ่งสร้างตำนานแห่งความธรรมชาติแห่งฟาร์มให้เป็นที่กล่าวขานมายาวนานกว่าครึ่งศตวรรษ จากความมุ่งมั่นและความฝันในวัยเยาว์ที่เขาได้กล่าวว่า
				</h4></p>
				
				<!--Start slide -->
				<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="p_img/photo_all/ff1 (6).jpg" alt="First slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="p_img/photo_all/salad1.jpg" alt="Second slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="p_img/photo_all/ff1 (1).jpg" alt="Third slide">
						</div>
					</div>
					<!--end slide -->
				</div><br>
				<center><h4><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สัมผัสความประทับใจกับหลากหลายของสะสมอันเต็มเปี่ยมไปด้วยความทรงจำของทุกช่วงชีวิตที่ผ่านมา
					<br> ซึ่งถูกเก็บรักษาไว้เป็นอย่างดีตลอดระยะเวลากว่า 60 ปี</p></h4><br></center>
				<center><img src="p_img/photo_all/ff1 (8).jpg" width="100%" ></center><br>
				<center><h4><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เสน่ห์อันเป็นเอกลักษณ์ของกรีนฟาร์ม ที่ท่านคิดถึง <br> รถแทรกเตอร์พาท่านชมบรรยากาศธรรมชาติสองข้างทาง</p></h4><br></center>

				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="p_img/photo_all/ff1 (4).jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="p_img/photo_all/ff1 (1).jpg" alt="Third slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="p_img/photo_all/ff1 (2).jpg" alt="Third slide">
					</div>
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
			
		</div>
	</div>
</FONT>
				
				<footer class="bg-light text-center text-lg-start">
					<!-- Copyright -->
					<FONT Face="FC Home">
					<br>
					<h3>  GREEN FARMS (กรีนฟาร์ม)</h3>
					<h5>สัมผัสวิถีชีวิต ฟาร์มธรรมชาติ</h5>
					
					</FONT>
					<img class="d-block w-100" src="p_img/photo_all/footer2.png" alt="First slide">
					<!-- Copyright -->
				<!-- Optional JavaScript -->
				<!-- jQuery first, then Popper.js, then Bootstrap JS -->
				<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
				<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
			</body>
		</html>