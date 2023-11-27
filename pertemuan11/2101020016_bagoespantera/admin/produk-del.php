<?php
	$id = $_GET['id'];
	$result = mysqli_query($conn, "DELETE FROM produk WHERE id_produk=$id");
	header("Location:index.php?page=produk");
?>