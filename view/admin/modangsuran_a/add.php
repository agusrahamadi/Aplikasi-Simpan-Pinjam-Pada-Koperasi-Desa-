
<?php
	include 'model/admin/m_angsuran_a.php';
	$angsuran = new m_angsuran_a;

	if (isset($_POST['save'])) {
		
		if ($_POST['save']=="save") {
		
			$angsuran->insert($_POST['id_peminjaman'],$_POST['id_anggota'],$_SESSION['user'],$_POST['angsuran_ke'],$_POST['perbulan'],$_POST['type'],$_POST['nama_a'],$_POST['merek']);
		
			?>
		
				<script>location="?mod=angsuran_a&aksi=view"</script>	
		
			<?php
		
		}
	
	}

	if (isset($_POST['id_peminjaman_a'])) {
		$id_peminjaman	= $_POST['id_peminjaman_a'];
		
		
		$cari2			= $angsuran->buka("angsuran_a WHERE angsuran_a.id_peminjaman_a ='$id_peminjaman'");
		$angsuran_ke 	= mysql_num_rows($cari2) + 1;
		

		if ($angsuran_ke>1) {
			$cari 			= $angsuran->buka("angsuran_a, peminjaman_a, anggota WHERE angsuran_a.id_peminjaman_a = '$id_peminjaman' AND angsuran_a.id_peminjaman_a = peminjaman_a.id_peminjaman_a AND peminjaman_a.id_anggota = anggota.id_anggota");
		}else{
			$cari 			= $angsuran->buka("peminjaman_a, anggota WHERE peminjaman_a.id_anggota = anggota.id_anggota AND peminjaman_a.id_peminjaman_a='$id_peminjaman'");
		}
		
		$data 			= mysql_fetch_array($cari);
		
		

		
         $mysqli= mysqli_connect("localhost","root","","db_koperasi");
		if ($angsuran_ke>$data['cicilan_a']) {
			 $qupdate = "
          UPDATE peminjaman_a SET
            ket = 'LUNAS' 
     
          WHERE
            id_peminjaman_a = '$id_peminjaman' 
        ";
        $rupdate = mysqli_query($mysqli,$qupdate);
		
		 echo "<script>alert('Anda Sudah Lunas')</script>";
         echo "<meta http-equiv='refresh' content='0; url=?mod=angsuran_a'>";
		
		
		
		}
		//print_r($data);
	}else{
		?>
			<script type="text/javascript">
				alert("Data Tidak Ada");
				location:"?mod=angsuran_a";
			</script>
		<?php
	}
	
?>
						<div class="page-header">
							<h1>
								Beranda
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Angsuran Kredit Alat Pertanian
								</small>
							</h1>
						</div><!-- /.page-header -->

<form method="post" action="?mod=angsuran_a&aksi=add">
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td>ID Kredit</td>
			<td>
				<input type="text" value="<?php echo $id_peminjaman ?>" placeholder="ID Peminjaman" required class="col-sm-12" disabled>
				<input type="hidden" name="id_peminjaman" value="<?php echo $id_peminjaman ?>" required>
			</td>
		</tr>
		<tr>
			<td>ID Anggota</td>
			<td>
				<input type="text" value="<?php echo $data['id_anggota'] ?>" placeholder="ID Anggota" required class="col-sm-12" disabled>
				<input type="hidden" name="id_anggota" value="<?php echo $data['id_anggota'] ?>" required>
			</td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>
				<input type="text" value="<?php echo $data['nama'] ?>" placeholder="Nama Anggota" required class="col-sm-12" disabled>
				<input type="hidden" name="nama" value="<?php echo $data['nama'] ?>" required>
			</td>
		</tr>
		<tr>
			<td>Kredit Alat</td>
			<td>
				<input type="text" value="<?php echo $data['nama_a']  ?> <?php echo $data['merek'] ?> <?php echo $data['type'] ?>" placeholder="Nama Anggota" required class="col-sm-12" disabled>
				<input type="hidden" name="nama_a" value="<?php echo $data['nama_a'] ?>" required>
				<input type="hidden" name="merek" value="<?php echo $data['merek'] ?>" required>
				<input type="hidden" name="type" value="<?php echo $data['type'] ?>" required>
			</td>
		</tr>

		<tr>
			<td>Angsuran Ke</td>
			<td>
				<input type="text" value="<?php echo $angsuran_ke ?>" placeholder="Nama Anggota" required class="col-sm-12" disabled>
				<input type="hidden" name="angsuran_ke" value="<?php echo $angsuran_ke ?>" required>
			</td>
		</tr>
		<tr>
			<td>Biyaya</td>
			<td>
				<input type="text" value="<?php echo $data['perbulan_a'] ?>" placeholder="Nama Anggota" required class="col-sm-12" disabled>
				<input type="hidden" name="perbulan" value="<?php echo $data['perbulan_a'] ?>" required>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="hidden" name="save" value="save">
				<input type="submit" name="Simpan" value="Simpan" class="btn btn-primary"> 
				<a href="?mod=angsuran_a" title="Batal" class="btn btn-danger">Batal</a>
			</td>
		</tr>
	</table>
</form>