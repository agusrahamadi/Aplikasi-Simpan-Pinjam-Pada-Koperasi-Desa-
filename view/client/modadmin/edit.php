
<?php
	include 'model/admin/m_admin.php';
	$admin 	= new m_admin;
	
	if (isset($_POST['update'])) {
		
		if ($_POST['update']=="update") {
			$mysqli= mysqli_connect("localhost","root","","db_koperasi");
				$id_anggota =  $_GET["id_anggota"];
				$nama = $_POST['nama'];
				$password = md5($_POST['password']);
				$qupdate = " UPDATE anggota SET nama = '$nama',
						password = '$password'
				WHERE
						id_anggota = '$id_anggota'
					";
        $rupdate = mysqli_query($mysqli,$qupdate);
			
			
			?>
		
				<script>location="?mod=admin&id_anggota=<?php echo $id_anggota ?>"</script>
		
			<?php
		
		}
	
	}else{
		
		$id_anggota =  $_GET["id_anggota"];
		$a = mysql_query("SELECT * FROM anggota WHERE id_anggota = '$id_anggota' ");	
		$row = mysql_fetch_array($a);
		
		?>
						<div class="page-header">
							<h1>
								Beranda
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Admin
								</small>
							</h1>
						</div><!-- /.page-header -->

		<form method="post" action="?mod=admin&aksi=edit&id_anggota=<?php echo $row['id_anggota'] ?>">
			<table class="table table-striped table-bordered table-hover">
				<tr>
					<td>Id_anggota</td>
					<td>
						<input type="text" required disabled value="<?php echo $row['id_anggota'] ?>" class="col-md-12">
						<input type="hidden" name="id_anggota" required value="<?php echo $row['id_anggota'] ?>">
					</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" placeholder="Nama Admin" required value="<?php echo $row['nama'] ?>" class="col-md-12"></td>
				</tr>
				<tr>
					<td>Kata Sandi</td>
					<td><input type="text" name="password" placeholder="Kata Sandi" required value="<?php echo $row['password'] ?>" class="col-md-12"></td>
				</tr>
				
				
				<tr>
					<td colspan="2">
						<input type="hidden" name="update" value="update">
						<input type="submit" name="Simpan" value="Simpan" class="btn btn-primary"> 
						<a href="?mod=admin&id_anggota=<?php echo $row['id_anggota'] ?>" title="Batal" class="btn btn-danger">Batal</a>
					</td>
				</tr>
			</table>
		</form>
		<?php
	}
	
?>