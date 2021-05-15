<!DOCTYPE html>
<?php
	require_once 'auth.php';
?>
<html lang="eng">
	<head>
		<title>Senarai Kakitangan | Sistem Pendaftaran Kehadiran Kakitangan Ke Mesyuarat Bulanan</title>
		<?php include('header.php') ?>
	</head>
	<body>
		<?php include('nav_bar.php') ?>
		
		<div class="container-fluid admin" >
			<div class="alert alert-primary">Senarai Kakitangan</div>
			<div class="modal fade" id="edit_student" tabindex="-1" role="dialog" aria-labelledby="myModallabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content panel-warning">
						<div class="modal-header panel-heading">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModallabel">Edit Student</h4>
						</div>
						<div id="edit_query"></div>
					</div>
				</div>
			</div>
			<div class="well col-lg-12">
				<button class="btn btn-success" type="button" id="new_emp_btn"><span class="fa fa-plus"></span> Add new </button>
				<br />
				<br />
				<table id="table" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>ID Kakitangan</th>
							<th>Nama</th>
							<th>Nombor Telefon</th>
							<th>Kad Pengenalan</th>
							<th>Jabatan</th>
							<th>Jawatan</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$employee_qry=$conn->query("SELECT * FROM `kakitangan`") or die(mysqli_error($conn));
							while($row=$employee_qry->fetch_array()){
						?>
						<tr>
							<td><?php echo $row['id_kakitangan']?></td>
							<td><?php echo $row['nama']?></td>
							<td><?php echo $row['no_tel']?></td>
							<td><?php echo $row['kad_pengenalan']?></td>
							<td><?php echo $row['jabatan']?></td>
							<td><?php echo $row['jawatan']?></td>
							<td>
								<center>
								 <button class="btn btn-sm btn-outline-primary edit_employee" data-id="<?php echo $row['id']?>" type="button"><i class="fa fa-edit"></i></button>
								<button class="btn btn-sm btn-outline-danger remove_employee" data-id="<?php echo $row['id']?>" type="button"><i class="fa fa-trash"></i></button>
								</center>
							</td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>
			<br />
			<br />	
			<br />	
		</div>
		
		<div class="modal fade" id="new_employee" tabindex="-1" role="dialog" >
				<div class="modal-dialog modal-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							
							<h4 class="modal-title" id="myModallabel">Add new Employee</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<form id='employee_frm'>
							<div class ="modal-body">
								<div class="form-group">
									<label>ID Kakitangan</label>
									<input type="hidden" name="id" />
									<input type="text" name="id_kakitangan" required="required" class="form-control" />
								</div>
								<div class="form-group">
									<label>Nama</label>
									<input type="text" name="nama" required="required" class="form-control" />
								</div>
								<div class="form-group">
									<label>Kata Laluan</label>
									<input type="text" name="kata_laluan" required="required" class="form-control" />
								</div>
								<div class="form-group">
									<label>Nombor Telefon</label>
									<input type="text" name ="no_tel" required="required" class="form-control" />
								</div>
								<div class="form-group">
									<label>Kad Pengenalan:</label>
									<input type="text" name="kad_pengenalan" required="required" class="form-control" />
								</div>
								<div class="form-group">
									<label>Jabatan</label>
									<select name="jabatan" id="jabatan">
										<option value="JTMK">JTMK</option>
										<option value="JP">JP</option>
										<option value="JKE">JKE</option>
										<option value="JKM">JKM</option>
										<option value="JMSK">JMSK</option>
									</select>
								</div>
								<div class="form-group">
									<label>Jawatan</label>
									<input type="text" name="jawatan" required="required" class="form-control" />
								</div>
							</div>
							<div class="modal-footer">
								<button  class="btn btn-primary" name="save"><span class="glyphicon glyphicon-save"></span> Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
	</body>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#table').DataTable();
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){

			$('#employee_frm').submit(function(e){
				e.preventDefault()
				$('#employee_frm [name="submit"]').attr('disabled',true)
				$('#employee_frm [name="submit"]').html('Saving')
				$.ajax({
					url:'save_employee.php',
					method:"POST",
					data:$(this).serialize(),
					error:err=>console.log(),
					success:function(resp){
						if(typeof resp !=undefined){
							resp = JSON.parse(resp)
							if(resp.status == 1){
								alert(resp.msg);
								location.reload();
							}
						}
					}
				})
			})

			$('.remove_employee').click(function(){
				var id=$(this).attr('data-id');
				var _conf = confirm("Are you sure to delete this data ?");
				if(_conf == true){
					$.ajax({
						url:'delete_employee.php?id='+id,
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
			$('.edit_employee').click(function(){
				var $id=$(this).attr('data-id');
				$.ajax({
					url:'get_employee.php',
					method:"POST",
					data:{id:$id},
					error:err=>console.log(),
					success:function(resp){
						if(typeof resp !=undefined){
							resp = JSON.parse(resp)
							$('[name="id"]').val(resp.id)
							$('[name="id_kakitangan"]').val(resp.id_kakitangan)
							$('[name="nama"]').val(resp.nama)
							$('[name="kata_laluan"]').val(resp.kata_laluan)
							$('[name="no_tel"]').val(resp.no_tel)
							$('[name="kad_pengenalan"]').val(resp.kad_pengenalan)
							$('[name="jabatan"]').val(resp.jabatan)
							$('[name="jawatan"]').val(resp.jawatan)
							$('#new_employee .modal-title').html('Edit Employee')
							$('#new_employee').modal('show')
						}
					}
				})
				
			});
			$('#new_emp_btn').click(function(){
				$('[name="id"]').val(resp.id)
				$('[name="id_kakitangan"]').val(resp.id_kakitangan)
				$('[name="nama"]').val(resp.nama)
				$('[name="kata_laluan"]').val(resp.kata_laluan)
				$('[name="no_tel"]').val(resp.no_tel)
				$('[name="kad_pengenalan"]').val(resp.kad_pengenalan)
				$('[name="jabatan"]').val(resp.jabatan)
				$('[name="jawatan"]').val(resp.jawatan)
				$('#new_employee .modal-title').html('Add New Employee')
				$('#new_employee').modal('show')
			})
		});
	</script>
</html>