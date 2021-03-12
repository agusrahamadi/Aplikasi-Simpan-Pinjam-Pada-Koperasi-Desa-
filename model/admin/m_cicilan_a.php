<?php
	class m_cicilan_a{

		public $table 	= 'cicilan_a';
		public $id 		= 'peminjaman_a';
		public $find 	= 'peminjaman_a';

		public function __construct(){
			$db = new setting;
			$db->koneksi();
		}

		public function select($query=FALSE){

			return mysql_query("SELECT * FROM $this->table $query");
		
		}

		public function insert($id,$peminjaman,$cicilan,$perbulan,$type,$nama,$merek,$muka){

			$cek = $this->select(" WHERE peminjaman_a = '$peminjaman'");

			if (mysql_num_rows($cek)>=4) {
			
				echo "<script>alert('Data Sudah Ada');</script>";
			
			}else{
			
				return mysql_query("INSERT INTO $this->table VALUES('$id','$peminjaman','$cicilan','$perbulan','$type','$nama','$merek','$muka')");

			}
		}

		public function delete($id){
		
			return mysql_query("DELETE FROM $this->table WHERE $this->id = '$id'");
		
		}

		public function edit($id,$query=FALSE){

			return mysql_query("SELECT * FROM $this->table WHERE $this->id = '$id' $query");
		}

		public function update($pk,$id,$cicilan,$perbulan,$type,$nama,$merek,$muka){

			return mysql_query("UPDATE $this->table SET $this->id = '$id', cicilan_a = '$cicilan', perbulan_a = '$perbulan' , type = '$type', nama = '$nama', merek = '$merek', muka = '$muka' WHERE $this->id = '$pk'");

		}

		public function find($find){
			return mysql_query("SELECT * FROM $this->table WHERE $this->find LIKE '%$find%'");
		}
	}
?>