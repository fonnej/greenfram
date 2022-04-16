<?php 
session_start();
include 'condb.php';
if(!$_SESSION['id_admin']==true){
header('Refresh:0; url=login.php');	
 exit;
}
  ?>
<FONT Face="Mitr">
    <?php require_once('backend/condb.php');

	$query_type = "SELECT * FROM tbl_type ORDER BY type_id ASC";
	$result_type =mysqli_query($con, $query_type) or die ("Error in query: $query_type " . mysqli_error());
		//echo($query_type);
		//exit()

?>

        <div class="container">
         <div class="row gy-3">
         <div class="col-md-4 ">
        <?php
		foreach ($result_type as $row )  { ?>

        <a href="index.php?act=showbytype&type_id=<?php echo $row['type_id'];?>"
            class="list-group-item list-group-item-action list-group-item-light">
            <?php echo $row["type_name"]; ?></a>

        <?php } ?>
    </div>
    </div>
    </div>
</Font>