<!-- Muhammad Daffa ~ daffa.tech-->
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1 class="text-center my-5">Tambah Data</h1>
		<form action="cek_tambah_data.php" method="post" align="center" class="my-5">
			<div class="form-group">
				<label for="link">Link gambar: </label>
				<input class="form-control" type="link" name="link" maxlength="500">
			</div>
			<div class="form-group">
				<label for="judul">Judul webinar: </label>
				<input class="form-control" type="judul" name="judul" maxlength="500">
			</div>
			<div class="form-group">
				<label for="deskripsi">Deskripsi webinar: </label>
				<input class="form-control" type="deskripsi" name="deskripsi" maxlength="500">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			<br>
			<a href="dashboard.php">Go Back to Dashboard</a>
		</form>
	</div>
</body>
</html>