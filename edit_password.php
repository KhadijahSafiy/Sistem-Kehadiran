<!DOCTYPE html>
<html lang = "eng">
	<head>
		<title>Sistem Pendaftaran Kehadiran Kakitangan Ke Mesyuarat Bulanan</title>
		<?php include('header.php') ?>
	</head>
	<body>
		<div id="main" class="bg-info">
		<div class = "container-fluid admin2">
			
			<div class="attendance_log_field">

				<div id="company-logo-field" class="mb-4 ">
					<!--<h4>Sunting Kata Laluan Anda</h4>-->
					<!-- <img src="company_logo.jpg" alt=""> -->
				</div>
				<div class="col-md-4 offset-md-4">
					<div class="card">
						<div class="card-title">
							

						</div>
						<div class="card-body">
							<div class="text-center">
								<h4>Sunting Kata Laluan Anda <span id="now"></span></h4>
							</div>
							<div class="col-md-12">
								<div class="text-center mb-4" id="log_display"></div>
									<form action="" id="att-log-frm" >
										<div class="form-group">
											<label for="kad_pengenalan" class="control-label">ID Kakitangan</label>
											<input type="text" id="id_pekerja" name="id_pekerja" class="form-control col-sm-12">
										</div>
										<div class="form-group">
											<label for="kata_laluan" class="control-label">Kata Laluan Terkini</label>
											<input type="password" id="kata_laluan" name="kata_laluan" class="form-control col-sm-12">
										</div>
										<div class="form-group">
											<label for="baru" class="control-label">Kata Laluan Baru</label>
											<input type="password" id="baru" name="baru" class="form-control col-sm-12">
										</div>
										<center>
											<button type="button" class='btn btn-sm btn-primary edit_now col-sm-12' data-id="1">Sunting</button>&nbsp;
										
										</center>
										<div class="loading" style="display: none"><center>Sila Tunggu Sebentar...</center></div>
										
									</form>
							</div>
							<div>
								<center><a href="index.php">Balik Ke Muka Asal</a></center>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</body>
	<script>
		$(document).ready(function(){
			
			$('.edit_now').each(function(){
				$(this).click(function(){
					var _this = $(this)
					var id_pekerja = $('[name="id_pekerja"]').val()
					var b = $('[name="kata_laluan"]').val()
					var c = $('[name="baru"]').val()
					if(id_pekerja == ''){
						alert("Sila Masukkan ID Kakitangan Anda");
					}else if(b == ''){
						alert("Sila Masukkan Kata Laluan Anda Yang Terkini");
					}else if(c == ''){
						alert("Sila Masukkan Kata Laluan Anda Yang Baru");
					}else{
						$('.edit_now').hide()		
						$('.loading').show()
						$.ajax({
							url:'save_password.php',
							method:'POST',
							data:{type:_this.attr('data-id'),id_pekerja:$('[name="id_pekerja"]').val(),kata_laluan:$('[name="kata_laluan"]').val(),baru:$('[name="baru"]').val()},
							error:err=>console.log(err),
							success:function(resp){
								if(typeof resp != undefined){
									resp = JSON.parse(resp)

									if(resp.status == 1){
										$('[name="kad_pengenalan"]').val('')
										$('[name="kata_laluan"]').val('')
										$('[name="baru"]').val('')
										$('#log_display').html(resp.msg)
										$('.edit_now').show()		
										$('.loading').hide()
										setTimeout(function(){
										$('#log_display').html('')
										},5000)
									}else{
										alert(resp.msg)
										$('.edit_now').show()		
										$('.loading').hide()
									}
								}
							}
						})		
					}
				})
			})
		})
	</script>
</html>