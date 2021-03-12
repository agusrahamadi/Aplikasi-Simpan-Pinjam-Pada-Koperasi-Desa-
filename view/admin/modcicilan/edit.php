
<?php
	include 'model/admin/m_cicilan.php';
	$cicilan 	= new m_cicilan;

	if (isset($_POST['update'])) {
		
		if ($_POST['update']=="update") {
			
			$cicilan->update($_POST['pk'],$_POST['peminjaman'],"6",$_POST['cicilan6']);
			$cicilan->update($_POST['pk'],$_POST['peminjaman'],"12",$_POST['cicilan12']);
			$cicilan->update($_POST['pk'],$_POST['peminjaman'],"18",$_POST['cicilan18']);
			$cicilan->update($_POST['pk'],$_POST['peminjaman'],"24",$_POST['cicilan24']);

			?>
		
				<script>location="?mod=cicilan&aksi=view"</script>
		
			<?php
		
		}
	
	}else{
		
		$query	= $cicilan->edit($_GET['id']);
		$row	= mysql_fetch_array($query);
		
		$q6 	= $cicilan->edit($_GET['id']," AND cicilan = '6'");
		$q12 	= $cicilan->edit($_GET['id']," AND cicilan = '12'");
		$q18 	= $cicilan->edit($_GET['id']," AND cicilan = '18'");
		$q24 	= $cicilan->edit($_GET['id']," AND cicilan = '24'");
		
		$r6 	= mysql_fetch_array($q6);
		$r12 	= mysql_fetch_array($q12);
		$r18 	= mysql_fetch_array($q18);
		$r24 	= mysql_fetch_array($q24);
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
		<form method="post" action="?mod=cicilan&aksi=edit">
			<table class="table table-striped table-bordered table-hover">
				<tr>
					<td>Peminjaman</td>
					<td>
						<input type="text" name="peminjaman" placeholder="Peminjaman" required class="col-md-12" value="<?php echo $row['peminjaman']; ?>">
						<input type="hidden" name="pk" value="<?php echo $row['id_cicilan']; ?>" required>
					</td>
				</tr>
				<tr>
					<td>Angsuran 6x</td>
					<td><input type="text" name="cicilan6" placeholder="Cicilan 6" required class="col-md-12" value="<?php echo $r6['perbulan']; ?>"></td>
				</tr>
				<tr>
					<td>Angsuran 12x</td>
					<td><input type="text" name="cicilan12" placeholder="Cicilan 12" required class="col-md-12" value="<?php echo $r12['perbulan']; ?>"></td>
				</tr>
				<tr>
					<td>Angsuran 18x</td>
					<td><input type="text" name="cicilan18" placeholder="Cicilan 18" required class="col-md-12" value="<?php echo $r18['perbulan']; ?>"></td>
				</tr>
				<tr>
					<td>Angsuran 24x</td>
					<td><input type="text" name="cicilan24" placeholder="Cicilan 24" required class="col-md-12" value="<?php echo $r24['perbulan']; ?>"></td>
				</tr>
				
				<tr>
					<td colspan="2">
						<input type="hidden" name="update" value="update">
						<input type="hidden" name="Simpan" value="Simpan" class="btn btn-primary"> 
						<a href="?mod=cicilan" title="Batal" class="btn btn-primary">Simpan</a>
						<a href="?mod=cicilan" title="Batal" class="btn btn-danger">Batal</a>
					</td>
				</tr>
			</table>
		</form>
		<?php
	}
	
?>