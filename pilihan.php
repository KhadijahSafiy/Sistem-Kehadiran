<?php

	session_start();
	if(isset($_SESSION['nama'])){
		echo "<script>location.href='FIRSTPAGE.html'";
	}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>


a:hover, a:active {
  background-color: #d6bfa9;
}

body{
	text-align:center;

}

#mySidenav a {
  position: absolute;
  left: -80px;
  transition: 0.3s;
  padding: 15px;
  width: 100px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
  left: 0;
}

#about {
  top: 20px;
  background-color: #403a39;
}

#blog {
  top: 80px;
  background-color: #2196F3;
}

#projects {
  top: 140px;
  background-color: #f44336;
}

#contact {
  top: 200px;
  background-color: #555
}

.w3-button {width:200px;}

</style>
</head>
<body>

<div style="padding:20px;margin-top:30px;background-color:#9ec7f0;height:90px;">
  <h1>Sistem Pendaftaran Kehadiran Kakitangan Ke Mesyuarat Bulanan</h1>
</div>
<br><br>
<div id="mySidenav" class="sidenav">
  <a href="FIRSTPAGE.html" id="about">Kembali</a>
</div>

<div class="w3-container">

  <p><a href="admin/index.php"><button class="w3-button w3-red w3-xlarge">P.SISTEM</button></a></p>
   <p><a href="index.php"><button class="w3-button w3-purple w3-xlarge">KAKITANGAN</button></a></p>
</div>
</body>
</html>