
<?php
	include 'model/admin/m_cicilan_a.php';
	$cicilan 	= new m_cicilan_a;

	if (isset($_POST['update'])) {
		
		if ($_POST['update']=="update") {
			
			$cicilan->update($_POST['pk'],$_POST['peminjaman_a'],"12",$_POST['cicilan12'],$_POST['type'],$_POST['nama'],$_POST['merek'],$_POST['muka']);
			$cicilan->update($_POST['pk'],$_POST['peminjaman_a'],"24",$_POST['cicilan24'],$_POST['type'],$_POST['nama'],$_POST['merek'],$_POST['muka']);
			$cicilan->update($_POST['pk'],$_POST['peminjaman_a'],"36",$_POST['cicilan36'],$_POST['type'],$_POST['nama'],$_POST['merek'],$_POST['muka']);

			?>
		
				<script>location="?mod=cicilan_a&aksi=view"</script>
		
			<?php
		
		}
	
	}else{
		
		$query	= $cicilan->edit($_GET['id']);
		$row	= mysql_fetch_array($query);
		
		$q12 	= $cicilan->edit($_GET['id']," AND cicilan_a = '6'");
		$q24 	= $cicilan->edit($_GET['id']," AND cicilan_a = '12'");
		$q36 	= $cicilan->edit($_GET['id']," AND cicilan_a = '18'");
		$q37	= $cicilan->edit($_GET['id']," AND cicilan_a = '24'");
		
		$r12 	= mysql_fetch_array($q12);
		$r24 	= mysql_fetch_array($q24);
		$r36 	= mysql_fetch_array($q36);
		$r37 	= mysql_fetch_array($q37);
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

		<form method="post" action="?mod=cicilan_a&aksi=edit">
			<table class="table table-striped table-bordered table-hover">
				<tr>
					<td>Type</td>
					<td>
						<input type="text" name="type" placeholder="type" required class="col-md-12" value="<?php echo $row['type']; ?>">
						<input type="hidden" name="pk" value="<?php echo $row['peminjaman_a']; ?>" required>
					</td>
				</tr>
				<tr>
					<td>Nama Alat</td>
					<td>
						<input type="text" name="nama" placeholder="Nama Alat" required class="col-md-12" value="<?php echo $row['nama']; ?>">
						
					</td>
				</tr>
				<tr>
					<td>Merek</td>
					<td>
						<input type="text" name="merek" placeholder="Merek" required class="col-md-12" value="<?php echo $row['merek']; ?>">
						
					</td>
				</tr>
				<tr>
					<td>Harga</td>
					<td>
						<input type="text" name="peminjaman_a" placeholder="Harga" required class="col-md-12" value="<?php echo $row['peminjaman_a']; ?>">
					
					</td>
				</tr>
				<tr>
					<td>Uang Muka</td>
					<td>
						<input type="text" name="muka" placeholder="Uang Muka" required class="col-md-12" value="<?php echo $row['muka']; ?>">
						
					</td>
				</tr>
				<tr>
					<td>Angsuran 6x</td>
					<td><input type="text" name="cicilan12" placeholder="Cicilan 12" required class="col-md-12" value="<?php echo $r12['perbulan_a']; ?>"></td>
				</tr>
				<tr>
					<td>Angsuran 12x</td>
					<td><input type="text" name="cicilan24" placeholder="Cicilan 24" required class="col-md-12" value="<?php echo $r24['perbulan_a']; ?>"></td>
				</tr>
				<tr>
					<td>Angsuran 18x</td>
					<td><input type="text" name="cicilan36" placeholder="Cicilan 36" required class="col-md-12" value="<?php echo $r36['perbulan_a']; ?>"></td>
				</tr>
				<tr>
					<td>Angsuran 24x</td>
					<td><input type="text" name="cicilan37" placeholder="Cicilan 36" required class="col-md-12" value="<?php echo $r37['perbulan_a']; ?>"></td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="hidden" name="update" value="update">
						<input type="hidden" name="Simpan" value="Simpan" class="btn btn-primary"> 
						<a href="?mod=cicilan_a" title="Batal" class="btn btn-primary">Simpan</a>
						<a href="?mod=cicilan_a" title="Batal" class="btn btn-danger">Batal</a>
					</td>
				</tr>
			</table>
		</form>
		<?php
	}
	
?>