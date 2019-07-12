<nav class="navbar navbar-expand-sm bg-warning navbar-light sticky-top">
	<a class="navbar-bvrand" href="../login/homeadmin.php">
		<img src="emot.jpg" style="width:50px;">
	</a>
	
	<span class="navbar-text"><h3>&nbsp;<a href="admin.php"> Admin TOKO Buku </a>&nbsp;</h3></span>
	<!-- Toggler/collapsibe Button -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibeNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="collapsibeNavbar">
		<ul class="navbar-nav">
			<li class="nav-item action">
				<a class="nav-link" href="updateProduk.php">Produk</a>
			</li>
			
		</ul>
	</div>
	<span class="badge  p-2 m-2">
		<img src="../img/user.png" style="width:15px; margin-right:5px">
		<?php echo ucfirst($_SESSION['susername'])?>
	</span>
	<a class="btn btn-sm btn-danger" href="logout.php">LOGOUT</a>
</nav>
<br/>
<br/>