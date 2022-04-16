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
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <title></title>
  </head>
  <body>
  
  
  
<FONT Face="Kanit">
    <?php
$query_product = "SELECT * FROM tbl_product as p
INNER JOIN tbl_type as t
ON p.type_id = t.type_id
ORDER BY p.p_id ASC"; //การ join จากตาราง
$result_pro =mysqli_query($con, $query_product) or die ("Error in query: $query_product " . mysqli_error());
//echo($query_product);
//exit()
//วนลูปจากตาราง product ;;

//หน้า index.php สินค้าทั้งหมด
?>
<div class="container">
            <div class="row">
                <?php foreach ($result_pro as $row_pro) { ?>
                <div class="card-img-top md-4" style="width: 30%; margin-top: 10px;">
                    <img class="card-img-top" src="file_product/<?php echo $row_pro['p_img'];?>" alt="...">
                    <div class="thumbnail">
                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                        <center>
                            <h5 class="card-title"><?php echo $row_pro['p_name'];?> </h5>
                        </center>
                        <p class="card-text"></p>
                        <center>ประเภท : <?php echo $row_pro['type_name'];?>
                            <center>คลังสินค้าที่เหลือ/จำนวน : <?php echo $row_pro['p_qty']. "(ชิ้น)";?><br>
                                <a href="product_detail.php?id=<?php echo $row_pro['p_id'] ?>"class="btn btn-outline-success"><i class="bi bi-cart-plus-fill"></i> รายละเอียด</a>
                            </center>
                    </div>
                </div>&nbsp;&nbsp;

                <?php } ?>
            </div>
            
          <br>  
          <footer class="py-5 bg-success">
            <div class="container"><p class="m-0 text-center text-white">Green Farm</p></div>
        </footer>
</Font>
