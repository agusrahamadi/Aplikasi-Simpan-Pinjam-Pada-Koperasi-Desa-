<?php
	include 'model/admin/m_peminjaman.php';
	$peminjaman = new m_peminjaman;

	if (isset($_GET['method'])) {

		if ($_GET['method']=="delete") {
		
			$peminjaman->delete($_GET['id']);
			
			?>
			
				<script>location="?mod=peminjaman&aksi=view"</script>	
		
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
									Pinjaman Dana
								</small>
							</h1>
						</div><!-- /.page-header -->

<a href="?mod=peminjaman&aksi=add" title="Tambah Data" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
<button class="btn btn-danger">Total data : <?php echo mysql_num_rows($select) ?></button>

<table class="table table-striped table-bordered table-hover">
	<tr>
		<th>No</th>
		<th>Tgl Peminjaman</th>
		<th>ID Peminjaman</th>
		<th>Nama Peminjam</th>
		<th>Peminjaman</th>
		<th>Angsuran</th>
		<th>Sisa Pinjaman</th>
		<th>Perbulan</th>
		<th>Keterangan</th>
		<th>Bukti Transaksi</th>
	</tr>
	<?php
		$no=1;		
		while ($row = mysql_fetch_array($select)) {
		$peminjaman = number_format($row['peminjaman'],0);
		$perbulan = number_format($row['perbulan'],0);
		 if($row['ket']=='LUNAS')
                            {
                                    $st= '<span class="label label-warning">LUNAS</span>';
                            }
                            else if ($row['ket']=='BELUM')
                            {
                                    $st= '<span class="label label-danger">BELUM LUNAS</span>';
                            }
        $a= $row["cicilan"] - mysql_num_rows($select) ;
			echo "
				<tr title='$row[username]'>
					<td>".$no++."</td>
					<td>$row[tgl_peminjaman]</td>
					<td>$row[id_peminjaman]</td>
					<td>$row[nama]</td>
					<td>Rp. $peminjaman</td>
					<td>$row[cicilan]</td>
					<td>$a</td>
					<td>Rp.  $perbulan</td>
					
					<td>$st</td>
					<td><a href='view/admin/lk_peminjaman.php?id_peminjaman=$row[id_peminjaman]' title='Edit' class='btn btn-default'><span class='glyphicon glyphicon-print'> Cetak</span></a></td>
			
				</tr>
			";
		}
	?>
</table>