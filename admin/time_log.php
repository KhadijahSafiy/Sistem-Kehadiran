<?php
include 'db_connect.php';
	extract($_POST);
	$data= array();
	$qry = $conn->query("SELECT * from kakitangan where kad_pengenalan ='$kad_pengenalan' AND kata_laluan = '$kata_laluan' ");
	if($qry->num_rows > 0){
		$emp = $qry->fetch_array();
		$save_log= $conn->query("INSERT INTO kehadiran (id_kakitangan,nama,kata_laluan,no_tel,kad_pengenalan,jabatan,jawatan,log_type) values('".$emp['id_kakitangan']."','".$emp['nama']."','".$emp['kata_laluan']."','".$emp['no_tel']."','".$emp['kad_pengenalan']."','".$emp['jabatan']."','".$emp['jawatan']."','$type')");
		$employee = $emp['nama'];
		if($type == 1){
			$log = ' pada sesi ini';
		}
		if($save_log){
				$data['status'] = 1;
				$data['msg'] = $employee .', log masuk anda '.$log.' telah direkodkan. <br/>' ;
			}
	}else{
		$data['status'] = 2;
		$data['msg'] = 'Nombor Kad Pengenalan Tidak Dapat Dikenali';
	}
	echo json_encode($data);
	$conn->close();
