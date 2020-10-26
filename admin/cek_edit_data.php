<?php
	// Muhammad Daffa ~ daffa.tech
	session_start();

	include '../config.php';

	$id = $_POST['id'];
	$link = $_POST['link'];
	$judul = $_POST['judul'];
	$deskripsi = $_POST['deskripsi'];

	$id = mysqli_real_escape_string($conn, $id);
	$link = mysqli_real_escape_string($conn, $link);
	$judul = mysqli_real_escape_string($conn, $judul);
	$deskripsi = mysqli_real_escape_string($conn, $deskripsi);

	if(empty($link) || empty($judul) || empty($deskripsi)) {
		header("Location: edit_data.php?id=$id");
		echo '<script>alert("Input data terlebih dahulu")</script>';
	} else {

	$query = "UPDATE list_url SET link='$link',judul='$judul',deskripsi = '$deskripsi' WHERE id='$id'";

	$data = mysqli_query($conn, $query);

	$cek = mysqli_num_rows($data);

	if ($cek >= 0) {
		header("Location: dashboard.php");
	} else {
		echo '<script>alert("Edit data gagal")</script>';
	}
}

?>