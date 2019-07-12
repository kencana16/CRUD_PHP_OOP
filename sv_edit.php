<?php

//koneksi ke function
include "produkControlls.php";

$produk = new produk;
    $id  = $_POST ['fo02670id'];
    $nmproduk = $_POST ['fo02670nm'];
    $hrgbeli = $_POST ['fo02670hrgbl'];
    $hrgjl = $_POST ['fo02670hrgjl'];
    $jml  = $_POST ['fo02670jml'];
	
	$produk->update_produk($id,$nmproduk,$hrgbeli,$hrgjl,$jml);
	
	
	//kembali ke form
	header ("location: updateProduk.php");
?>