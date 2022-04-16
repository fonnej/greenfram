<FONT Face="Mitr">
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
  <?php
  session_start();
  $serverName = "localhost";
  $userName = "root";
  $userPassword = "12345678";
  $dbName = "pro";

  $connect_db = mysqli_connect($serverName, $userName, $userPassword, $dbName,);
  date_default_timezone_set("Asia/Bangkok");

  $chk_userid = "select * from tbl_admin where id_admin ='" . $_POST["admin"] . "' ";
  $run_chk_admin_id = mysqli_query($connect_db, $chk_userid);

  $row_data = mysqli_fetch_array($run_chk_admin_id, MYSQLI_ASSOC);
  if ($row_data["pass"] == $_POST["pass"]) {
    $_SESSION["id_admin"] = $_POST["admin"];
    $_SESSION["fname"] = $row_data["fname"];
    $_SESSION["lname"] = $row_data["lname"];
    $_SESSION["status"] = $row_data["status"];


    echo "<script>
  Swal.fire(
    'ยินดีต้อนรับสู่ระบบหลังบ้าน!',
    'You clicked the button!',
    'success')
    </script>";
    header('Refresh:3; url=animals/management.php');
  } else {
    echo "<script>
  Swal.fire({
    position: 'top',
    icon: 'error',
    title: 'คุณไม่สามารถเข้าสู่ระบบได้',
    showConfirmButton: false,
    timer: 1000
  })
  
  </script>";

    header('Refresh:2; url=login_admin.php');
  }




  mysqli_close($connect_db);
  ?>
</FONT>