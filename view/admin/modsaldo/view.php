<?php
	include 'model/admin/m_saldo.php';
	$saldo = new m_saldo;

	if (isset($_GET['method'])) {

		if ($_GET['method']=="delete") {
		
			//$saldo->delete($_GET['id']);
			
			?>
			
				<script>location="?mod=saldo&aksi=view"</script>	
		
			<?php
		
		}
		
	}

	if (isset($_POST['cari'])) {
		$select = $saldo->find($_POST['cari']);
	}else{
		$select = $saldo->select();
	}
?>
						<div class="page-header">
							<h1>
								Beranda
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Saldo
								</small>
							</h1>
						</div><!-- /.page-header -->

<button class="btn btn-danger">Total data : <?php echo mysql_num_rows($select) ?></button>

<table class="table table-striped table-bordered table-hover">
	<tr>
		<th>No</th>
		<th>Jenis</th>
		<th>Tgl Saldo</th>
		<th>ID Anggota</th>
		<th>Nama Anggota</th>
		<th>Debet</th>
		<th>Kridit</th>
		<th>Saldo</th>
	</tr>
	<?php
		$no=1;		
		while ($row = mysql_fetch_array($select)) {
		$debet_perusahaan = number_format($row['debet_perusahaan'],0);
		$kridit_perusahaan = number_format($row['kridit_perusahaan'],0);
		$saldo_perusahaan = number_format($row['saldo_perusahaan'],0);
			if ($row['jenis']=="simpan") {
			    $tab = "Tabungan";
				$class="label label-danger arrowed-in";
			}else if ($row['jenis']=="pinjam"){
			    $tab = "Peminjaman Dana";
				$class="label label-success arrowed-in";
			}else if ($row['jenis']=="kredit"){
			    $tab = "Kredit Alat Pertanian";
				$class="label label-default arrowed-in";
			}
			echo "
				<tr title='$row[ket_saldo] Oleh $row[nama_admin] - $row[tgl_saldo]'>
					<td>".$no++."</td>
					<td><span class='$class'>$tab</span></td>
					<td>$row[tgl_saldo]</td>
					<td>$row[id_anggota]</td>
					<td>$row[nama]</td>
					<td>Rp. $debet_perusahaan</td>
					<td>Rp. $kridit_perusahaan</td>
					<td>Rp. $saldo_perusahaan</td>
				</tr>
			";
		}
	?>
</table>