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
    <title>ติดตามการปลูกผักภายในฟาร์ม</title>
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
<center><img src="p_img/photo_all/mg.png" width="15%" align='center'></center>
<FONT Face="FC Home">   
<form action="animal_farm_db.php" method="POST" enctype="multipart/form-data" >
<div class="container">
<div class="row"><br><br>
<center><h1>ติดตามการปลูกผักภายในฟาร์ม</h1> </center>

<center><h4>
ผักสลัด ปัจจุบันเมีความนิยมเป็นอย่างมาก เนื่องจากความนิยมบริโภคสลัดผักเพิ่มขึ้นมาก คนรักสุขภาพ ผู้ที่ต้องการลดน้ำหนักและคนรักการรับประทานผักเป็นชีวิตจิตใจ หลายท่านนิยมทานเป็นอาหารเช้าหรืออาหารเย็น ผักสลัดนั้นนิยมทำเป็นเมนูสลัดราดน้ำสลัด หรือจะรับประทานคู่กับอาหาร สเต็ก หมูย่าง หรือเนื้อย่าง ก็สามารถอร่อยได้ทันที</h4> </center>
<style>
body{
font-family: kanit;
background-color:#F0FFF0;
</style>
<div class="container">
                    <div class="row gy-3 my-3">
                    <div class="col-sm-6 col-md-4 col-lg-3" >
                        <div class="card">
                            <img src="../project/p_img/vegetable/v1.jpg" class="zoom" alt="image" />
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3" >
                        <div class="card" ">
                            <img src="../project/p_img/vegetable/v2.jpg" class="zoom" alt="Sunset Over the Sea" />
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3" >
                        <div class="card">
                            <img src="../project/p_img/vegetable/v3.jpg" class="zoom" alt="Sunset Over the Sea" />
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3" >
                        <div class="card" >
                            <img src="../project/p_img/vegetable/v4.jpg" class="zoom" alt="Sunset Over the Sea" />
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3" ></div>
                    <div class="col-sm-6 col-md-4 col-lg-3" >
                        <div class="card" >
                            <img src="../project/p_img/vegetable/v5.jpg" class="zoom" alt="Sunset Over the Sea" />
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3" >
                        <div class="card" >
                            <img src="../project/p_img/vegetable/v6.jpg" class="zoom" alt="Sunset Over the Sea" />
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    <center><h1>สั่งซื้อสินค้า</h1></center>
                  <center><a href="index.php?act=showbytype&type_id=1" class="btn btn-outline-success"><i class="bi bi-hand-index-thumb"></i>  คลิกเลย!!</a></center>

        <div class="container">
<h2>ตารางติดตามการปลูกผักภายในฟาร์ม</h2>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-hover">   
                            <tr>
                                <th>ลำดับ</th>
                                <th>รูปผัก</th>
                                <th>ชื่อผัก</th>
                                <th>วันที่ปลูก</th>
                                <th>อายุการปลูกผัก</th>
                                <th>เหลือจำนวนวัน</th>
                                <th>วันที่เก็บเกี่ยว</th>
                                <th>สถานะการปลูกผัก</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            //คิวรี่ข้อมูลมาแสดงในตาราง
                            require_once 'user_connect.php';
                            $stmt = $conn->prepare("SELECT * FROM vegetable");
                            $stmt->execute();
                            $result = $stmt->fetchAll();
                            foreach($result as $v) {
                            ?>

                            <tr>
                                <td><?= $v['id'];?></td>
                                <td><img src="img_vegetable/<?php echo $v['img'];?>" width="50px"></td>
                                <td><?= $v['name_vegetable'];?></td>
                                <td><?= $v['plan_date'];?></td>
                                <td><?= $v['harvest_age'];?></td>
                                <td><?= $v['how_day'];?></td>
                                <td><?= $v['harvest_date'];?></td>
                                <td><?= $v['status'];?></td>
                                
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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