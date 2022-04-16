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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>ฟอร์มแก้ไขข้อมูลสมาชิก</title>
  </head>
  <style>
    
body{
font-family: kanit;
background-color:#99CCFF;
</style>
<body style="background-image: url('p_img/photo_all/banner1.jpg');">
<?php
    if(isset($_GET['id'])){
      require_once 'user_connect.php';
      $stmt = $conn->prepare("SELECT* FROM user_member WHERE id=?");
      $stmt->execute([$_GET['id']]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      //ถ้าคิวรี่ผิดพลาดให้กลับไปหน้า index
      if($stmt->rowCount() < 1){
          header('Location: index.php');
          exit();
      }
    }//isset
    ?>
    
    <div class="container" >
      <div class="row">
      <div class="col-md-4"></div>
        <div class="col-md-4"> <br>
          
          <center><img src="p_img/photo_all/man.png" width="20%" align='center'></center><br>
          <center><h4>ฟอร์มแก้ไขข้อมูลสมาชิก</h4></center>
          
          <form action="user_db.php" method="POST">
          <div class="input-group mb-3">
              <label for="name" class="col-sm-2 col-form-label"> Username:  </label>
              <div class="col-sm-10">
                <input type="text" name="user_id" class="form-control" required value="<?= $_SESSION['user_id'];?>" minlength="3">
              </div>
            </div>
            <div class="input-group mb-3">
              <label for="name" class="col-sm-2 col-form-label"> Password:  </label>
              <div class="col-sm-10">
                <input type="password" name="pass" class="form-control" required value="<?= $_SESSION['pass'];?>" minlength="3" >
              </div>
            </div>
            <div class="input-group mb-3">
              <label for="name" class="col-sm-2 col-form-label"> คำนำหน้า:  </label>
              <div class="col-sm-10">
                <input type="text" name="title" class="form-control" required value="<?= $_SESSION['title'];?>" minlength="3" >
              </div>
            </div>
            <div class="input-group mb-3">
              <label for="name" class="col-sm-2 col-form-label"> ชื่อจริง:  </label>
              <div class="col-sm-10">
                <input type="text" name="fname" class="form-control" required value="<?= $_SESSION['fname'];?>" minlength="3" >
              </div>
            </div>
            <div class="input-group mb-3">
              <label for="name" class="col-sm-2 col-form-label"> นามสกุล:  </label>
              <div class="col-sm-10">
                <input type="text" name="lname" class="form-control" required value="<?= $_SESSION['lname'];?>" minlength="3" >
              </div>
            </div>
            <div class="input-group mb-3">
              <label for="name" class="col-sm-2 col-form-label"> เพศ:  </label>
              <div class="col-sm-10">
                <input type="text" name="gender" class="form-control" required value="<?= $_SESSION['gender'];?>" minlength="3" >
              </div>
            </div>
            <div class="input-group mb-3">
              <label for="name" class="col-sm-2 col-form-label"> อีเมล์:  </label>
              <div class="col-sm-10">
                <input type="text" name="email" class="form-control" required value="<?= $_SESSION['email'];?>" minlength="3" >
              </div>
            </div>
            <div class="input-group mb-3">
              <label for="name" class="col-sm-2 col-form-label"> โซเชียล:  </label>
              <div class="col-sm-10">
                <input type="text" name="social_account" class="form-control" required value="<?= $_SESSION['social_account'];?>" minlength="3" >
              </div>
            </div>
            <div class="input-group mb-3">
              <label for="name" class="col-sm-2 col-form-label"> เบอร์โทร:  </label>
              <div class="col-sm-10">
                <input type="text" name="phone" class="form-control" required value="<?= $_SESSION['phone'];?>" minlength="3" >
              </div>
            </div>
            <div class="input-group mb-3">
              <label for="name" class="col-sm-2 col-form-label"> ที่อยู่:  </label>
              <div class="col-sm-10">
                <input type="text" name="address" class="form-control" required value="<?= $_SESSION['address'];?>" minlength="3" >
              </div>
            </div>
            <input type="hidden" name="id" value="<?= $row['id'];?>">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <center><a href="show_index.php" class="btn btn-secondary">ย้อนกลับ</a> </center><br><br></center>
          <center><button type="submit" class="btn btn-primary">บันทึกข้อมูล</button><br><br></center>
          </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>