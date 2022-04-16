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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>แบบสอบถามลูกค้า</title>
    <style>
    body {
        font-family: Prompt;
        background-color:#F0FFF0;
    </style>
</head>

<body>

    <?php
include 'condb.php';
$query = "SELECT * FROM contact";
$result = mysqli_query($con,$query) or die ("Error in sql : $query".mysqli_error($con));
    ?>
    <br>
    <center>
        
    </center>
    <center><img src="p_img/photo_all/pp1.png" width="10%" align='center'></center>&nbsp;
    <center><h3>แบบสอบถามลูกค้า</h3></center>
    <div class="container ">
        <a href="../project/animals/management.php" class="btn btn-outline-success"><i class="bi bi-box-arrow-left"></i> ย้อนกลับ</a> </center><br><br>
        <table class="table table-hover">
            <caption></caption>
            <thead>
                <tr>
                    <th>ลำดับที่</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>อีเมล์</th>
                    <th>เบอร์โทรศัพท์</th>
                    <th>เรื่อง</th>
                    <th>รายละเอียด</th>
                    <th>วันที่-เวลา</th>
                    <th>สถานะ</th>
                    <th>แก้ไข</th>

                </tr>
            </thead>
            <tbody>
                <?php
                            //คิวรี่ข้อมูลมาแสดงในตาราง
                            require_once 'user_connect.php';
                            $stmt = $conn->prepare("SELECT* FROM contact");
                            $stmt->execute();
                            $result = $stmt->fetchAll();
                            foreach($result as $row_contact) {
                            ?>

                <tr>
                    <th><?php echo $row_contact['id']; ?></th>
                    <th><?php echo $row_contact['name']; ?></th>
                    <th><?php echo $row_contact['email']; ?></th>
                    <th><?php echo $row_contact['phone']; ?></th>
                    <th><?php echo $row_contact['detail']; ?></th>
                    <th><?php echo $row_contact['details']; ?></th>
                    <th><?php echo $row_contact['date_details']; ?></th>
                    <th><?php echo $row_contact['status']; ?></th>
                    <td><a href="contact_edit.php?id=<?= $row_contact['id'];?>"
                            class="btn btn-secondary btn-lg"><i class="bi bi-arrow-repeat"></i></a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php mysqli_close($condb) ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

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