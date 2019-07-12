<?php 
    session_start();
    if(!isset($_SESSION['susername'])){
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
		<script src="../bootstrap4/js/bootstrap.js"></script>
		<script src="../bootstrap4/js/jquery.js"></script>
    <title>Admin Page</title>
</head>
<body>
<?php
    include "head.php"
?>
    <div class="container-fluid content">
        <h1>Selamat Datang <?php echo ucfirst($_SESSION['susername']) ?> </h1>
    </div>
</body>
</html>