
<?php
include "koneksi.php";

$q6 	= mysqli_fetch_array(mysqli_query($koneksi, "select * from cicilan where peminjaman='$_GET[peminjaman]' AND cicilan = '6'"));
$q12 	= mysqli_fetch_array(mysqli_query($koneksi, "select * from cicilan where peminjaman='$_GET[peminjaman]' AND cicilan = '12'"));
$q18 	= mysqli_fetch_array(mysqli_query($koneksi, "select * from cicilan where peminjaman='$_GET[peminjaman]' AND cicilan = '18'"));
$q24 	= mysqli_fetch_array(mysqli_query($koneksi, "select * from cicilan where peminjaman='$_GET[peminjaman]' AND cicilan = '24'"));

$data_pegawai = array(
					'cicilan6'    		=>  number_format($q6['perbulan'],0) ,
					'cicilan12'    		=>  number_format($q12['perbulan'],0) ,
					'cicilan18'    		=>  number_format($q18['perbulan'],0) ,
					'cicilan24'    		=>  number_format($q24['perbulan'],0) ,);
 echo json_encode($data_pegawai);
