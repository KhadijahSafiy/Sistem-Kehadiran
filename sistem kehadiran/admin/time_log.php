<?php
include 'db_connect.php';
	extract($_POST);
	$data= array();
	$qry = $conn->query("SELECT a.*, k.nama FROM `kehadiran` a inner join kakitangan k on a.id_kakitangan = k.id_kakitangan where a.id_kakitangan = $id_kakitangan AND k.kata_laluan = $k.kata_laluan");
	if($qry->num_rows > 0){
		$emp = $qry->fetch_array();
		$save_log= $conn->query("INSERT INTO kehadiran (id,id_kakitangan,nama,datetime_log,date_updated) values('','".$emp['id_kakitangan']."','".$emp['nama']."'),'".$emp['datetime_log']."','".$emp['date_updated']."'");
		$employee = $emp['nama'];
		if($type == 1){
			$log = ' masuk anda pada sesi ini';
		}
		if($save_log){
				$data['status'] = 1;
				$data['msg'] = $employee .', log '.$log.' berjaya direkodkan. <br/>' ;
			}
	}else{
		$data['status'] = 2;
		$data['msg'] = 'Unknown Employee Number';
	}
	echo json_encode($data);
	$conn->close();
