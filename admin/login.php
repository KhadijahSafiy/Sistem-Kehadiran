<?php
	require_once 'db_connect.php';
	extract($_POST);
	$qry = $conn->query("SELECT * FROM admin WHERE nama = '$nama' and  kata_laluan = '$kata_laluan'") or die(msqli_error());
	$login = $qry->fetch_array();

	if($qry->num_rows > 0){
		echo true;
		session_start();
		foreach($login as $k => $v){
			if(!is_numeric($k) && $k !='kata_laluan')
			$_SESSION['login_'.$k] = $v;
		}
	}

	$conn->close();