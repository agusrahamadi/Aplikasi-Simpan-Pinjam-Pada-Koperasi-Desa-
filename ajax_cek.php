
<?php
include "koneksi.php";
$pegawai = mysqli_fetch_array(mysqli_query($koneksi, "select * from cicilan_a where peminjaman_a='$_GET[peminjaman_a]'"));
$q6 	= mysqli_fetch_array(mysqli_query($koneksi, "select * from cicilan_a where peminjaman_a='$_GET[peminjaman_a]' AND cicilan_a = '6'"));
$q12 	= mysqli_fetch_array(mysqli_query($koneksi, "select * from cicilan_a where peminjaman_a='$_GET[peminjaman_a]' AND cicilan_a = '12'"));
$q18 	= mysqli_fetch_array(mysqli_query($koneksi, "select * from cicilan_a where peminjaman_a='$_GET[peminjaman_a]' AND cicilan_a = '18'"));
$q24 	= mysqli_fetch_array(mysqli_query($koneksi, "select * from cicilan_a where peminjaman_a='$_GET[peminjaman_a]' AND cicilan_a = '24'"));

$data_pegawai = array('harga'   	=>  number_format($pegawai['peminjaman_a'],0),
              		'nama'    		=>  $pegawai['nama'],
              		'merek'    		=>  $pegawai['merek'],
              		'type'    		=>  $pegawai['type'],
              		'muka'    		=>  number_format($pegawai['muka'],0),
					'cicilan6'    		=>  number_format($q6['perbulan_a'],0) ,
					'cicilan12'    		=>  number_format($q12['perbulan_a'],0) ,
					'cicilan18'    		=>  number_format($q18['perbulan_a'],0) ,
					'cicilan24'    		=>  number_format($q24['perbulan_a'],0) ,);
 echo json_encode($data_pegawai);
