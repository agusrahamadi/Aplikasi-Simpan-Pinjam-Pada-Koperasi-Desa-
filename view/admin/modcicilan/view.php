<?php
	include 'model/admin/m_cicilan.php';
	$cicilan = new m_cicilan;

	if (isset($_GET['method'])) {

		if ($_GET['method']=="delete") {
		
			$cicilan->delete($_GET['id']);
			
			?>
			
				<script>location="?mod=cicilan&aksi=view"</script>	
		
			<?php
		
		}
		
	}

	if (isset($_POST['cari'])) {
		$select = $cicilan->find($_POST['cari']);
	}else{
		$select = $cicilan->select("GROUP BY peminjaman ORDER BY peminjaman ASC");
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
								<!-- PAGE CONTENT BEGINS <a href='?mod=cicilan&aksi=edit&id=$row[peminjaman]' title='Edit' class='btn btn-success'><span class='glyphicon glyphicon-edit'></span></a> -->
<a href="?mod=cicilan&aksi=add" title="Tambah Data" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
<button class="btn btn-danger">Total data : <?php echo mysql_num_rows($select) ?></button>

<table class="table table-striped table-bordered table-hover">
	<tr>
		<th rowspan="2">No</th>
		<th rowspan="2">Peminjaman</th>
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
			$peminjamann = number_format($row['peminjaman'],0,".",".");
			$peminjaman=$row['peminjaman'];
			echo "
				<tr>
					<td>".$no++."</td>
					<td>Rp. $peminjamann</td>
				";

			$query= $cicilan->select(" WHERE peminjaman='$peminjaman'");
			
			while ($data=mysql_fetch_array($query)) {
				$perbulan = number_format($data['perbulan'],0,".",".");
				echo "<td>Rp. $perbulan</td>";
			}

			echo "
					<td>
						
						";
			?>	
						<a href="?mod=cicilan&aksi=view&method=delete&id=<?php echo $row['peminjaman']?>" title="Hapus" onclick="javascript:return confirm('Hapus?')" class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span></a>
			<?php		
			echo	"</td>
				</tr>
			";
		}
	?>
</table>