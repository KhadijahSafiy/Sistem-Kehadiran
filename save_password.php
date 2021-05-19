<?php
include 'db_connect.php';
	extract($_POST);
	$data= array();
	$kata_laluan = $_POST['kata_laluan'];
	$qry = $conn->query("SELECT * from kakitangan where id_kakitangan ='$id_kakitangan' AND kata_laluan = '$kata_laluan' ");
	if($qry->num_rows > 0){
		$emp = $qry->fetch_array();
		$save_log= $conn->query("INSERT INTO kehadiran (id_kakitangan,nama,kata_laluan,no_tel,kad_pengenalan,jabatan,jawatan,log_type) values('".$emp['id_kakitangan']."','".$emp['nama']."','".$emp['kata_laluan']."','".$emp['no_tel']."','".$emp['kad_pengenalan']."','".$emp['jabatan']."','".$emp['jawatan']."','$type')");
		$employee = $emp['nama'];
		if($save_log){
				$data['status'] = 1;
				$data['msg'] = $employee .', Kata Laluan Anda Berjaya Disunting. <br/>' ;
			}
	}else{
		$data['status'] = 2;
		$data['msg'] = 'Nombor ID Kakitangan Tidak Dapat Dikenali';
	}
	echo json_encode($data);
	$conn->close();
