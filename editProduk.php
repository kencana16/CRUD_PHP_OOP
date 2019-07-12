<?php
        session_start();
        if(!isset($_SESSION['susername'])){
            header("location:login.php");
        }
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
		<script src="bootstrap/js/bootstrap.js"></script>
		<script src="bootstrap/js/jquery.js"></script>
    </head>
	<body>
		<div class="container-fluid">
            <?php
                include "head.php";
			    require "produkControlls.php";
				$qid = $_GET['qid'];
				$produk = new produk;
				foreach($produk->edit_produk($qid) as $data){
           ?>
			<h1><center>Edit Produk</center></h1>
				<form action= "sv_edit.php?qid=<?php echo $qid ?>" method="post">
                
                <div class="form-group">
						<label for="fo02670id">Id Produk :</label>	
						<input class="form-control" type="text" name="fo02670id" id="fo02670id" value="<?php echo $qid; ?>" readonly>
				</div>
				<div class="form-group">
					<label form="fo02670nm"> Nama Produk : </label><input type="text" class="form-control" name="fo02670nm" id="fo02670nm" value="<?php echo $data['nmproduk']; ?>" required >
				</div>

                <div class="form-group">
					<label form="fo02670hrgbl"> Harga Beli : </label><input type="text" class="form-control" name="fo02670hrgbl" id="fo02670hrgbl" value="<?php echo $data['hrgbeli']; ?>">
				</div>

                <div class="form-group">
					<label form="fo02670hrgjl"> Harga Jual : </label><input type="text" class="form-control" name="fo02670hrgjl" id="fo02670hrgjl" value="<?php echo $data['hrgjual']; ?>">
				</div>
                <div class="form-group">
					<label form="fo02670jml"> Jumlah : </label><input type="text" class="form-control" name="fo02670jml" id="fo02670jml" value="<?php echo $data['jmlproduk']; ?>">
				</div>
					
					
					<button type="submit" name="submit" class="btn">submit</button>
				<?php };?>
				</form>
		</div>
	</body>
</html>
