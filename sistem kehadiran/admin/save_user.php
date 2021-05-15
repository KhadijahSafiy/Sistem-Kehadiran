<?php
	require_once 'db_connect.php';
	extract($_POST);
		$data = array();
		if(empty($id)){
			$chk = $conn->query("SELECT * FROM `admin` WHERE `nama` = '$nama'")->num_rows;
			if($chk > 0){
				$data ['status'] = 2;
				$data['msg'] = 'Username already exist';
			}else{
				$save=$conn->query("INSERT INTO admin values ('','$nama','$kata_laluan')");
				if($save){
					$data ['status'] =1;
					$data['msg'] = 'Data successfully saved.';
				}
			}
		}else{
			$chk = $conn->query("SELECT * FROM `admin` WHERE `nama` = '$nama' and id != '$id' ");
			if($chk->num_rows > 0){
				$data ['status'] = 2;
				$data['msg'] = 'Username already exist';
			}else{
				$save=$conn->query("UPDATE admin set nama = '$nama',kata_laluan = '$kata_laluan' where id = $id ");
				if($save){
					$data ['status'] =1;
					$data['msg'] = 'Data successfully updated.';
				}
			}
		}

		echo json_encode($data);
	$conn->close()	;