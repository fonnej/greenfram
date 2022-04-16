
<FONT Face="Kanit">
    <!doctype html>
    <html lang="en">
<?php session_start(); ?>
    <head>
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

        <!-- navbar-------------------->
        
        <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-light">
        <div class="container ">
            <a class="navbar-brand" href="show_index.php"><img src="p_img/photo_all/logopng.png" height="60">
                กรีนฟาร์ม</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php"><i class="bi bi-house-door"></i> หน้าแรก</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <!-- dropdownแยกประเภทสินค้า---> <i class="bi bi-basket2"></i> ผลิตภัณฑ์
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="index.php?act=showbytype&type_id=1">ผักสลัดปลอดสารพิษ</a>
                            <a class="dropdown-item"
                                href="index.php?act=showbytype&type_id=2">ไข่ไก่และไข่เป็ดจากฟาร์ม</a>
                            <a class="dropdown-item" href="index.php?act=showbytype&type_id=3">ผลิตภัณฑ์จากไส้เดือน</a>
                            <a class="dropdown-item"
                                href="index.php?act=showbytype&type_id=4">ผลิตภัณฑ์จากเศษไม้ในฟาร์ม</a>
                            <a class="dropdown-item"
                                href="index.php?act=showbytype&type_id=5">ผลิตภัณฑ์จากดินและแกลบ</a>
                            <a class="dropdown-item" href="index.php?act=showbytype&type_id=6">ผลิตภัณฑ์จากมะพร้าว</a>
                            <a class="dropdown-item" href="index.php?act=showbytype&type_id=7">ผลิตภัณฑ์น้ำผึ้ง</a>
                            <a class="dropdown-item" href="index.php?act=showbytype&type_id=8">ผลิตภัณฑ์นม</a>
                            <a class="dropdown-item" href="index.php?act=showbytype&type_id=9">ผลิตภัณฑ์โยกิร์ต</a>
                            <a class="dropdown-item" href="index.php?act=showbytype&type_id=10">ผลิตภัณฑ์นม สำหรับ
                                Barista</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <!-- dropdownแยกประเภทสินค้า---> <i class="bi bi-menu-app"></i> เกี่ยวกับเรา
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="about.php">เกี่ยวกับเรา</a>
                            <a class="dropdown-item" href="follow_up_vegetables.php">การติดตามผักภายในฟาร์ม</a>
                            <a class="dropdown-item"href="animal_farm.php">การจำหน่ายสัตว์เลี้ยงในฟาร์ม</a>
                            
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact_.php"><i class="bi bi-bell"></i> ติดต่อเรา</a>
                    </li>
                    </li>
                </ul>

                <!--end navbar-->
     
                        <a href="cart.php" class="btn btn-outline-success" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill"></span>
</a>
                    &nbsp;&nbsp;&nbsp;

                <div class="btn-group">
                    <button type="button" class="btn btn-outline-dark "><i class="bi bi-person-check"></i> <?php echo $_SESSION["fname"]; ?></button>
                    <button type="button" class="btn btn-outline-dark  dropdown-toggle dropdown-toggle-split"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    
                    <div class="dropdown-menu">
                    <a href="pay.php" class="dropdown-item"><i class="bi bi-clipboard"></i> ช่องทางการชำระเงิน</a>
                        
                        <a class="dropdown-item" href="logout.php"><i class="bi bi-box-arrow-right"></i> ออกจากระบบ</a>
                    </div>
                </div>
                </div>
        </nav>
        

</Font>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>