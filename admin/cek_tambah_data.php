<?php
	// Muhammad Daffa ~ daffa.tech
	session_start();

	include '../config.php';

	$link = $_POST['link'];
	$judul = $_POST['judul'];
	$deskripsi = $_POST['deskripsi'];

	$link = mysqli_real_escape_string($conn, $link);
	$judul = mysqli_real_escape_string($conn, $judul);
	$deskripsi = mysqli_real_escape_string($conn, $deskripsi);

	if(empty($link) || empty($judul) || empty($deskripsi)) {
		header("Location: tambah_data.php");
		echo '<script>alert("Input data terlebih dahulu")</script>';
	} else {

	$query = "INSERT INTO list_url
				VALUES (
				'',
				'$link',
				'$judul',
				'$deskripsi'
			)";

	$data = mysqli_query($conn, $query);

	$cek = mysqli_num_rows ($data);

	if ($cek >= 0) {
		echo '<script>alert("Input data berhasil")</script>';
		header("Location: dashboard.php");
	} else {
		echo '<script>alert("Input data gagal")</script>';
	}
}

?>