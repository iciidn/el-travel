<?php
class Mpendaftaran extends CI_Model{

	function kirim_pesan($nama,$password,$email,$kontak,$kelamin,$alamat){
		$hsl=$this->db->query("INSERT INTO customer(nama,password,email,kontak,kelamin,alamat) VALUES ('$nama','$password','$email','$kontak','$kelamin','$alamat')");
		return $hsl;
	}

	function get_all_inbox(){
		$hsl=$this->db->query("SELECT customer.*,DATE_FORMAT(tgl_buat,'%d %M %Y') AS tanggal FROM customer ORDER BY id DESC");
		return $hsl;
	}


}
