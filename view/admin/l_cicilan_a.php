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
		<h5 align="center">LAPORAN DATA KREDIT ALAT PERTANIAN </h5>
		<table  border="1" align="center" style="font-size: 8px; border-collapse: collapse; width: 100%;">
			<thead>
			<tr>
			<td rowspan="2" align="center">&nbsp;No&nbsp;</td>
			<td  rowspan="2" align="center"> &nbsp; Type &nbsp;</td>
			<td rowspan="2" align="center"> &nbsp; Nama Alat &nbsp;</td>
			<td rowspan="2" align="center"> &nbsp; Merek &nbsp;</td>
			<td rowspan="2" align="center"> &nbsp; Harga &nbsp;</td>
			<td rowspan="2" align="center"> &nbsp; Uang Muka &nbsp;</td>
			<td colspan="4" align="center"> &nbsp; Cicilan &nbsp;</td>
			</tr>
				<tr>
			<td align="center"> &nbsp; 6x &nbsp;</td>
			<td align="center"> &nbsp; 12x &nbsp;</td>
			<td align="center"> &nbsp; 18x &nbsp;</td>
			<td align="center"> &nbsp; 24x &nbsp;</td>
	</tr>
			</thead>
		 <?php
		 $no=1;
				$mysqli= mysqli_connect("localhost","u8110790_us_kop","gUcZ1){kMrsl","u8110790_db_koperasi");
   
        $qupdate = "SELECT * FROM cicilan_a GROUP BY peminjaman_a";
        $rupdate = mysqli_query($mysqli, $qupdate);
        while($dupdate = mysqli_fetch_assoc($rupdate)){
		$peminjaman_a=$dupdate['peminjaman_a'];	
       		?>
			<tbody>
<tr>
<td align="center">&nbsp;<?php echo $no ?>&nbsp;</td>
<td style="width:50px;" align="center">&nbsp;<?php echo  $dupdate['type']; ?>&nbsp;</td>
<td style="width:100px;" align="">&nbsp;<?php echo  $dupdate['nama']; ?>&nbsp;</td>
<td style="width:100px;" align="center">&nbsp;<?php echo  $dupdate['merek']; ?>&nbsp;</td>
<td style="width:80px;" align="center">&nbsp;Rp. <?php echo  number_format($dupdate['peminjaman_a'],0); ?>&nbsp;</td>
<td style="width:70px;" align="center">&nbsp;Rp. <?php echo  number_format($dupdate['muka'],0); ?>&nbsp;</td>
 <?php
       
   
        $q = "SELECT * FROM cicilan_a  WHERE peminjaman_a = '$peminjaman_a'";
        $a = mysqli_query($mysqli, $q);
        while($b = mysqli_fetch_assoc($a)){
		$perbulan = number_format($b['perbulan_a'],0,".",".");
		echo "<td>Rp. $perbulan</td>";
		}		
       		?>


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