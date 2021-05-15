<?php
	require_once 'db_connect.php';
	$delete = $conn->query("DELETE FROM `admin` WHERE `id` = '".$_GET['id']."'") or die(mysqli_error($conn));
	if($delete){
		echo json_encode(array("status"=>1,'msg'=>"Data successfully deleted."));
	}
	$conn->close();