<?php
//koneksi ke function
include "produkControlls.php";

$produk= new produk;
//salin data ke variabel simpel
$id  = $_POST ['fo02670id'];
$nmproduk = $_POST ['fo02670nm'];
$hrgbeli = $_POST ['fo02670hrgbl'];
$hrgjl = $_POST ['fo02670hrgjl'];
$jml  = $_POST ['fo02670jml'];


$qry = $produk->tambah_produk($id,$nmproduk,$hrgbeli,$hrgjl,$jml);


//kembali ke form setelah selesai mengisi form
header("location:updateProduk.php");
?>