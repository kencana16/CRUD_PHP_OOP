<?php
    
        session_start();
        if(!isset($_SESSION['susername'])){
            header("location:login.php");
        }
        include "head.php";
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
<?php
    //memanggil file berisi perintah koneksi
    require "produkControlls.php";

	 //tampilkan data
     $produk = new produk;
     $qry = $produk->tampil_produk();
?>
<div class="container-fluid">
    <h2 class="text-center">Daftar Produk</h2>
    <!-- cetak data dengan tampilan Tabel -->
	<br>
	<a class="btn btn-outline-success btn-sm pl-3 pr-3" href="tambah_Produk.php">Tambah Produk</a>
    <br>
	<br>
	<table class="table table-hover">
        <thead>
            <tr>
                <th>ID Produk</th>
                <th>Nama Produk </th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Jumlah Produk</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //Jika data tidak ada
            while($row=$produk->fetch($qry)){
            ?>
            <tr>
            <td><?php echo $row ["id_produk"] ?></td>
                <td><?php echo $row ["nmproduk"] ?></td>
                <td><?php echo $row ["hrgbeli"] ?></td>
                <td><?php echo $row ["hrgjual"] ?></td>
                <td><?php echo $row ["jmlproduk"] ?></td> 
                <td>
                    <a class="btn btn-sm btn-primary" href="editProduk.php?qid=<?php echo $row['id_produk'] ?>">Edit</a>
                    <a class="btn btn-sm btn-danger" href="hpsProduk.php?qid=<?php echo $row['id_produk'] ?>"onclick="return confirm('Yakin Hapus?')">Hapus</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
        </table>
        </div>
        </body>
</html>