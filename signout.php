<?php
	session_start();
	echo "Hai " . $_SESSION['nama'] . " ";
	session_destroy();
	echo "Anda telah berhasil logout.<br><br>";
	echo "Klik <a href='index.php'>disini </a>untuk kembali ke home";
?>