<?php
	$host='localhost';
	$user='root';
	$password='';
	$banco='db_recuTpi';

	$conn= new mysqli($host, $user, $password, $banco);
	if (!$conn) {
		echo "¯\_(ツ)_/¯ erro ai véi";
	}
?>