<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Halaman Utama</title>

</head>

<body>

	<div id="container">
		<h1>Selamat Datang.!</h1>

		<div id="body">
			<p>Ini merupakan halaman web pertama kali saya buat...
				tretan coding.......
			</p>

			<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
		</div>

</body>

</html>