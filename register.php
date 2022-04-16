<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
body{
font-family: Prompt;
</style>
</head>
<body>
	 
</body>
</html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
		
			$serverName = "localhost";
			$userName = "root";
			$userPassword ="12345678";
			$dbName ="pro";
			$connect_db =mysqli_connect($serverName,$userName,$userPassword,$dbName,);
			date_default_timezone_set("Asia/Bangkok");
			$apply_date =date("F j, Y, g:i a");
			
		$sql_command= "insert into user_member (user_id,pass,title,fname,lname,gender,email,social_account,address,phone,apply_date) 
		values ('".$_POST["user"]."','".$_POST["pass"]."','".$_POST["title"]."','".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["gender"]."','".$_POST["email"]."','".$_POST["Social_account"]."','".$_POST["address"]."','".$_POST["phone"]."','".$apply_date."')";
		$chk_userid="select * from user_member where user_id ='".$_POST["user"]." '";
		$run_chk_userid = mysqli_query($connect_db,$chk_userid);
		if (mysqli_num_rows($run_chk_userid)>0) 
		
		{
		echo "<script> 
		Swal.fire({
			position: 'top',
			icon: 'error',
			title: 'สมัครสมาชิกมีผู้ใช้งานแล้ว',
			showConfirmButton: false,
			timer: 3000
		  })
		</script>";
		header('Refresh:3; url=register.html');
		
		}else{
		$run_queary = mysqli_query($connect_db,$sql_command);
		if($run_queary == true){
		echo "<script>
		Swal.fire(
			'สมัครสมาชิกสำเร็จ!',
			'You clicked the button!',
			'success')
			</script>";
		  header('Refresh:2; url=login.php');
		}
		else{
		echo "<script> 
		Swal.fire({
			position: 'top',
			icon: 'error',
			title: 'สมัครสมาชิกไม่สำเร็จ',
			showConfirmButton: false,
			timer: 1000
		  })
		</script>";
		header('Refresh:2; url=register.html');
		}
		}
		mysqli_close($connect_db);
		?>
		</script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
	</body>
</html>