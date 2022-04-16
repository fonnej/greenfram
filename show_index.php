<?php
session_start();
include 'condb.php';
if (!$_SESSION['user_id'] == true) {
    header('Refresh:0; url=login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../project/p_img/icon/logopng.png">
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>ยินดีต้อนรับ กรีนฟาร์ม</title>
</head>

<body>

</body>

</html>
<FONT Face="FC Home">
</Font>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="icon" type="image/x-icon" href="../project/p_img/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <FONT Face="FC Home">
        <title>หน้าแรก </title>
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
<body>
</body>
<style>
.zoom {
  
}

.zoom:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>
</head>

<div class="container">
    <!-- <body style="background-image: url('p_img/photo_all/banner1.jpg');"> -->

    <center><img src="p_img/photo_all/logopng.png" width="25%" align='center'> </center>
    <?php include('navbar.php'); ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="p_img/photo_all/ff1 (1).jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="p_img/photo_all/ff1 (6).jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="p_img/photo_all/salad.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="p_img/photo_all/ff1 (8).jpg" alt="Third slide">
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
    
    
    <!-- <img src="p_img/m11.jpg" width="100%" align='center'> -->

    <?php
    echo "<font color=#3CB371></center>";
    echo "<br>";
    // echo "username ของท่านคือ : ".$_SESSION["user_id"];
    echo "<br><h1><div><center><br>";
    echo "ยินดีต้อนรับคุณ " . "" . $_SESSION["fname"] . " " . $_SESSION["lname"] . "  ";

    echo "<br><br><h3>";
    echo "<font color=#000000>";
    echo "“เปิดโอกาสให้ทุกท่านมาสัมผัสกับวิถีชีวิตธรรมชาติที่แท้จริงภายในฟาร์ม เปิดประสบการณ์ด้วยกิจกรรมสำหรับครอบครัวต่างๆมากมาย พร้อมให้บริการท่านแล้ว”</h3>";
    echo "<br>ผักปลอดสารพิษ";
    echo "</font></h1></div></center><br>";
    mysqli_close($con);
    ?> 
    <!--Start slide -->
    <FONT Face="FC Home">
    <!-- <center><img src="p_img/photo_all/farm.jpg" width="20%" alt="..."></center> -->
        <div class="container">
                    <div class="row gy-3 my-3">
                    <div class="col-sm-6 col-md-4 col-lg-3" >
                        <div class="card">
                            <img src="p_img/vegetable/v1.jpg" class="zoom" alt="image" />
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3" >
                        <div class="card" ">
                            <img src="p_img/vegetable/v2.jpg" class="zoom" alt="Sunset Over the Sea" />
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3" >
                        <div class="card">
                            <img src="p_img/vegetable/v3.jpg" class="zoom" alt="Sunset Over the Sea" />
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3" >
                        <div class="card" >
                            <img src="p_img/vegetable/v4.jpg" class="zoom" alt="Sunset Over the Sea" />
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    
                    
                        
                    </div>
                    </div>
                    <center><h1>เลือกดูผักปลอดสารพิษ</h1></center>
                  <center><a href="index.php?act=showbytype&type_id=1" class="btn btn-outline-success"><i class="bi bi-hand-index-thumb"></i>  คลิกเลย!!</a></center>  

        <!-- <img src="p_img/milk.jpg" width="50%" hight="50%" align='center'></center> -->
        <!-- show product -->
        <hr>
        <center>
            <font color=#000000;>
                <P>
                    <br>
                <h1 style="text-align:center;">&nbsp;&nbsp;Today’s Special<br></h1>

            </font>
            <font color=#00000;>
                <h4>อาหารที่ท่านจะได้พบเฉพาะที่หน้าฟาร์ม
                    อาหารที่เกิดจากความคิดสร้างสรรค์ด้วยองค์ความรู้และประสบการณ์ <br>ที่เข้ากับบรรยากาศ ออกมาเป็นสินค้านวัตกรรมคุณภาพ
                    ที่กรีนฟาร์ม เท่านั้น</h4></font>
                
                    
                    
                <br>
                <font color=#000000;>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6" <div class="card" >
                            <div class="card block">
                                <img src="../project/p_img/food/food1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">ดับเบิ้ลชีสพิซซ่า</p>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <button class="btn btn-outline-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="bi bi-hand-index-thumb"></i> เมนูแนะนำ
                                    
                                    </button>
                                    </p>
                                    <div class="collapse" id="collapseExample">
                                        <div class="card card-body">
                                            ดับเบิ้ลชีสพิซซ่า<br>
                                            (Double cheese Pizza)<br>
                                            รสชาติอร่อย แป้งหนานุ่ม เพิ่มชีส 2 เท่าจากปกติ<br>
                                            ราคา 240 บาท

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6" class="card" style="width: 18rem;">
                            <div class="card block">
                                <img src="../project/p_img/food/food2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">ฮาวายเอี้ยนพิซซ่า</p>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <button class="btn btn-outline-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="bi bi-hand-index-thumb"></i> เมนูแนะนำ
                                    </button>
                                    </p>
                                    <div class="collapse" id="collapseExample">
                                        <div class="card card-body">
                                            ฮาวาเอี้ยนพิซซ่า<br>
                                            (Hawaiian Pizza)<br>
                                            สูตรของไอแอมพิซซ่า รสชาติเปรี้ยว หวาน มันในคำเดียว <br>
                                            ราคา 240 บาท
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6" <div class="card" style="width: 18rem;">
                            <div class="card block">
                                <img src="../project/p_img/food/food3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">ขนมปังกระเทียม</p>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <button class="btn btn-outline-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="bi bi-hand-index-thumb"></i> เมนูแนะนำ
                                    </button>
                                    </p>
                                    <div class="collapse" id="collapseExample">
                                        <div class="card card-body">
                                            ขนมปังกระเทียม<br>
                                            (Garkic Bread)<br>
                                            รสหวาน เป็นรสของขนมปัง ขนมปังกระเทียมแท้ๆ<br>
                                            ราคา 75 บาท
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6" <div class="card" style="width: 18rem;">
                            <div class="card block">
                                <img src="../project/p_img/food/food4.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">หมูตะไคร้</p>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <button class="btn btn-outline-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="bi bi-hand-index-thumb"></i> เมนูแนะนำ
                                    </button>
                                    </p>
                                    <div class="collapse" id="collapseExample">
                                        <div class="card card-body">
                                            หมูตะไคร้<br>
                                            (Lemongrass Pork)<br>
                                            เน้นรสกลมกล่อม หมูผัดตะไคร้เป็นเมนูรสเข้มข้น<br>
                                            ราคา 180 บาท
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <br>
                <div class="container">
                    <div class="row my-3">
                        <div class="col-md-3 col-sm-6" <div class="card" style="width: 18rem;">
                            <div class="card block">
                                <img src="../project/p_img/food/food5.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">สเต็กไก่</p>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <button class="btn btn-outline-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="bi bi-hand-index-thumb"></i> เมนูแนะนำ
                                    </button>
                                    </p>
                                    <div class="collapse" id="collapseExample">
                                        <div class="card card-body">
                                            สเต็กไก่<br>
                                            (Chicken Steak)<br>
                                            รสชาติรสกลมกล่อม เครื่องปรุงรสสำหรับสเต็กไก่ <br>
                                            ราคา 180 บาท
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6" <div class="card" style="width: 18rem;">
                            <div class="card block">
                                <img src="../project/p_img/food/food6.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">สเต็กหมู</p>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <button class="btn btn-outline-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="bi bi-hand-index-thumb"></i> เมนูแนะนำ
                                    </button>
                                    </p>
                                    <div class="collapse" id="collapseExample">
                                        <div class="card card-body">
                                            สเต็กหมู<br>
                                            (Chicken Steak)<br>
                                            รสชาติรสกลมกล่อม เครื่องปรุงรสสำหรับสเต็กหมู <br>
                                            ราคา 180 บาท
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6" <div class="card" style="width: 18rem;">
                            <div class="card block">
                                <img src="../project/p_img/food/food7.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">สปาเกตตี้เบคอนพริกแห้ง</p>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <button class="btn btn-outline-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="bi bi-hand-index-thumb"></i> เมนูแนะนำ
                                    </button>
                                    </p>
                                    <div class="collapse" id="collapseExample">
                                        <div class="card card-body">
                                            สปาเกตตี้เบคอนพริกแห้ง<br>
                                            (Spaghetti with Dried Chili)<br>
                                            รสชาติรสกลมกล่อม เครื่องปรุงจัดจ้าน <br>
                                            ราคา 180 บาท
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-lg-3" <div class="card" style="width: 18rem;">
                            <div class="card block">
                                <img src="../project/p_img/food/food8.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">สปาเกตตี้ผัดขี้เมากุ้ง</p>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <button class="btn btn-outline-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="bi bi-hand-index-thumb"></i> เมนูแนะนำ
                                    </button>
                                    </p>
                                    <div class="collapse" id="collapseExample">
                                        <div class="card card-body">
                                            สปาเกตตี้ผัดขี้เมากุ้ง<br>
                                            (Spaghetti with spicy prawn)<br>
                                            รสชาติจี๊ดจ๊าดสะใจ แซ่บอย่าบอกใคร<br>
                                            ราคา 200 บาท
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </font>
           
        </center>
        <font color=#666633;>
            <P>
                <br>
            <h1 style="text-align:center;">&nbsp;&nbsp;“สินค้านมสดจากฟาร์ม”</h1>
            <!--end slide -->
            <!-- สินค้าแนะนำหน้าแรก 8ชิ้น-------------------------------------------------------------------->
            <?php include('../menu.php'); ?>

            <center><img src="p_img/img1.png" width="50%" alt="..."></center>
            <font color=#666633;>
                <P>
                <h3 style="text-align:center;">&nbsp;&nbsp;“Lactose Intolerance”</h3>
                <font color=#666633;>
                    <h5 style="text-align:center;">นมสด 0% แลคโตส เป็นขบวนการทำให้น้ำตาลแลคโตสมีโมเลกุลเล็กลง <br>
                        ส่งผลให้ง่ายต่อการย่อยและการดูดซึมของร่างกาย<P>
                </font>
                </h5>
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



<!-- <center><a href="index.php" class="btn btn-warning"> ไปหน้ารายการสินค้า</a> </center><br> -->
</Font>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>