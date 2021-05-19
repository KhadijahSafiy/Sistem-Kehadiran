<?php
	include 'db_connect.php';
		extract($_POST);
		if(empty($id)){
				$i= 1;
				while($i == 1){
				//$e_num=date('Y') .'-'. mt_rand(1,9999);
				$idkakitangan = $_POST["id_kakitangan"];
					$chk  = $conn->query("SELECT * FROM kakitangan where id_kakitangan = '$idkakitangan' ")->num_rows;
					if($chk <= 0){
						$i = 0;
					}
				}
				// echo "INSERT INTO `employee` VALUES('', '$e_num','$firstname', '$middlename', '$lastname', '$department', '$position')";
				// exit;
				$save=$conn->query("INSERT INTO `kakitangan` VALUES('', '$idkakitangan','$nama', '$kata_laluan', '$no_tel', '$kad_pengenalan', '$jabatan', '$jawatan')") or die(mysqli_error($conn));
				if($save){
						echo json_encode(array('status'=>1,'msg'=>"Data Berjaya Disimpan"));
				}		
		}else{
			$save=$conn->query("UPDATE `kakitangan` set id_kakitangan='$id_kakitangan',nama='$nama', kata_laluan='$kata_laluan', no_tel='$no_tel', kad_pengenalan= '$kad_pengenalan', jabatan='$jabatan',jawatan='$jawatan' where id = $id ") or die(mysqli_error());
				if($save){
						echo json_encode(array('status'=>1,'msg'=>"Data Berjaya Disunting"));
				}
		}	

$conn->close();