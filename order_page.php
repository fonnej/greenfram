
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
    <title>จัดการข้อมูลภายในฟาร์ม</title>
</head>
<body>
<style>
body{
font-family: kanit;
background-color:#F0FFF0;
</style>
</body>
</html>
<FONT Face="Prompt">
    <?php
session_start();

?>


    <!-- !PAGE CONTENT! -->

        <!-- Header -->

        </header>

            <br>
            <div class="container">
            <center><img src="p_img/photo_all/ani.png" width="30%;" align='center'>
                <h3>จัดการข้อมูลการสั่งซื้อภายในฟาร์ม</h3><br></center> 
               <a href="../project/animals/management.php" class="btn btn-outline-dark"><i class="bi bi-box-arrow-left"></i> หน้าหลัก</a> </center><hr>
                <table class="table table-striped table-hover"> 
                    <tr>
                        <td>
                            <h4><span class="glyphicon glyphicon-chevron-right"
                                    aria-hidden="true"></span>  รายการสั่งซื้อสินค้าในฟาร์ม⠀⠀⠀</h4>
                        </td>
                        <td>
                            <center><a href="order_list.php" class="btn btn-success btn-lg"><span
                                        class="glyphicon glyphicon-plus" aria-hidden="true"></span> จัดการข้อมูล</a>
                            </center><br>
                        </td>

                    </tr>
                </table>
                <table class="table table-striped table-hover">
                    <tr>
                        <td>
                    <h4><span class="glyphicon glyphicon-chevron-right"aria-hidden="true"></span>รายการสั่งซื้อสัตว์เลี้ยงในฟาร์ม</h4>
                        </td>
                        <td>
                            <center><a href="animal_farm_list.php" class="btn btn-success btn-lg ">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> จัดการข้อมูล</a>
                            </center><br>
                        </td>


                    </tr>
                </table>
                <table class="table table-striped table-hover"> 
                    <tr>
                        <td>
                            <h4><span class="glyphicon glyphicon-chevron-right"
                                    aria-hidden="true"></span>จัดการข้อมูลการชำระเงินในฟาร์ม</h4>
                        </td>
                        <td>
                            <center><a href="pay_list.php" class="btn btn-success btn-lg"><span
                                        class="glyphicon glyphicon-retweet" aria-hidden="true"></span> จัดการข้อมูล</a>
                            </center><br>
                        </td>

                    </tr>
                </table>
                
            </div>
            <!-- <center><a href="" class="btn btn-primary"> จัดการข้อมูลสัตว์ภายในฟาร์ม</a> </center><br>
  <center><a href="product.php" class="btn btn-dark"> จัดการข้อมูลสินค้าภายในฟาร์ม</a> </center><br> -->

  <table border="0" <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="../project/p_img/photo_all/footer1.png" alt="First slide">
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

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous"></script>
</font>
</body>

</html>