
<?php
	include 'model/admin/m_cicilan_a.php';
	$cicilan = new m_cicilan_a;

	if (isset($_POST['save'])) {
		
		if ($_POST['save']=="save") {
		
			$cicilan->insert(NULL,$_POST['peminjaman_a'],"6",$_POST['cicilan6'],$_POST['type'],$_POST['nama'],$_POST['merek'],$_POST['muka']);
			$cicilan->insert(NULL,$_POST['peminjaman_a'],"12",$_POST['cicilan12'],$_POST['type'],$_POST['nama'],$_POST['merek'],$_POST['muka']);
			$cicilan->insert(NULL,$_POST['peminjaman_a'],"18",$_POST['cicilan18'],$_POST['type'],$_POST['nama'],$_POST['merek'],$_POST['muka']);
			$cicilan->insert(NULL,$_POST['peminjaman_a'],"24",$_POST['cicilan24'],$_POST['type'],$_POST['nama'],$_POST['merek'],$_POST['muka']);
		
			?>
		
				<script>location="?mod=cicilan_a&aksi=view"</script>	
		
			<?php
		
		}
	
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

<form method="post" action="?mod=cicilan_a&aksi=add">
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td>Type</td>
			<td><input type="text" name="type" placeholder="Type" required class="col-md-12"></td>
		</tr>
		<tr>
			<td>Nama Alat</td>
			<td><input type="text" name="nama" placeholder="Nama" required class="col-md-12"></td>
		</tr>
		<tr>
			<td>Merek</td>
			<td><input type="text" name="merek" placeholder="Merek" required class="col-md-12"></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input type="text" name="peminjaman_a" placeholder="Harga" required class="col-md-12"></td>
		</tr>
		<tr>
			<td>Uang Muka</td>
			<td><input type="text" name="muka" placeholder="Uang Muka" required class="col-md-12"></td>
		</tr>
		<tr>
			<td>Angsuran 6x</td>
			<td><input type="text" name="cicilan6" placeholder="Angsuran 6" required class="col-md-12"></td>
		</tr>
		<tr>
			<td>Angsuran 12x</td>
			<td><input type="text" name="cicilan12" placeholder="Angsuran 12" required class="col-md-12"></td>
		</tr>
		<tr>
			<td>Angsuran 18x</td>
			<td><input type="text" name="cicilan18" placeholder="Angsuran 18" required class="col-md-12"></td>
		</tr>
			<tr>
			<td>Angsuran 24x</td>
			<td><input type="text" name="cicilan24" placeholder="Angsuran 24" required class="col-md-12"></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="hidden" name="save" value="save">
				<input type="submit" name="Simpan" value="Simpan" class="btn btn-primary"> 
				<a href="?mod=cicilan_a" title="Batal" class="btn btn-danger">Batal</a>
			</td>
		</tr>
	</table>
</form>