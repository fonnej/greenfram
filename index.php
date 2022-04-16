<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../project/p_img/icon/logopng.png">
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
            integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>ผลิตภัณฑ์จากฟาร์ม</title>
</head>
<body>
    
</body>
</html>
<FONT Face="Kanit">
  

<?php 
session_start();
include 'condb.php';
if(!$_SESSION['user_id']==true){
header('Refresh:0; url=login.php');	
 exit;
}
  ?>
      

    <body>
    <style>
				html, body {
					height: 100%; margin: 0;
					background-color:#ffffff;
					background-repeat: no-repeat;
					background-position: center center;
					background-attachment: fixed;
					background-size: cover;
				}
			#header{background-color: #ffffff; min-height:25%; /*margin-top: 0px;*/}
			#content{background-color: #ffffff; min-height:65%;}
			#footer{background-color: #cccc33; min-height:10%;}
			#page{width: 80%; height: 100%;}
			</style>
   <FONT Face="Kanit">
    <?php Session_start();?>
     

    <body>
        <div class="container">

            
            <?php include('navbar.php');?>

            <!--Start slide -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="p_img/photo_all/ff1 (1).jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="p_img/photo_all/ff1 (6).jpg" alt="Second slide">

                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="p_img/photo_all/salad1.jpg" alt="Third slide">
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
                <!--end slide -->
                <center>
                    <h3><br>
                        <p>ผลิตภัณฑ์จากฟาร์ม
                    </h3>
                </center>
                </p>
                <br>
                
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-10">
                        <?php
              $act = (isset($_GET['act'])? $_GET['act']:'');
              if($act == 'showbytype'){
              include('show_product_type.php');
              }
              else{
              include('show_product.php');
              }
              ?>
                        <br>
                    </div>
                </div>
            </div>
</Font>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>
</body>

</html>