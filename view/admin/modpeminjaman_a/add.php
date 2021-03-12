<?php
	include 'model/admin/m_peminjaman_a.php';
	$peminjaman = new m_peminjaman_a;
	$cicilan	= $this->select("cicilan_a GROUP BY peminjaman_a");
	$anggota	= $this->select("anggota");

	if (isset($_POST['save'])) {
		
		if ($_POST['save']=="save") {

			$peminjaman->insert($_POST['id_anggota'],$_SESSION['user'],$_POST['peminjaman_a'],$_POST['cicilan_a'],$_POST['type'],$_POST['nama_a'],$_POST['merek']);
		
			?>
		
				<script>location="?mod=peminjaman_a&aksi=view"</script>	
		
			<?php
		
		}
	
	}
	
?>
						<div class="page-header">
							<h1>
								Beranda
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Kredit Alat Pertanian
								</small>
							</h1>
						</div><!-- /.page-header -->

<form method="post" action="?mod=peminjaman_a&aksi=add">
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td>Nama Anggota</td>
			<td>
				<select name="id_anggota"  class="col-sm-12">
					<?php while ($row=mysql_fetch_array($anggota)) { ?>
					<option value="<?php echo $row['id_anggota'] ?>"><?php echo $row['id_anggota'] ?>  <?php echo $row['nama'] ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		
		<tr>
			<td>Alat</td>
			<td>
				<select name="peminjaman_a" onchange="cek_database()" id="peminjaman_a" class="col-sm-12">
					<?php while ($row=mysql_fetch_array($cicilan)) { ?>
					<option value="<?php echo $row['peminjaman_a'] ?>"><?php echo $row['nama'] ?> <?php echo $row['merek'] ?> <?php echo $row['type'] ?> </option>
					<?php } ?>
				</select>
			</td>
		</tr>
		
		<input type="hidden" name="nama_a"  id="nama" placeholder="Harga" readonly="" maxlength="16" required class="col-sm-12">
		<input type="hidden" name="merek"  id="merek" placeholder="Harga" readonly="" maxlength="16" required class="col-sm-12">
		<input type="hidden" name="type"  id="type" placeholder="Harga" readonly="" maxlength="16" required class="col-sm-12">
		
		<tr>
			<td>Harga</td>
			<td><input type="text" name="harga"  id="harga" placeholder="Harga" readonly="" maxlength="16" required class="col-sm-12"></td>
		</tr>

		<tr>
			<td>Uang Muka</td>
			<td><input type="text" name="muka"  id="muka" placeholder="Uang Muka" readonly="" maxlength="16" required class="col-sm-12"></td>
		</tr>
		
		<tr>
			<td>Angsuran</td>
			<td>
			
			<input type="text" name="cicilan6"  id="cicilan6" readonly="" placeholder="6" maxlength="16" required class="col-sm-2">
			<label class="col-sm-1">12x</label>
			<input type="text" name="cicilan12"  id="cicilan12" readonly="" placeholder="12" maxlength="16" required class="col-sm-2">
			<label class="col-sm-1">24x</label>
			<input type="text" name="cicilan18"  id="cicilan18" readonly="" placeholder="18" maxlength="16" required class="col-sm-2">
			<label class="col-sm-1">36x</label>
			<input type="text" name="cicilan24"  id="cicilan24" readonly="" placeholder="24" maxlength="16" required class="col-sm-2">
			<label class="col-sm-1">36x</label>
			</td>
		
		</tr>
		<tr>
		<tr>
			<td>Pilih Angsuran</td>
			<td>
				<input type="radio" name="cicilan_a" value="6" required> 6x <br>
				<input type="radio" name="cicilan_a" value="12" required> 12x <br>
				<input type="radio" name="cicilan_a" value="18" required> 18x <br>
				<input type="radio" name="cicilan_a" value="24" required> 24x 
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="hidden" name="save" value="save">
				<input type="submit" name="Simpan" value="Simpan" class="btn btn-primary"> 
				<a href="?mod=peminjaman_a" title="Batal" class="btn btn-danger">Batal</a>
			</td>
		</tr>
	</table>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    function cek_database(){
        var peminjaman_a = $("#peminjaman_a").val();
        $.ajax({
            url: 'ajax_cek.php',
            data:"peminjaman_a="+peminjaman_a ,
        }).success(function (data) {
            var json = data,
            obj = JSON.parse(json);
            $('#nama').val(obj.nama);
            $('#merek').val(obj.merek);
            $('#type').val(obj.type);
            $('#muka').val(obj.muka);
			$('#harga').val(obj.harga);
			$('#cicilan6').val(obj.cicilan6);
			$('#cicilan12').val(obj.cicilan12);
			$('#cicilan18').val(obj.cicilan18);
			$('#cicilan24').val(obj.cicilan24);
        });
    }
</script>