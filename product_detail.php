
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../project/p_img/icon/logopng.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
            integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>รายละเอียดสินค้า</title>
</head>
<body>
    
</body>
</html>
<FONT Face="Kanit">
    <?php
include('h.php');
include('backend/condb.php');
$p_id = $_GET["id"];
?>
    <!DOCTYPE html>

    <head>
        <title>รายละเอียดสินค้า</title>
        <!-- Required meta tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- Favicon-->
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
            integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
            <style>
.zoom {
  
}

.zoom:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>
        <style>
            
        div.polaroid {
            width: 80%;
            background-color: white;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            margin-bottom: 25px;
        }

        div.container_di {
            text-align: center;
            padding: 10px 20px;
        }
        </style>
    </head>

    <body>
        

        <div class="container">
            <?php include('navbar.php'); ?><br><br>
            <div class="row">
                <?php
      $sql = "SELECT * FROM tbl_product as p
      INNER JOIN tbl_type  as t ON p.type_id=t.type_id
      AND p_id = $p_id ";
      $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
      $row = mysqli_fetch_array($result);
      ?>
                <!-- หน้ารายละเอียดสินค้า --------------------------------------------->
                <center>
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="">
                                <div class="zoom">
                                    <?php echo"<img src='file_product/".$row['p_img']."'width='100%' align='center'>";?>
                                    <div class="card-body">
                                    <!-- <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                        เปิดดูรายละเอียด
                                    </button> -->
                                    
                                    <div class="collapse" id="collapseExample">
                                        <div class="card card-body">
                                        <h5><?php echo $row["p_name"];?></h5>
                                        </div>
                                    </div>
                                </div>
                                    <div class="container_di">
                                        
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                            <center><h2><i class="bi bi-cart-plus-fill"></i> รายละเอียดสินค้า</h2></center><hr>
                                <br>
                                <center>
                                    <h2><?php echo $row["p_name"];?></h2>
                                </center>
                                
                                <center>
                                    <h4> ประเภท : <?php echo $row["type_name"];?></h4>
                                </center>
                                <h5><center><?php echo $row["p_detail"];?></center></h5>
                                <center>
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <h4><?php echo $row['p_price'];?> THB
                                </center>
                                <p>
                                    
             <center><a href='cart.php?p_id=<?php echo $row['p_id']?>&act=add'class="btn btn-success" type="submit" name="Add_to_Cart"
                                            role="button"><i class="bi bi-cart-plus-fill"></i> สั่งซื้อสินค้า</a>
                                </p>
                </center>
                


                </form>
            </div>

            </p>
        </div>
        </div>
        </div>
        </div>
        </div>
</Font>
<img class="d-block w-100" src="p_img/photo_all/footer2.png" alt="First slide">
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