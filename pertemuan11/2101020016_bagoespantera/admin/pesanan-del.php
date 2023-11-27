<?php
	$id = $_GET['id'];
	$result = mysqli_query($conn, "DELETE FROM pesanan WHERE id_pesanan=$id");
	header("Location:index.php?page=pesanan");
?>