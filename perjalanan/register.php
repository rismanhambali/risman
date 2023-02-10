<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset="UTF-8">
		<title>Aplikasi Catatan Perjalanan</title>
		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="asset/css/style1.css">
		
<body>
	<div class="login-form">
		<form action="tambah_register.php"method="POST">
			<h1><img src="asset/img/logo/mon.png"height="50px"><p>REGISTER / DAFTAR PENGGUNA BARU</h1>
				<div class="content">
					<div class="input-field">
					<input type="number"name="nik" placeholder="Masukan NIK"required>
					</div>
					<div class="input-field">
					<input type="text"name="nama" placeholder="Masukan Nama Lengkap"required>
					</div>
				</div>
				<div class="action">
					<button onclick="window.location.href='index.php'" class="btn mr-2">Cancel</button>
					<button type="submit"class="btn mr-2">Register</button>
				</div>
		</form>
	</div>
	<! -- partial -- >
	<script src="script.js"></script>
	
	
</body>
</html>