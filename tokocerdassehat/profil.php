<?php 
	session_start();
	include 'koneksi.php';
	if($_SESSION['status_login'] !=true){
		echo '<script>window.location="login.php"</script>';
	}

	$query = mysqli_query($conn,"SELECT * FROM tb_admin WHERE admin_id='".$_SESSION['admin']."'");
	$d = mysqli_fetch_object($query);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Toko Cerdas Sehat</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body >
	<!-- header -->
	<header>
		<div class="container">
			<h1><a href="dashboard.php">Toko Cerdas Sehat</a></h1>
			<ul>
				<li><a href="dashboard.php">Dashboard</a></li>
				<li><a href="profil.php">Profil</a></li>
				<li><a href="datakategori.php">Data Kategori</a></li>
				<li><a href="dataproduk.php">Data Produk</a></li>
				<li><a href="keluar.php">Keluar</a></li>
			</ul>
		</div>
	</header>

	<!-- content-->
	<div class="section">
		<div class="container">
			<h3>Profil</h3>
			<div class="box">
				<form action="" method="POST">
					<input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" value="<?php echo $admin ?>" required>
					<input type="text" name="user" placeholder="Username" class="input-control" value="<?php echo $_SESSION['username'] ?>" required>
					<input type="text" name="hp" placeholder="No Hp" class="input-control" value="<?php echo $_SESSION['admin'] ?>" required>
					<input type="email" name="email" placeholder="Email" class="input-control" value="<?php echo $_SESSION['admin'] ?>" required>
					<input type="text" name="alamat" placeholder="Alamat" class="input-control" value="<?php echo $_SESSION['admin'] ?>" required>
					<input type="submit" name="submit" value="Update Profil" class="button">
				</form>
			</div>
		</div>
	</div>

	<!--Footer-->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2022-Toko Cerdas Sehat</small>
		</div>
	</footer>

</body>
</html>