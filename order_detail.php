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
        <title>รายละเอียดการสั่งสินค้า</title>
        
    </head>
    <style>
body{
font-family: kanit;
background-color:#F0FFF0;
</style>
<body>

        <div class="container">
            <div class="row">
                <div class="col-md-12"> <br><br>
                <center><img src="p_img/photo_all/pp1.png" width="15%" align='center'></center>&nbsp;
                <center><h3>รายละเอียดการสั่งสินค้า </h3></center>
                    <a href="order_list.php" class="btn btn-success"><i class="bi bi-box-arrow-left"></i> ย้อนกลับ</a> </center><br>
                    <table class="table table-hover">   
                            <tr>
                            <th>เลขลำดับการสั่งสินค้า</th>
                                <th>ไอดีลูกค้า</th>
                                <th>รหัสสินค้า</th>
                                <th>จำนวนสินค้าที่สั่ง</th>
                                <th>ราคาสินค้าแต่ละชิ้น</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //คิวรี่ข้อมูลมาแสดงในตาราง
                            require_once 'user_connect.php';
                            $stmt = $conn->prepare("SELECT * FROM order_detail");
                            $stmt->execute();
                            $result = $stmt->fetchAll();
                            foreach($result as $detail) {
                            ?>

                            <tr>
                            <td><?= $detail['d_id'];?></td>
                                <td><?= $detail['o_id'];?></td>
                                <td><?= $detail['p_id'];?></td>
                                <td><?= $detail['d_qty'];?></td>
                                <td><?= $detail['d_subtotal'];?></td>
                                
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