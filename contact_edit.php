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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>ฟอร์มแก้ไขข้อมูล</title>
  </head>
  <style>
    
body{
font-family: kanit;
background-color:#F0FFF0;
</style>

    <?php
    if(isset($_GET['id'])){
      require_once 'user_connect.php';
      $stmt = $conn->prepare("SELECT* FROM contact WHERE id=?");
      $stmt->execute([$_GET['id']]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      //ถ้าคิวรี่ผิดพลาดให้กลับไปหน้า index
      if($stmt->rowCount() < 1){
          header('Location: contact_list.php');
          exit();
      }
    }//isset
    ?><br><br>
    <div class="container" >
      <div class="row">
      <center><img src="p_img/photo_all/pp1.png" width="10%" align='center'></center><br>
    <center> <h4>ฟอร์มแก้ไขข้อมูลติดต่อสอบถาม</h4></center>
      <div class="col-md-4"></div>
        <div class="col-md-4"> 
        
          <form action="contact_edit_db.php" method="post">

          <div class="input-group mb-3">
              <label for="name" class="col-sm-2 col-form-label">ชื่อติดต่อ:  </label>
              <div class="input-group mb-3">
                <input type="text" name="name" class="form-control" required /value="<?= $row['name'];?>" minlength="3">
              </div>
           
              
            <div class="input-group mb-3">
              <label for="name" class="col-sm-2 col-form-label"> อีเมล์:  </label>
              <div class="col-sm-10">
                <input type="email" name="email" class="form-control" required value="<?= $row['email'];?>" minlength="3" readonly>
              </div>
            </div>
            <div class="input-group mb-3">
              <label for="name" class="col-sm-2 col-form-label"> เบอร์โทร:  </label>
              <div class="col-sm-10">
                <input type="text" name="phone" class="form-control" required value="<?= $row['phone'];?>" minlength="3" >
              </div>
            </div>
            <div class="input-group mb-3">
              <label for="name" class="col-sm-2 col-form-label"> เรื่อง:</label>
              <div class="col-sm-10">
                <input type="text" name="detail" class="form-control" required value="<?= $row['detail'];?>" minlength="3" >
              </div>
            </div>
            <div class="input-group mb-3">
              <label for="name" class="col-sm-2 col-form-label"> รายละเอียด:  </label>
              <div class="col-sm-10">
                <input type="text" name="details" class="form-control" required value="<?= $row['details'];?>" minlength="3" >
              </div>
            </div>
            <div class="input-group mb-3">
              <label for="name" class="col-sm-2 col-form-label"> สถานะ:  </label>
              <div class="col-sm-10">
                <input type="text" name="status" class="form-control" required value="<?= $row['status'];?>" minlength="3" >
              </div>
            </div>
          </div>
            <input type="hidden" name="id" value="<?= $row['id'];?>">
            <center><button type="submit" class="btn btn-success">อัพเดตข้อมูล</button><br><br></center>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>