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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../project/p_img/icon/logopng.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <title>จัดการข้อมูลสินค้า</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<style>
body{
font-family: Prompt;
</style>



</html>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive"><table class="table table-hover" id="table">
                <thead>
                <table class="table table-hover">
                
                        <th>รหัสสินค้า</th>
                        <th>ชื่อสินค้า</th>
                        <th>ประเภทสินค้า</th>
                        <th>รายละเอียด</th>
                        <th>รูปสินค้า</th>
                        <th>ราคาสินค้า</th>
                        <th>คลังสินค้า</th>
                        <th>วันที่/เวลา</th>
                        <th>แก้ไข</th>
                        <th>ลบ</th>
                        
                    </tr>
                </thead>
                </div>
                <?php
              $act = $_GET['act'];
              if($act == 'add'){
              include('product_form_add.php');
              }elseif ($act == 'edit') {
              include('product_form_edit.php');
              }
              
              ?>
                <?php
                echo '<br><center><h2>ค้นหาข้อมูลสินค้า</h2></center>';
                echo '<font color="red">';   
                echo 'คำค้นหา = ';
                echo $_GET['search'];
                echo '</font>';
                echo '<br/>';             
                $sql = "SELECT * FROM tbl_product 
                    WHERE p_name LIKE '%$search%' OR p_detail LIKE '%$search%' OR type_id LIKE '%$search%' OR p_id LIKE '%$search%'
                 ORDER BY p_id DESC";
                $result = mysqli_query($con, $sql);
                while($row = mysqli_fetch_array($result)) {
                                    
                ?>
                
                <tr>
                    <td><?php echo $row['p_id'];?></td>
                    <td><?php echo $row['p_name'];?></td>
                    <td><?php echo $row['type_id'];?></td>
                    <td><?php echo $row['p_detail'];?></td>
                    <td><img src="file_product/<?php echo $row['p_img'];?>" width="100px"></td>
                    <td><?php echo $row['p_price'];?></td>
                    <td><?php echo $row['p_qty'];?></td>
                    <td><?php echo $row['datesave'];?></td>
                    <td><a href='product.php?act=edit&ID=$row[0]' class='btn btn-secondary btn-xs'><i class="bi bi-arrow-repeat"></i> แก้ไข</a></td>
                    <td><a href='product_del_db.php?ID=$row[0]' onclick=\"return confirm('คุณต้องการลบสินค้าใช่หรือไม่? ')\" class='btn btn-danger btn-xs'><i class="bi bi-trash"></i> ลบ</a></td> 

                </tr>
            <?php } ?>
            </table>
        <?php mysqli_close($con);?>
    </div>
</div>
</div>