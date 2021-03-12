<?php
	include 'model/admin/m_simpan.php';
	$simpan = new m_simpan;

	if (isset($_GET['method'])) {

		if ($_GET['method']=="delete") {
		
			//$simpan->delete($_GET['id']);
			
			?>
			
				<script>location="?mod=simpan&aksi=view"</script>	
		
			<?php
		
		}
		
	}

	if (isset($_POST['cari'])) {
		$select = $simpan->find($_POST['cari']);
	}else{
		$select = $simpan->select();
	}
?>
						<div class="page-header">
							<h1>
								Beranda
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Tabungan
								</small>
							</h1>
						</div><!-- /.page-header -->

<a href="?mod=simpan&aksi=add" title="Tambah Data" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
<button class="btn btn-danger">Total data : <?php echo mysql_num_rows($select) ?></button>

<table class="table table-striped table-bordered table-hover">
	<tr>
		<th>No</th>
		<th>Tanggal</th>
		<th>ID Anggota</th>
		<th>No Ktp</th>
		<th>Nama Anggota</th>
		<th>Alamat</th>
		<th>Debet</th>
		<th>Kredit</th>
		<th>Saldo</th>
		<th>Bukti Transaksi</th>
	</tr>
	<?php
		$no=1;
	
		
		while ($row = mysql_fetch_array($select)) {
		    	$debet_anggota = number_format($row['debet_anggota'],0);
		$kridit_anggota = number_format($row['kridit_anggota'],0);
		$saldo_anggota = number_format($row['saldo_anggota'],0);
			echo "
				<tr title='$row[ket_simpan] Oleh $row[nama_admin] - $row[username]'>
					<td>".$no++."</td>
					<td>$row[tgl_simpan]</td>
					<td>$row[id_anggota]</td>
					<td>$row[noktp]</td>
					<td>$row[nama]</td>
										<td>$row[alamat]</td>
					<td>Rp. $debet_anggota </td>
					<td>Rp. $kridit_anggota</td>
					<td>Rp. $saldo_anggota</td>
					<td><a href='view/admin/lk_simpan.php?id_simpan=$row[id_simpan]' title='Edit' class='btn btn-default'><span class='glyphicon glyphicon-print'> Cetak</span></a></td>
				</tr>
			";
		}
	?>
</table>