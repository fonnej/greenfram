
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<style>
body{
font-family: kanit;
</style>
</head>


</body>

</html><?php

 //ถ้ามีค่าส่งมาจากฟอร์ม
if(isset($_POST['s_name']) && isset($_POST['s_email']) && isset($_POST['s_phone']) && isset($_POST['s_pick_up_date']) && isset($_POST['s_type']) && isset($_POST['s_year'])&& isset($_POST['s_mont']) && isset($_POST['s_quantity']) && isset($_POST['s_address']) && isset($_POST['id'])) {
    //ไฟล์เชื่อมต่อฐานข้อมูล
require_once 'user_condb.php';
//ประกาศตัวแปรรับค่าจากฟอร์ม
// print_r($_POST);
$id = $_POST['id'];
$s_name = $_POST['s_name'];
$s_email =  $_POST['s_email'];
$s_phone = $_POST['s_phone'];
$s_pick_up_date = $_POST['s_pick_up_date'];
$s_type = $_POST['s_type'];
$s_year = $_POST['s_year'];
$s_mont = $_POST['s_mont'];
$s_quantity = $_POST['s_quantity'];
$s_address = $_POST['s_address'];



//sql update
// $stmt = $conn->prepare("UPDATE user_member SET user=:user, pass=:pass title=:title fname=:fname lname=:lname gender=:gender email=:email social_account=:social_account phone=:phone address=:address WHERE id=:id");


$sql = " UPDATE buy_animal SET  
			id='$id',
			s_name='$s_name',
			s_email='$s_email',
			s_phone='$s_phone', 
			s_pick_up_date='$s_pick_up_date',
			s_type='$s_type',
			s_year='$s_year',
            s_mont='$s_mont',
            s_quantity='$s_quantity',
            s_address='$s_address'
			WHERE id='$id'";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
mysqli_close($con); //ปิดการเชื่อมต่อ database 

if($result){
	echo "<script>
	Swal.fire(
	  'อัพเดตข้อมูลสั่งซื้อสัตว์เลี้ยงสำเร็จ!',
	  'You clicked the button!',
	  'success')
	  </script>";
	header('Refresh:2; url=animal_farm_list.php');
}
else{
	echo "<script>
	Swal.fire({
	  position: 'top',
	  icon: 'error',
	  title: 'อัพเดตข้อมูลสั่งซื้อสัตว์เลี้ยงไม่สำเร็จ',
	  showConfirmButton: false,
	  timer: 1000
	})
	
	</script>";
}}
?>