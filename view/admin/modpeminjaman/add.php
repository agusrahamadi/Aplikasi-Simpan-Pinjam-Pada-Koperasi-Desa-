<?php
	include 'model/admin/m_peminjaman.php';
	$peminjaman = new m_peminjaman;
	$cicilan	= $this->select("cicilan GROUP BY peminjaman");
	$anggota	= $this->select("anggota");

	if (isset($_POST['save'])) {
		
		if ($_POST['save']=="save") {

			$peminjaman->insert($_POST['id_anggota'],$_SESSION['user'],$_POST['peminjaman'],$_POST['cicilan']);
		
			?>
		
				<script>location="?mod=peminjaman&aksi=view"</script>	
		
			<?php
		
		}
	
	}
	
?>
						<div class="page-header">
							<h1>
								Beranda
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Pinjaman Dana
								</small>
							</h1>
						</div><!-- /.page-header -->

<form method="post" action="?mod=peminjaman&aksi=add">
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td>Nama Anggota</td>
			<td>
				<select name="id_anggota" class="col-sm-12">
					<?php while ($row=mysql_fetch_array($anggota)) { ?>
					<option value="<?php echo $row['id_anggota'] ?>"><?php echo $row['id_anggota'] ?> <?php echo $row['nama'] ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Peminjaman</td>
			<td>
				<select name="peminjaman" class="col-sm-12" onchange="cek_database()" id="peminjaman">
					<?php while ($row=mysql_fetch_array($cicilan)) { ?>
					<option value="<?php echo $row['peminjaman'] ?>"><?php echo number_format($row['peminjaman'],0) ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
		<tr>
			<td>Angsuran</td>
			<td>
			
			<input type="text" name="cicilan6"  id="cicilan6" readonly="" placeholder="6" maxlength="16" required class="col-sm-2">
			<label class="col-sm-1">6x</label>
			<input type="text" name="cicilan12"  id="cicilan12" readonly="" placeholder="12" maxlength="16" required class="col-sm-2">
			<label class="col-sm-1">12x</label>
			<input type="text" name="cicilan18"  id="cicilan18" readonly="" placeholder="18" maxlength="16" required class="col-sm-2">
			<label class="col-sm-1">18x</label>
			<input type="text" name="cicilan24"  id="cicilan24" readonly="" placeholder="24" maxlength="16" required class="col-sm-2">
			<label class="col-sm-1">24x</label>
			</td>
		
		</tr>
		<tr>
			<td>Pilih Angsuran</td>
			<td>
				<input type="radio" name="cicilan" value="6" required> 6x <br>
				<input type="radio" name="cicilan" value="12" required> 12x <br>
				<input type="radio" name="cicilan" value="18" required> 18x <br>
				<input type="radio" name="cicilan" value="24" required> 24x 
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="hidden" name="save" value="save">
				<input type="submit" name="Simpan" value="Simpan" class="btn btn-primary"> 
				<a href="?mod=peminjaman" title="Batal" class="btn btn-danger">Batal</a>
			</td>
		</tr>
	</table>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    function cek_database(){
        var peminjaman = $("#peminjaman").val();
        $.ajax({
            url: 'ajax_cek2.php',
            data:"peminjaman="+peminjaman ,
        }).success(function (data) {
            var json = data,
            obj = JSON.parse(json);
			$('#cicilan6').val(obj.cicilan6);
			$('#cicilan12').val(obj.cicilan12);
			$('#cicilan18').val(obj.cicilan18);
			$('#cicilan24').val(obj.cicilan24);
        });
    }
</script>