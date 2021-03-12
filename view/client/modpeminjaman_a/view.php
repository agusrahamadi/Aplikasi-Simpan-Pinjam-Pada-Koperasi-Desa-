<?php
	include 'model/client/m_peminjaman_a.php';
	$peminjaman = new m_peminjaman_a;

	if (isset($_POST['cari'])) {
		$select = $peminjaman->find($_POST['cari']);
	}else{
		$select = $peminjaman->select($_GET['id']);
	}
	$query 	= mysql_query("SELECT * FROM peminjaman_a WHERE id_peminjaman_a = '$_GET[id]'");
	$array 	= mysql_fetch_array($query);
?>
<div class="page-header">
							<h1>
								Beranda
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Peminjaman Dana
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
<button class="btn btn-primary">Angsuran Ke : <?php echo mysql_num_rows($select) ?></button>
<button class="btn btn-danger">Angsuran Kurang : <?php echo $array['cicilan_a'] - mysql_num_rows($select) ?></button>

<table class="table table-striped table-bordered table-hover">
	<tr>
		<th>No</th>
		<th>Tgl Angsuran</th>
		<th>ID Kredit</th>
		<th>ID Anggota</th>
		<th>Nama</th>
		<th>Angsuran Ke</th>
		<th>Angsuran</th>
	</tr>
	<?php
		$no=1;
		while ($row = mysql_fetch_array($select)) {
			echo "
				<tr title='$row[username]'>
					<td>".$no++."</td>
					<td>$row[tgl_angsuran_a]</td>
					<td>$row[id_peminjaman_a]</td>
					<td>$row[id_anggota]</td>
					<td>$row[nama]</td>
					<td>$row[angsuran_ke]</td>
					<td>$row[perbulan_a]</td>
				</tr>
			";
		}
	?>
</table>