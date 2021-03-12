<!DOCTYPE html>
<?php 
ob_start();
?>
<page>
		<style type="text/css">
		table#barang{
			border: 2px solid darkgrey;
		}
		th{
			border-bottom: 2px solid darkgrey;
		}
		td.table-td{
			border-bottom: 2px solid darkgrey;
			border-right: 0.5px solid darkgrey;
		}
		</style>
		
		<table border="0" align="center" style="font-size: 16px; border-collapse: collapse; width: 100%;">
			<tr>
				<td width="0" rowspan="4"><img src="../../gambar/lambang-koperasi-lama.png" width="70" height="80"/></td>
				<td style="font-size: 14px; width: 90%;" align="center;"><b> SIMPAN PINJAM KOPERASI</b></td>
			
				</tr>
		<tr><td style="font-size: 14px; width: 90%;" align="center;"><b> UNIT DESA PENURUS BARU</b></td></tr>
			
			<tr><td style="font-size: 10px; width: 92%;" align="center;">Parandakan, Kec. Lokpaikat,Kab. Tapin, Prov. Kalimantan Selatan, Kode Pos : 71154</td></tr>
		</table>
		<hr>
		 <?php
		 $no=1;
		 $id_simpan = $_GET["id_simpan"];
				$mysqli= mysqli_connect("localhost","u8110790_us_kop","gUcZ1){kMrsl","u8110790_db_koperasi");
		
        $qupdate = "SELECT * FROM simpan, anggota, admin WHERE simpan.id_anggota = anggota.id_anggota AND simpan.username = admin.username AND simpan.id_simpan ='$id_simpan'   ";
        $rupdate = mysqli_query($mysqli, $qupdate);
        while($dupdate = mysqli_fetch_assoc($rupdate)){
			
       		?>
		<h5 align="center">BUKTI TRANSAKSI TABUNGAN</h5>
		 <table border="0"   style="font-size:12px;" cellspacing="3" cellpadding="3">
       <tr>
        <td width="40" align="rigth"></td>
        <td width="410" colspan="4">Pada Tanggal  <?php echo $dupdate['tgl_simpan']; ?> :</td>  
        
      </tr>
	   <tr>
        <td width="40" align="rigth"></td>
        <td width="200"> </td>
        <td width="10"></td>
        <td width="150"></td>
      </tr>
	   <tr>
        <td width="40" align="rigth"></td>
        <td width="200">Id Anggota</td>
        <td width="10">:</td>
        <td width="150"><?php echo $dupdate['id_anggota']; ?></td>
      </tr>
	   <tr>
        <td width="40" align="rigth"></td>
        <td width="200"> </td>
        <td width="10"></td>
        <td width="150"></td>
      </tr>
      <tr>
        <td width="40" align="rigth"></td>
        <td width="200">Nama</td>
        <td width="10">:</td>
        <td width="150"><?php echo $dupdate['nama']; ?></td>
      </tr>
     <tr>
        <td width="40" align="rigth"></td>
        <td width="200"> </td>
        <td width="10"></td>
        <td width="150"></td>
      </tr>
      <tr>
        <td width="40" align="rigth"></td>
        <td width="200"> </td>
        <td width="10"></td>
        <td width="150"></td>
      </tr>
      <tr>
        <td width="40" align="rigth"></td>
        <td width="410" colspan="4">Telah Melakukan Transaksi : </td>  
      </tr>
      
      <tr>
        <td width="40" align="rigth"></td>
        <td width="200"> </td>
        <td width="10"></td>
        <td width="150"></td>
      </tr>
     
      <tr>
        <td width="40" align="rigth"></td>
        <td width="200">Kredit</td>
        <td width="10">:</td>
        <td width="150">Rp.<?php echo $dupdate['kridit_anggota']; ?></td>
      </tr>
      
        <tr>
        <td width="40" align="rigth"></td>
        <td width="200">Debit</td>
        <td width="10">:</td>
        <td width="150">Rp. <?php echo $dupdate['debet_anggota']; ?></td>
      </tr>
      
        <tr>
        <td width="40" align="rigth"></td>
        <td width="200">Saldo</td>
        <td width="10">:</td>
        <td width="150">Rp. <?php echo $dupdate['saldo_anggota']; ?></td>
      </tr>

      
    </table>  
		
  <br/>
	<br/>

	<br/>
	<br/>     
		
<table border="0"   style="font-size:10px; cellspacing="3" cellpadding="3">
		
			<tr>
				<td width="40" align="rigth"></td>
				<td width="300">PETUGAS VERIFIKASI,</td>
				<td width="300">Banjarbaru, <?php echo date('j F Y'); ?></td>
			</tr>
			<tr>
			<td width="40" align="rigth"></td>
				<td width="300"><img src="../../gambar/1.jpg" width="70" height="70"/></td>
				<td width="300"><img src="../../gambar/1.jpg" width="70" height="70"/></td>
			</tr>
			<tr>
			<td width="40" align="rigth"></td>
				<td width="300"><?php echo $dupdate['username']; ?></td>
				<td width="300"> <?php echo $dupdate['nama']; ?></td>
			</tr>
			<tr>
			<td width="40" align="rigth"></td>
				<td width="300"></td>
				<td width="300"></td>
			</tr>
		</table>
		
	<br/>
<table border="0"   style="font-size:10px; cellspacing="3" cellpadding="3">
		
		
			<tr>
				<td width="40" align="rigth"></td>
				<td width="300" style="font-size:7px;">Catatan : </td>
			</tr>
			<tr>
				<td width="40" align="rigth"></td>
				<td width="300" style="font-size:7px;" >1. VERIFIED artinya Bukti Transaksi sudah terferivikasi oleh admin dan terferivikasi juga dari yang Melakukan Transaksi .</td>
			</tr>
			<tr>
				<td width="40" align="rigth"></td>
				<td width="300" style="font-size:7px;" >2. Bukti Transaksi ini diberikan secara otomatis oleh sistem aplikasi.</td>
			</tr>
			
			
		</table>
		<?php $no++; } ?>
</page>
<?php
    $content = ob_get_clean();

// conversion HTML => PDF
 require_once(dirname(__FILE__).'../../../html2pdf/html2pdf.class.php');
 try
 {
 $html2pdf = new HTML2PDF('P','A5', 'fr', false, 'ISO-8859-15');
 $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
 ob_end_clean();
 $html2pdf->Output();
 }
 catch(HTML2PDF_exception $e) { echo $e; }
?>
</html>