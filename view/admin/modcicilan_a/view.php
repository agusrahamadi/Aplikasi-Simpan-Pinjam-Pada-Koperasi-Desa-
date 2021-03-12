<?php
	include 'model/admin/m_cicilan_a.php';
	$cicilan = new m_cicilan_a;

	if (isset($_GET['method'])) {

		if ($_GET['method']=="delete") {
		
			$cicilan->delete($_GET['id']);
			
			?>
			
				<script>location="?mod=cicilan_a&aksi=view"</script>	
		
			<?php
		
		}
		
	}

	if (isset($_POST['cari'])) {
		$select = $cicilan->find($_POST['cari']);
	}else{
		$select = $cicilan->select("GROUP BY peminjaman_a ORDER BY peminjaman_a ASC");
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
						</div><!-- /.page-header <a href='?mod=cicilan_a&aksi=edit&id=$row[peminjaman_a]' title='Edit' class='btn btn-success'><span class='glyphicon glyphicon-edit'></span></a>  -->

<a href="?mod=cicilan_a&aksi=add" title="Tambah Data" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
<button class="btn btn-danger">Total data : <?php echo mysql_num_rows($select) ?> </button>

<table class="table table-striped table-bordered table-hover">
	<tr>
		<th rowspan="2">No</th>
		<th rowspan="2">Type</th>
		<th rowspan="2">Nama Alat</th>
		<th rowspan="2">Merek</th>
		<th rowspan="2">Harga</th>
		<th rowspan="2">Uang Muka</th>
		<th colspan="4">Angsuran</th>
		<th rowspan="2">Aksi</th>
	</tr>
	<tr>
		<th>6x</th>
		<th>12x</th>
		<th>18x</th>
		<th>24x</th>
	</tr>
	<?php
		$no=1;		
		while ($row = mysql_fetch_array($select)) {
			$peminjamann = number_format($row['peminjaman_a'],0,".",".");
			$muka = number_format($row['muka'],0,".",".");
			$peminjaman=$row['peminjaman_a'];
			echo "
				<tr>
					<td>".$no++."</td>
					<td>$row[type]</td>
					<td>$row[nama]</td>
					<td>$row[merek]</td>
					<td>Rp. $peminjamann</td>
					<td>Rp. $muka</td>
				";

			$query= $cicilan->select(" WHERE peminjaman_a='$peminjaman'");
			
			while ($data=mysql_fetch_array($query)) {
				$perbulan = number_format($data['perbulan_a'],0,".",".");
				echo "<td>Rp. $perbulan</td>";
			}

			echo "
					<td>
						
						";
			?>	
						<a href="?mod=cicilan_a&aksi=view&method=delete&id=<?php echo $row['peminjaman_a']?>" title="Hapus" onclick="javascript:return confirm('Hapus?')" class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span></a>
			<?php		
			echo	"</td>
				</tr>
			";
		}
	?>
</table>