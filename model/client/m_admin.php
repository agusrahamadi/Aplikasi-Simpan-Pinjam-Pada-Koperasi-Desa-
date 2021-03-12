<?php
	class m_admin{

		public $table 	= 'anggota';
		public $id 		= 'id_anggota';
		public $find 	= 'id_anggota';

		public function __construct(){
			$db = new setting;
			$db->koneksi();
		}

		public function select(){

			return mysql_query("SELECT * FROM $this->table");
		
		}

		public function insert($id,$password,$nama,$status){

			$cek = $this->edit($id);

			if (mysql_num_rows($cek)>0) {
			
				echo "<script>alert('Data Sudah Ada');</script>";
			
			}else{
			
				return mysql_query("INSERT INTO $this->table VALUES('$id','$password','$nama','$status')");

			}
		}

		public function delete($id){
		
			return mysql_query("DELETE FROM $this->table WHERE $this->id = '$id'");
		
		}

		public function edit($id){

			return mysql_query("SELECT * FROM $this->table WHERE $this->id = '$id'");
		}

		public function update($id_anggota,$nama,$password){

			return mysql_query("UPDATE $this->table SET   nama = '$nama', password = '$password' WHERE $this->id = '$id_anggota'");

		}

		public function find($find){
			return mysql_query("SELECT * FROM $this->table WHERE $this->find LIKE '%$find%'");
		}
	}
?>