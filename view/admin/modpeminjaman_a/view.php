<?php
	include 'model/admin/m_peminjaman_a.php';
	$peminjaman = new m_peminjaman_a;

	if (isset($_GET['method'])) {

		if ($_GET['method']=="delete") {
		
			$peminjaman->delete($_GET['id']);
			
			?>
			
				<script>location="?mod=peminjaman_m&aksi=view"</script>	
		
			<?php
		
		}
		
	}

	if (isset($_POST['cari'])) {
		$select = $peminjaman->find($_POST['cari']);
	}else{
		$select = $peminjaman->select();
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

<a href="?mod=peminjaman_a&aksi=add" title="Tambah Data" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
<button class="btn btn-danger">Total data : <?php echo mysql_num_rows($select) ?></button>

<table class="table table-striped table-bordered table-hover">
	<tr>
		<th>No</th>
		<th>Tgl Kredit</th>
		<th>ID Kredit </th>
		<th>Nama </th>
		<th>alat </th>
		<th>Merek/Type </th>
		<th>Harga</th>
		<th>Angsuran</th>
		<th>Sisa Kredit</th>
		<th>Perbulan</th>
		<th>Keterangan</th>
		<th>Bukti Transaksi</th>
		
	</tr>
	<?php
		$no=1;		
		while ($row = mysql_fetch_array($select)) {
		$peminjaman = number_format($row['peminjaman_a'],0);
		$perbulan = number_format($row['perbulan_a'],0);
		 if($row['ket']=='LUNAS')
                            {
                                    $st= '<span class="label label-warning">LUNAS</span>';
                            }
                            else if ($row['ket']=='BELUM')
                            {
                                    $st= '<span class="label label-danger">BELUM LUNAS</span>';
                            }
         $a= $row["cicilan_a"] - mysql_num_rows($select) ;                  
			echo "
				<tr title='$row[username]'>
					<td>".$no++."</td>
					<td>$row[tgl_peminjaman_a]</td>
					<td>$row[id_peminjaman_a]</td>
					<td>$row[nama]</td>
					<td>$row[nama_a]</td>
					<td>$row[merek]/$row[type]</td>
					<td>Rp. $peminjaman</td>
					<td>$row[cicilan_a]</td>
					<td>$a</td>
					<td>Rp. $perbulan</td>
					<td>$st</td>
					<td><a href='view/admin/lk_peminjaman_a.php?id_peminjaman_a=$row[id_peminjaman_a]' title='Edit' class='btn btn-default'><span class='glyphicon glyphicon-print'> Cetak</span></a></td>
				</tr>
			";
		}
	?>
</table>