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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>จัดการข้อมูลสินค้าภายในฟาร์ม</title>
</head>
<body>
    
</body>
</html>
<?php
session_start();

?>


<html>
<FONT Face="Prompt">
    

    
<?php 
session_start();
include 'condb.php';
if(!$_SESSION['id_admin']==true){
header('Refresh:0; url=login.php');	
 exit;
}
  ?>

        <head>
            <div class="container">
                <?php include('navbar1.php');?>
                <br><br>
                <center>
                    <h1>จัดการข้อมูลสินค้าภายในฟาร์ม<br></h1><br>
                </center>

                <?php error_reporting( error_reporting() & ~E_NOTICE );
    include('h.php');?>
    


    <div class="container">
	<div class="row">
		<div class="col-md-6" style="margin-left: 65%"  >
			<h3>ค้นหารายการสินค้า :</h3>
			 *ค้นรายการเกี่ยวกับ ชื่อสินค้า,ประเภทสินค้า
			
			<form action="product_search.php" method="get" class="form-horizontal">
				<div class="form-group row">
					<div class="col-sm-6">
						<input type="text" name="search" class="form-control"  required>
					</div>
					<div class="col-sm-1">
						<button type="submit" class="btn btn-secondary btn-xs"><i class="bi bi-cart-plus-fill"></i> ค้นหา </button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div><br>
<center>
                    <h2>รายการสินค้าทั้งหมด</h2>
                    
                </center>
                <a href="product.php?act=add" class="btn btn-success btn-lg"><i class="bi bi-cart-plus-fill"></i> เพิ่มสินค้า</a><br><br>
                
                                <?php
              $act = $_GET['act'];
              if($act == 'add'){
              include('product_form_add.php');
              }elseif ($act == 'edit') {
              include('product_form_edit.php');
              }
              else {
              include('product_list.php');
              }
              ?>

                            </div>
                        </div>

</FONT>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>