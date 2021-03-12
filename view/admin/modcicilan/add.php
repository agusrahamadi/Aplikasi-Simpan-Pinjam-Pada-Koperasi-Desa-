
<?php
	include 'model/admin/m_cicilan.php';
	$cicilan = new m_cicilan;

	if (isset($_POST['save'])) {
		
		if ($_POST['save']=="save") {
		
			$cicilan->insert(NULL,$_POST['peminjaman'],"6",$_POST['cicilan6']);
			$cicilan->insert(NULL,$_POST['peminjaman'],"12",$_POST['cicilan12']);
			$cicilan->insert(NULL,$_POST['peminjaman'],"18",$_POST['cicilan18']);
			$cicilan->insert(NULL,$_POST['peminjaman'],"24",$_POST['cicilan24']);
		
			?>
		
				<script>location="?mod=cicilan&aksi=view"</script>	
		
			<?php
		
		}
	
	}
	
?>
						<div class="page-header">
							<h1>
								Beranda
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Angsuran Pinjaman Dana
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
<form method="post" action="?mod=cicilan&aksi=add">
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td>Peminjaman</td>
			<td><input type="text" name="peminjaman" placeholder="Peminjaman" required class="col-md-12"></td>
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
				<a href="?mod=cicilan" title="Batal" class="btn btn-danger">Batal</a>
			</td>
		</tr>
	</table>
</form>