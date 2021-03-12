<?php
	include 'model/client/m_admin.php';
	$admin = new m_admin;

	if (isset($_GET['method'])) {

		if ($_GET['method']=="delete") {
		
			$admin->delete($_GET['id']);
			
			?>
			
				<script>location="?mod=admin&aksi=view"</script>	
		
			<?php
		
		}
		
	}

	if (isset($_POST['cari'])) {
		$select = $admin->find($_POST['cari']);
	}else{
		$select = $admin->select();
	}
?>
						<div class="page-header">
							<h1>
								Beranda
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Admin
								</small>
							</h1>
						</div><!-- /.page-header -->
<!--
<a href="?mod=admin&aksi=add" title="Tambah Data" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
<button class="btn btn-danger">Total data : <?php echo mysql_num_rows($select) ?></button>
 -->
<table class="table table-striped table-bordered table-hover">
	<tr>
		<th>No</th>
		<th>Id Anggota</th>
		<th>Nama</th>
		<th>Password</th>
		<th>Aksi</th>
	</tr>
	<?php
		$no=1;	
		$id_anggota =  $_GET["id_anggota"];
		$a = mysql_query("SELECT * FROM anggota WHERE id_anggota = '$id_anggota' ");	
		while ($row = mysql_fetch_array($a)) {
			echo "
				<tr>
					<td>".$no++."</td>
					<td>$row[id_anggota]</td>
					<td>$row[nama]</td>
					<td>$row[password]</td>
					<td>
						<a href='?mod=admin&aksi=edit&id_anggota=$row[id_anggota]' title='Edit' class='btn btn-success'><span class='glyphicon glyphicon-edit'></span></a> 
						";
			?>	
						<a href="?mod=admin&aksi=view&method=delete&id=<?php echo $row['id_anggota']?>" title="Hapus" onclick="javascript:return confirm('Hapus?')" class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span></a>
			<?php		
			echo	"</td>
				</tr>
			";
		}
	?>
</table>