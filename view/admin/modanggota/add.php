
<?php
	include 'model/admin/m_anggota.php';
	$anggota = new m_anggota;

 $mysqli= mysqli_connect("localhost","u8110790_us_kop","gUcZ1){kMrsl","u8110790_db_koperasi");
 $noktp = $_POST['noktp'];
  $penghasilan = $_POST['penghasilan'];
 $cek = mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM anggota WHERE noktp = '$noktp'"));
        
        
	if (isset($_POST['save'])) {
		if ($cek > 0) {
          echo "<script> alert('NO KTP Sudah Ada');
              document.location='?mod=anggota&aksi=view';
              </script>";
          }
          else	if ($penghasilan > 20000000) {
          echo "<script> alert('Penghasilan Melebihi 20.000.000');
              document.location='?mod=anggota&aksi=view';
              </script>";
          }
           else	if ($penghasilan < 1500000) {
          echo "<script> alert('Penghasilan Kurang dari 1.500.000');
              document.location='?mod=anggota&aksi=view';
              </script>";
          }
          else if ($_POST['save']=="save") {
		
			$anggota->insert($_POST['id_anggota'],strtoupper($_POST['nama']),strtoupper($_POST['alamat']),$_POST['no_hp'],md5("123456"),strtoupper($_POST['noktp']),strtoupper($_POST['pekerjaan']),strtoupper($_POST['penghasilan']));
		
			?>
		
				<script>location="?mod=anggota&aksi=view"</script>	
		
			<?php
		
		}
	
	}
	
?>

                
                <?php
				$mysqli= mysqli_connect("localhost","u8110790_us_kop","gUcZ1){kMrsl","u8110790_db_koperasi");
                $qupdate = "SELECT max(id_anggota) as maxKode FROM anggota";
                $rupdate = mysqli_query($mysqli, $qupdate);
                $dupdate = mysqli_fetch_assoc($rupdate);
                $kd_daftar = $dupdate['maxKode'];
                $a = substr($kd_daftar,6);
                $no_urut = $a + 1;
                $char = "UJKS-";
                $newID = $char.sprintf("%03s",$no_urut);
                    ?>
						<div class="page-header">
							<h1>
								Beranda
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Anggota
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
<form method="post" action="?mod=anggota&aksi=add">
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td>ID anggota</td>
			<td><input type="text" name="id_anggota" value="<?php echo "$newID"; ?>"  required   class="col-sm-12"></td>
		</tr>
		<tr>
			<td>No KTP</td>
			<td><input type="text" name="noktp" placeholder="No KTP" maxlength="16" required class="col-sm-12"></td>
		</tr>
		<tr>
			<td>Nama Anggota</td>
			<td><input type="text" name="nama" placeholder="Nama" maxlength="100"  required class="col-sm-12"></td>
		</tr>
		<tr>
			<td>No. Telp</td>
			<td><input type="text" name="no_hp" placeholder="No. Telp" maxlength="12"  required class="col-sm-12"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><textarea name="alamat" placeholder="Alamat" required class="col-sm-12"></textarea></td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td><input type="text" name="pekerjaan" placeholder="Pekerjaan"  maxlength="50" required class="col-sm-12"></td>
		</tr>
		<tr>
			<td>Penghasilan</td>
			<td><input type="text" name="penghasilan" placeholder="Penghasilan" maxlength="25"  required class="col-sm-12"></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="hidden" name="save" value="save">
				<input type="submit" name="Simpan" value="Simpan" class="btn btn-primary"> 
				<a href="?mod=anggota" title="Batal" class="btn btn-danger">Batal</a>
			</td>
		</tr>
	</table>
</form>