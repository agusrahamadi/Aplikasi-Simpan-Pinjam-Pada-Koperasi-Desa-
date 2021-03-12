
<?php

    $mysqli= mysqli_connect("localhost","root","","db_koperasi"); 
	$id_anggota = $_GET['id_anggota'];
       
     header("location:?mod=profile&id=$id_anggota");

		?>