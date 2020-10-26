<?php
	// Muhammad Daffa ~ daffa.tech
	session_start();

	include('../config.php');

	if($_SESSION["status_login_admin"] != "true") {
		header("Location: index.php?pesan=belum_login");
	}

	$sql = "SELECT * FROM list_url";
	$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1>Welcome back <?php echo $_SESSION["username_admin"] ?></h1>
		<form action="logout.php" method="post" class="mb-3">
			<button type="submit" class="btn btn-primary">Logout</button>
			<a href="tambah_data.php" class="btn btn-secondary">Tambah Data</a>
		</form>
		<table class="table table-bordered">
			<tr>
				<th><?php echo 'ID' ?></th>
				<th><?php echo 'Link gambar' ?></th>
				<th><?php echo 'Judul Webinar' ?></th>
				<th><?php echo 'Deskripsi Webinar' ?></th>
				<th><?php echo 'Update' ?></th>
			</tr>
			<?php  
			    while($row = mysqli_fetch_array($result)) {         
			        echo "<tr>";
			        echo "<td>".$row['id']."</td>";
			        echo "<td>".htmlspecialchars($row['link'], ENT_QUOTES)."</td>";
			        echo "<td>".htmlspecialchars($row['judul'], ENT_QUOTES)."</td>";
			        echo "<td>".htmlspecialchars($row['deskripsi'], ENT_QUOTES)."</td>";    
			        echo "<td><a href='edit_data.php?id=$row[id]'>Edit</a> | <a href='delete_data.php?id=$row[id]'>Delete</a></td></tr>";
    			}
    		?>
		</table>
	</div>
</body>
</html>