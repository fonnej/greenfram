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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
            integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>เพิ่มสินค้า</title>
</head>
<body style="background-color:#FFFFFF;">
    
</body>
</html>






</html>
<FONT Face="Prompt">

    
        <?php
//1. เชื่อมต่อ database:
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง tb_member:
$query = "SELECT * FROM tbl_type ORDER BY type_id asc" or die("Error:" . mysqli_error());
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
?>

        <div class="container">
            <div class="form-group">
                <h2>เพิ่มสินค้า :</h2>
                <form name="addproduct" action="product_form_add_db.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="col-md-12">
                            <p> ชื่อสินค้า :</p>
                            <input type="text" name="p_name" class="form-control" required placeholder="ชื่อสินค้า" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <p> ราคาสินค้า :</p>
                            <input type="number" name="p_price" class="form-control" required
                                placeholder="ราคาสินค้า" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <p> คลังสินค้าที่เหลือ/จำนวน(ชิ้น) :</p>
                            <input type="number" name="p_qty" class="form-control" required
                                placeholder="คลังสินค้าที่เหลือ" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <p> ประเภทสินค้า :</p>
                            <select name="type_id" class="form-control" required>
                                <option value="type_id">ประเภทสินค้า</option>
                                <?php foreach($result as $results){?>
                                <option value="<?php echo $results["type_id"];?>">
                                    <?php echo $results["type_name"]; ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <p> รายละเอียดสินค้า :</p>
                            <textarea name="p_detail" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-md-12">
                            <p> ภาพสินค้า :</p>
                            <input type="file" name="p_img" id="p_img" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12"> 
                            <button type="submit" class="btn btn-success" name="btnadd"><i class="bi bi-box-arrow-right"></i> บันทึก </button>
                            <br><br> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
</FONT>