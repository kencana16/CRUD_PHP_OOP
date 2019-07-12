<?php
	//koneksi ke function
include "produkControlls.php";

$produk= new produk;

	$qid = $_GET['qid'];

   //buat perintah sql
	$produk->hapus_produk($qid);
?>