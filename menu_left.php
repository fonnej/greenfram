<?php 
session_start();
include 'condb.php';
if(!$_SESSION['id_admin']==true){
header('Refresh:0; url=login.php');	
 exit;
}
  ?>
<FONT Face="Mitr">
    <!-- <center><img src="p_img/icon/admin.png" width="60%" align='center'> -->
        <!-- <div class="list-group">

	<a href="product.php" class="list-group-item list-group-item-action ">จัดการสินค้า</a>
	<a href="logout.php" class="list-group-item list-group-item-action ">ออกจากระบบ</a>
</div> -->

        <?php session_start();
if(isset($_SESSION['id_admin'])==true){
	echo "<center>";
	echo "";
  // echo "<h2>จัดการข้อมูลสินค้าภายในฟาร์ม<br></h2>";
  // echo "คุณ ".$_SESSION["fname"]." ".$_SESSION["lname"]." (".$_SESSION["status"].")";
  // echo "";
  

$serverName = "localhost";
      $userName = "root";
      $userPassword ="12345678";
      $dbName ="pro";
      $connect_db =mysqli_connect($serverName,$userName,$userPassword,$dbName,);
      date_default_timezone_set("Asia/Bangkok");

  mysqli_close($connect_db);
  }else{

    echo "<script> alert('คุณไม่สามารถเข้าสู่ระบบ admin ได้ กรุณา login ใหม่อีกครั้ง')</script>";
    header('Refresh:0; url=login_admin.php');
  }

  ?>
</Font>