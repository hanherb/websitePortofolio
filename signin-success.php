<?php
	session_start();
	echo "Hai anda telah login sebagai " . $_SESSION['nama'] . ".<br><br>";
	echo "Klik <a href='index.php'>disini </a>untuk kembali ke home";
?>