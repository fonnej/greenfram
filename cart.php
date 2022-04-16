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
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="p_img/icon/logopng.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
            integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>ตะกร้าสินค้า</title>
</head>
<body>
    
</body>
</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<FONT Face="Kanit">
    <div class="container"> <br>
        <?php include('navbar2.php');?>

        <body style="background-color:#FFFFFF;">
    </div>
    <!-------------------รับค่า ปุ่ม สั่งซื้อ แก้ไข ยกเลิกสินค้า ----------------------->
    <?php
	session_start();
error_reporting( error_reporting() & ~E_NOTICE );
	$p_id = $_GET['p_id'];
	$act = $_GET['act'];
	if($act=='add' && !empty($p_id))
	{
		if(isset($_SESSION['cart'][$p_id]))
		{
			$_SESSION['cart'][$p_id]++;
		}
		else
		{
			$_SESSION['cart'][$p_id]=1;
		}
	}
	if($act=='remove' && !empty($p_id))  //ยกเลิกการสั่งซื้อ
	{
		unset($_SESSION['cart'][$p_id]);
	}
	if($act=='update') //แก้ไขรายการสินค้า
	{
		$amount_array = $_POST['amount'];
		foreach($amount_array as $p_id=>$amount)
		{
			$_SESSION['cart'][$p_id]=$amount;
		}
	}
	//cancel cart ยกเลิกสินค้า
	if($act=='cancel'){
		unset($_SESSION['cart']);
	}
?>
    <!-------------------หน้าตระกร้าสินค้า----------------------->
    <title>ตะกร้าสินค้า</title>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <h1 align='center'>ตะกร้าสินค้า<td><br></h1>
                <a href="index.php" class="btn btn-outline-success"><i class="bi bi-box-arrow-in-left"></i>
 กลับหน้ารายการสินค้า</a></td>
                <form id="frmcart" name="frmcart" method="post" action="?act=update">
                    <table class="table table-striped table-hover">
                        <br>
                        <tr>
                            <th width="5%" bgcolor="#9af0bf">ลำดับที่</th>
                            <th width="10%" bgcolor="#9af0bf">รูปสินค้า</th>
                            <th width="10%" bgcolor="#9af0bf">รหัสสินค้า</th>
                            <th width="20%" bgcolor="#9af0bf">ชื่อสินค้า</th>
                            <th width="10%" bgcolor="#9af0bf">คลังสินค้าที่เหลือ/จำนวน(ชิ้น)</th>
                            <th width="10%" align="center" bgcolor="#9af0bf">ราคา</th>
                            <th width="10%" align="center" bgcolor="#9af0bf">จำนวน</th>
                            <th width="5%" align="center" bgcolor="#9af0bf">รวม(บาท)</th>
                            <th width="5%" align="center" bgcolor="#9af0bf"><i class="bi bi-trash"></i> ลบ</th>
                        </tr>
                        <?php
						$total=0;
						if(!empty($_SESSION['cart']))
						{
							include("connect.php");
							foreach($_SESSION['cart'] as $p_id=>$qty)
							{
								$sql = "select * from tbl_product where p_id=$p_id";
								$query = mysqli_query($conn, $sql);
								$row = mysqli_fetch_array($query);
								$sum = $row['p_price'] * $qty;
								$total += $sum; //ราคารวม
								$p_qty = $row['p_qty']; //จำนวนสินค้าในสต๊อก
								echo "<tr>";
								echo "<td>" . @$i +=1 . "</td>";
								echo "<td>"."<img src='file_product/".$row['p_img']."' width='100'>"."</td>";
								echo "<td>" . $row["p_id"] . "</td>";
								echo "<td>" . $row["p_name"] ."</td>";
								echo "<td>" .$row["p_qty"]. "</td>";
								echo "<td align=''>".number_format($row["p_price"],2)."</td>";
								echo "<td align='right'>";
								echo "<input type='number' name='amount[$p_id]' value='$qty' class='form-control' min='1' max='$p_qty' /></td>";
								echo "<td align=''>".number_format($sum,2)."</td>";
																		//remove product
								echo "<td align='center'><a href='cart.php?p_id=$p_id&act=remove'class='btn btn-danger btn-sm'> ลบ</a></td>";
								echo "</tr>";
												}
								echo "<tr>";
								echo "<td colspan='7' bgcolor='#FFFFFF' align='center'>ราคารวม</td>";
								echo "<td align='right' bgcolor='#FFFFFF'>"."".number_format($total,2).""."</td>";
								echo "<td align='left' bgcolor='#FFFFFF'></td>";
								echo "</tr>";
											}
								if($total>0){
							?>
                        <!-------------------หน้าตระกร้าสินค้า จบ----------------------->
                        <!-------------------ปุ่ม สั่งซื้อ แก้ไข ยกเลิกสินค้า ส่งค่าไป confirm.php ------------------------------>
						
                        <tr>
                            <td colspan="9" align="right"><br>
							
							<h5><i class="bi bi-cart-check-fill"></i>*เลือกจำนวนชิ้นแล้วกดอัพเดตราคา</h5><br>
							
                                <input type="button" class="btn btn-outline-dark" name="btncancel" value="ยกเลิกการสั่งซื้อ"
                                    onclick="window.location='cart.php?act=cancel';" />
                                <input type="submit" class="btn btn-outline-warning" name="button" id="button" value="อัพเดตราคา" />
                                <input type="button" class="btn btn-outline-success" name="Submit2" value="สั่งซื้อ"
                                    onclick="window.location='confirm.php';" />
                            </td>
                        </tr>
                        <?php }else{
								echo "<font color='red'><h4 align='center'>ไม่มีสินค้าในตระกร้า กรุณาเลือกสินค้าใหม่อีกครั้ง!!</h4></font>";
							} ?>
                    </table>
                </form>
            </div>
        </div>
    </div>
	<img class="d-block w-100" src="p_img/photo_all/footer2.png" alt="First slide">
</Font>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>