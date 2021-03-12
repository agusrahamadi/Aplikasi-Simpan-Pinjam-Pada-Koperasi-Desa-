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
			
				<td style="font-size: 14px; width: 90%;" align="center;"><b> SIMPAN PINJAM KOPERASI</b></td>
			
				</tr>
		<tr><td style="font-size: 14px; width: 90%;" align="center;"><b> UNIT DESA PENURUS BARU</b></td></tr>
			
			<tr><td style="font-size: 10px; width: 92%;" align="center;">Parandakan, Kec. Lokpaikat,Kab. Tapin, Prov. Kalimantan Selatan, Kode Pos : 71154</td></tr>
		</table>
		<hr>
		<h5 align="center">LAPORAN DATA ANGSURAN KREDIT ALAT PERTANIAN</h5>
		<table  border="1" align="center" style="font-size: 8px; border-collapse: collapse; width: 100%;">
			<thead>
			<tr>
			<td align="center">&nbsp;No&nbsp;</td>
			<td align="center"> &nbsp; Tgl Angsuran &nbsp;</td>
			<td align="center"> &nbsp; Id Kredit &nbsp;</td>
			<td align="center"> &nbsp; Id Angggota &nbsp;</td>
			<td align="center"> &nbsp; Nama Peminjam &nbsp;</td>
			<td align="center"> &nbsp; Alat &nbsp;</td>
			<td align="center"> &nbsp; Merek/Type &nbsp;</td>
			<td align="center"> &nbsp; Angsuran Ke &nbsp;</td>
			<td align="center"> &nbsp; Angsuran &nbsp;</td>
			</tr>
			</thead>
		 <?php
		 $no=1;
				$mysqli= mysqli_connect("localhost","u8110790_us_kop","gUcZ1){kMrsl","u8110790_db_koperasi");
   
        $qupdate = "SELECT * FROM angsuran_a, anggota, admin WHERE angsuran_a.id_anggota = anggota.id_anggota AND angsuran_a.username = admin.username ";
        $rupdate = mysqli_query($mysqli, $qupdate);
        while($dupdate = mysqli_fetch_assoc($rupdate)){
			
       		?>
			<tbody>
<tr>
<td align="center">&nbsp;<?php echo $no ?>&nbsp;</td>
<td style="width:50px;" align="center">&nbsp;<?php echo $dupdate['tgl_angsuran_a']; ?>&nbsp;</td>
<td style="width:80px;" align="center">&nbsp;<?php echo $dupdate['id_peminjaman_a']; ?>&nbsp;</td>
<td style="width:80px;" align="center">&nbsp;<?php echo $dupdate['id_anggota']; ?>&nbsp;</td>
<td style="width:130px;" >&nbsp;<?php echo $dupdate['nama']; ?>&nbsp;</td>
<td style="width:130px;" >&nbsp;<?php echo $dupdate['nama_a']; ?>&nbsp;</td>
<td style="width:80px;" >&nbsp;<?php echo $dupdate['merek']; ?>/<?php echo $dupdate['type']; ?>&nbsp;</td>
<td style="width:70px;" align="center">&nbsp;<?php echo $dupdate['angsuran_ke']; ?>&nbsp;</td>
<td style="width:60px;" align="center">&nbsp;Rp. <?php echo  number_format($dupdate['perbulan_a'],0); ?>&nbsp;</td>
</tr>
</tbody>

<?php $no++; } ?>
		</table>
       
		
<p></p>
	
<br><br><br>

		<table border="0"   style="font-size:10px; cellspacing="3" cellpadding="3">
		
			<tr>
				<td width="40" align="rigth"></td>
				<td width="300"></td>
				<td width="300">Banjarbaru, <?php echo date('j F Y'); ?></td>
			</tr>
			<tr>
			<td width="40" align="rigth"></td>
				<td width="300"></td>
				<td width="300"><img src="../../gambar/1.jpg" width="70" height="70"/></td>
			</tr>
			<tr>
			<td width="40" align="rigth"></td>
				<td width="300"></td>
				<td width="300">Admin</td>
			</tr>
			<tr>
			<td width="40" align="rigth"></td>
				<td width="300"></td>
				<td width="300"></td>
			</tr>
		</table>

		
		
		<br />
        <p></p>
		<?php
		
        ?>
		<table border="0"  style="font-size: 16px; border-collapse: collapse; width: 100%;">
		<tr><td style="font-size: 10px; width: 92%;" > </td></tr>
		<tr><td style="font-size: 10px; width: 92%;" > </td></tr>
		<tr><td style="font-size: 10px; width: 92%;" > </td></tr>
		<tr><td style="font-size: 10px; width: 92%;" > </td></tr>
		<tr><td style="font-size: 10px; width: 92%;" > </td></tr>
		<tr><td style="font-size: 10px; width: 92%;" > </td></tr>
		<tr><td style="font-size: 10px; width: 92%;" > </td></tr>
		<tr><td style="font-size: 10px; width: 92%;" > </td></tr>
		<tr><td style="font-size: 10px; width: 92%;" > </td></tr>
		<tr><td style="font-size: 10px; width: 92%;" > </td></tr>
		<tr><td style="font-size: 10px; width: 92%;" > </td></tr>
		<tr><td style="font-size: 10px; width: 92%;" > </td></tr>
		<tr><td style="font-size: 10px; width: 92%;" > </td></tr>
		<tr><td style="font-size: 10px; width: 92%;" > </td></tr>
		<tr><td style="font-size: 10px; width: 92%;" > </td></tr>
		<tr><td style="font-size: 10px; width: 92%;" > </td></tr>
</table> 
</page>
<?php
    $content = ob_get_clean();

// conversion HTML => PDF
 require_once(dirname(__FILE__).'../../../html2pdf/html2pdf.class.php');
 try
 {
 $html2pdf = new HTML2PDF('L','A5', 'fr', false, 'ISO-8859-15');
 $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
 ob_end_clean();
 $html2pdf->Output();
 }
 catch(HTML2PDF_exception $e) { echo $e; }
?>
</html>