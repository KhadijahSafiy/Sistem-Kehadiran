<!DOCTYPE html>
<?php
	require_once 'auth.php';
?>
<html lang = "eng">
	<head>
		<title>Senarai Kehadiran | Sistem Pendaftaran Kehadiran Kakitangan Ke Mesyuarat Bulanan</title>
		<?php include('header.php') ?>
	</head>
	<body>
		<?php include('nav_bar.php') ?>
		<div class = "container-fluid admin" >
			<div class = "alert alert-primary">Senarai Kehadiran</div>
			<div class = "modal fade" id = "delete" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				
			</div>
			<div class = "well col-lg-12">
				<table id="table" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>ID Kakitangan</th>
							<th>Nama</th>
							<th>Date</th>
							<th>Time</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$attendance_qry = $conn->query("SELECT a.*, k.nama FROM `kehadiran` a inner join kakitangan k on a.id_kakitangan = k.id_kakitangan ") or die(mysqli_error($conn));
						while($row = $attendance_qry->fetch_array()){
							
					?>	
						<tr>
							<td><?php echo $row['id_kakitangan']?></td>
							<td><?php echo htmlentities($row['nama'])?></td>
							<td><?php echo date("F d, Y", strtotime($row['datetime_log']))?></td>
							<td><?php echo date("h:i a", strtotime($row['datetime_log']))?></td>
							<td><center><button data-id = "<?php echo $row['id']?>" class = "btn btn-sm btn-outline-danger remove_log" type="button"><i class = "fa fa-trash"></i></button></center></td>
						</tr>
					<?php
						}
					?>	
					</tbody>
				</table>
			<br />
			<br />	
			<br />	
			</div>
		</div>
		
	</body>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('#table').DataTable();
		});
	</script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('.remove_log').click(function(){
				var id=$(this).attr('data-id');
				var _conf = confirm("Are you sure to delete this data ?");
				if(_conf == true){
					$.ajax({
						url:'delete_log.php?id='+id,
						error:err=>console.log(err),
						success:function(resp){
							if(typeof resp != undefined){
								resp = JSON.parse(resp)
								if(resp.status == 1){
									alert(resp.msg);
									location.reload()
								}
							}
						}
					})
				}
			});
		});
	</script>
</html>