<?php
	class model {
		//inisialisasi awal untuk class biasa disebut instansiasi
		//Donah.com
		function __construct(){
			$this->connect = mysqli_connect ("localhost","root", "", "apotek");
		}
		function execute($query){
			return mysqli_query($this->connect,$query);
		}
		
		//Menampilkan data di tabel obat
		function selectobat(){
			$query = "select * from obat";
			return $this->execute($query);
		}
		
		//Menampilkan data di tabel obat & pembelian secara inner join
		function selectAll(){
			$query = "select pembelian.id_obat,pembelian.kode_obat,obat.nama_obat,obat.harga_obat,pembelian.tgl_pembelian
			from pembelian JOIN obat ON pembelian.kode_obat = obat.kode_obat";
			return $this->execute($query);
		}
		
		//Menampilkan data di tabel pembelian
		function select($id){
			$query = "select * from pembelian where id_obat='$id'";
			return $this->execute($query);
		}
		
		//Membuat fungsi Create / Input Data
		function insert($kode, $tanggal){
			$query = "insert into pembelian (kode_obat, tgl_pembelian) values ('$kode', '$tanggal')";
			return $this->execute($query);
		}
		
		//Membuat fungsi Delete / Hapus Data
		function delete($id){
			$query ="delete from pembelian where id_obat='$id'";
			return $this->execute($query);
		}
		
		//Membuat fungsi Update / Edit Data
		function update($id, $kode, $tanggal){
			$query = "update pembelian set kode_obat='$kode',
			tgl_pembelian='$tanggal' where pembelian.id_obat='$id'";
			//var_dump($query); die();
			return $this->execute($query);
		}
		
		//Menjalankan fungsi Array coding
		function fetch($var){
			return mysqli_fetch_array($var);
		}
		
		//Pasangan construct adalah destruct untuk menghapus inisialisasi class pada memori
		function __destruct(){
		}
	}
			
?>