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
        <title>ติดตามการปลูกผักภายในฟาร์ม</title>
        
    </head>
    <style>
body{
font-family: kanit;
background-color:#F0FFF0;
</style>
<body style="background-image: url('');">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> <br><br>
                <center><img src="p_img/photo_all/mg.png" width="15%" align='center'></center>&nbsp;
                <center><h3>ติดตามการปลูกผักภายในฟาร์ม </h3></center>
                <a href="../project/animals/management.php" class="btn btn-outline-success"><i class="bi bi-box-arrow-left"></i> ย้อนกลับ</a> </center><br>
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
                                <th>เพิ่ม</th>
                                <th>แก้ไข</th>
                                <th>ลบ</th>
                                
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
                                <td><a href="up_vegetables.php" class="btn btn-success btn-sm"><i class="bi bi-arrow-bar-up"></i></a></td>
                                <td><a href="up_vegetables_edit.php?id=<?=$v['id'];?>" class="btn btn-warning btn-sm"><i class="bi bi-box-arrow-in-up-right"></i></a></td>
                                <td><a href="up_vegettable_del.php?id=<?=$v['id'];?>" class="btn btn-danger btn-sm" onclick="return confirm('ยืนยันการลบข้อมูล !!');"><i class="bi bi-trash"></i></a></td>
                                
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
    </body>
</html>