<?php
session_start();
if(!isset($_SESSION['susername'])){
    header("location:login.php");
}
    include_once "head.php";
    
?>	
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
		<script src="bootstrap/js/bootstrap.js"></script>
		<script src="bootstrap/js/jquery.js"></script>
	</head>

	<body>
    <h1><center>TAMBAH PRODUK</center></h1>
		<div class="container-fluid">
			<form action="sv_tambah.php" method="post">
				<div class="form-group">
					<label form="fo02670nm"> Nama Produk : </label><input type="text" class="form-control" name="fo02670nm" id="fo02670nm">
				</div>

                <div class="form-group">
					<label form="fo02670hrgbl"> Harga Beli : </label><input type="text" class="form-control" name="fo02670hrgbl" id="fo02670hrgbl">
				</div>

                <div class="form-group">
					<label form="fo02670hrgjl"> Harga Jual : </label><input type="text" class="form-control" name="fo02670hrgjl" id="fo02670hrgjl">
				</div>
                <div class="form-group">
					<label form="fo02670jml"> Jumlah : </label><input type="text" class="form-control" name="fo02670jml" id="fo02670jml">
				</div>

				<!-- <button type="submit" class="btn btn-outline-success">Kembali <a href="updateMhs.php"></button> -->
				<button type="submit" class="btn btn-outline-success">Simpan</button>
                <a class="btn btn-outline-primary btn-sm pl-3 pr-3" href="updateProduk.php">Lihat Data</a>
				</div>
			</form>
		</div>
	</body>

	</html>