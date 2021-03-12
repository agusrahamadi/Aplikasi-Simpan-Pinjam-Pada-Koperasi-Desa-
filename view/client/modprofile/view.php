

 

<div class="page-header">
							<h1>
								Beranda
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Pengaturan
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
							<?php
		 $no=1;
         $mysqli= mysqli_connect("localhost","root","","db_koperasi");
    $id_anggota = $_GET["id_anggota"];
        $qupdate = "SELECT * FROM anggota WHERE id_anggota = '$id_anggota' ";
        $rupdate = mysqli_query($mysqli, $qupdate);
        while($dupdate = mysqli_fetch_assoc($rupdate)){
			
       		?>
<form method="post" action="">
			<table class="table table-striped table-bordered table-hover">
				<tr>
					<td>Id Anggota</td>
					<td>
						<input type="text" name="id_anggota" required disabled value="<?php echo $dupdate['id_anggota'] ?>" class="col-md-12">
					</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" placeholder="Nama Admin" required value="<?php echo $dupdate['nama'] ?>" class="col-md-12"></td>
				</tr>
				<tr>
					<td>Kata Sandi</td>
					<td><input type="text" name="password" placeholder="Nama Admin" required value="<?php echo $dupdate['password'] ?>" class="col-md-12"></td>
				</tr>
				
				<tr>
					<td colspan="2">
						<input type="hidden" name="update" value="update">
						<input type="submit" name="Simpan" value="Simpan" class="btn btn-primary"> 
						<a href="?mod=home" title="Batal" class="btn btn-danger">Batal</a>
					</td>
				</tr>
			</table>
		</form>
		<?php $no++; } ?>