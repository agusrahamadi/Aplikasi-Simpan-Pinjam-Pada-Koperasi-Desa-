<?php
	include 'model/admin/m_home.php';
	$home = new m_home;

	if (isset($_GET['method'])) {

		if ($_GET['method']=="delete") {
		
			//$home->delete($_GET['id']);
			
			?>
			
				<script>location="?mod=home&aksi=view"</script>	
		
			<?php
		
		}
		
	}

	if (isset($_POST['cari'])) {
		$select 	= $home->find($_POST['cari']);
	}else{
		$cicilan 	= $home->select("cicilan"," GROUP BY peminjaman");
		$anggota 	= $home->select("anggota","LIMIT 10");
		$simpan 	= $home->select("simpan,anggota","WHERE simpan.id_anggota = anggota.id_anggota ORDER BY simpan.id_simpan DESC LIMIT 10");
		$saldo 		= $home->select("saldo,anggota","WHERE saldo.id_anggota = anggota.id_anggota ORDER BY saldo.id_saldo DESC LIMIT 10");
	}
?>

<div class="col-md-12" id="logo-awal">
<center><h2>APLIKASI SIMPAN PINJAM KOPERASI</h2></center>
<center><h2>UNIT DESA PENERUS BARU</h3></center>

<center><h5>Parandakan, Kec. Lokpaikat,Kab. Tapin, Prov. Kalimantan Selatan, Kode Pos : 71154</h5></center>
<center><h5></h5></center>
</div>
 </div> 
 
<div class="col-md-12">	
<div class="col-md-3" id="logo-awal">
<center><img src="4.jpg" width="250 px"></center>		
</div> 

<div class="col-md-3" id="logo-awal">
<center><img src="3.jpg" width="250 px"></center>		
</div> 

<div class="col-md-3" id="logo-awal">
<center><img src="1.jpg" width="250 px"></center>		
</div> 

<div class="col-md-3" id="logo-awal">
<center><img src="5.jpg" width="250 px"></center>		
</div> </div> 


<div class="col-md-12" id="logo-awal">


<center><h5>Syarat Mengajukan Pinjaman di Koperasi<br>
<br>
1. Mengisi Formulir Pinjaman<br>
2. Berstatus sebagai anggota koperasi atau calon anggota koperasi<br>
3. Membawa fotocopy KTP, bagi yang sudah menikah wajib untuk membawa KTP suami atau Istri<br>
4. Membawa fotocopy kartu keluarga, slip gai, rekening listrik, dan juga anggunan</h5></center>
<center><h5></h5></center>
</div>
 </div> 