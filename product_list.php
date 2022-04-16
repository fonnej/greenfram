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
  <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

  </head>
  <body>
    
  </body>
  </html>
<?php
//1. เชื่อมต่อ database:
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้านี้
//2. query ข้อมูลจากตาราง 
$query = "
SELECT * FROM tbl_product as p 
INNER JOIN tbl_type  as t ON p.type_id=t.type_id 
ORDER BY p.p_id ASC" or die("Error:" . mysqli_error());
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:

echo  ' <div class="table-responsive">
<table class="table table-hover" id="table">
  <thead>
    <tr>';
  //หัวข้อตาราง
    echo "<tr>
    <thead>
    <th>ลำดับที่</th>
      <th>รหัสสินค้า</th>
      <th>รูปภาพ</th>
      <th>ชื่อสินค้า</th>
      <th>ประเภทสินค้า</th>
      <th>แก้ไข</th>
      <th>ลบ</th>
      </thead>
      <tbody>
    </tr>";
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . @$i +=1 . "</td>"; 
    echo "<td>" .$row["p_id"]."</td> ";
    echo "<td align=>"."<img src='file_product/".$row['p_img']."' width='100'>"."</td>";
    echo "<td>" .$row["p_name"] .  "</td> ";
    echo "<td>" .$row["type_name"] ."</td> ";
    
    //แก้ไขข้อมูล
    echo "<td><a href='product.php?act=edit&ID=$row[0]' class='btn btn-secondary btn-xs'> แก้ไข</a></td> ";
    
    //ลบข้อมูล
    echo "<td><a href='product_del_db.php?ID=$row[0]' onclick=\"return confirm('คุณต้องการลบสินค้าใช่หรือไม่? ')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
  echo "</tr>";
  }
echo "</table></div>";
//5. close connection
mysqli_close($con);
?>