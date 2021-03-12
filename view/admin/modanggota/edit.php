
<?php
	include 'model/admin/m_anggota.php';
	$anggota 	= new m_anggota;

	if (isset($_POST['update'])) {
		
		if ($_POST['update']=="update") {
		
			$anggota->update($_POST['id_anggota'],strtoupper($_POST['nama']),strtoupper($_POST['alamat']),$_POST['no_hp'],strtoupper($_POST['noktp']),strtoupper($_POST['pekerjaan']),strtoupper($_POST['penghasilan']));

			?>
		
				<script>location="?mod=anggota&aksi=view"</script>
		
			<?php
		
		}
	
	}else{
		
		$query	= $anggota->edit($_GET['id']);
		$row	= mysql_fetch_array($query);
		
		?>
						<div class="page-header">
							<h1>
								Beranda
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Anggota
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->		
		<form method="post" action="?mod=anggota&aksi=edit">
			<table class="table table-striped table-bordered table-hover">
				<tr>
					<td>ID anggota</td>
					<td>
						<input type="text" placeholder="ID anggota" required disabled value="<?php echo $row['id_anggota'] ?>" class="col-sm-12">
						<input type="hidden" name="id_anggota" required value="<?php echo $row['id_anggota'] ?>">
					</td>
				</tr>
				<tr>
					<td>No Ktp</td>
					<td><input type="text" name="noktp" placeholder="No KTP" required value="<?php echo $row['noktp'] ?>" maxlength="16" class="col-sm-12"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" placeholder="Nama" required value="<?php echo $row['nama'] ?>" maxlength="100" class="col-sm-12"></td>
				</tr>
				<tr>
					<td>No. Telp</td>
					<td><input type="text" name="no_hp" placeholder="No. Telp" required value="<?php echo $row['no_hp'] ?>"   maxlength="12" class="col-sm-12"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><textarea name="alamat" placeholder="Alamat" required class="col-sm-12"><?php echo $row['alamat']; ?></textarea></td>
				</tr>
				<tr>
					<td>Pekerjaan</td>
					<td><input type="text" name="pekerjaan" placeholder="Pekerjaan" required value="<?php echo $row['pekerjaan'] ?>" maxlength="50" class="col-sm-12"></td>
				</tr>
				<tr>
					<td>Penghasilan</td>
					<td><input type="text" name="penghasilan" placeholder="Penghasilan" required value="<?php echo $row['penghasilan'] ?>" maxlength="25" class="col-sm-12"></td>
				</tr>
				
				<tr>
					<td colspan="2">
						<input type="hidden" name="update" value="update">
						<input type="submit" name="Simpan" value="Simpan" class="btn btn-primary"> 
						<a href="?mod=anggota" title="Batal" class="btn btn-danger">Batal</a>
					</td>
				</tr>
			</table>
		</form>
		<?php
	}
	
?>