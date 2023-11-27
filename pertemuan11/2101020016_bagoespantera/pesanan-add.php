<?php  
if (isset($_POST['submit'])) {

    $id       = $_POST["id_produk"]; 
    $jumlah   = $_POST["jumlah"]; 

    include "../koneksi.php";

    $queryPesanan = "INSERT INTO pesanan (tanggal_pesanan) VALUES (NOW())";
    $resultPesanan = mysqli_query($conn, $queryPesanan);

    if ($resultPesanan) {

        $idPesanan = mysqli_insert_id($conn);

		$reset	= "alter table detail_pesanan AUTO_INCREMENT = 1";
		$query	= mysqli_query($conn,$reset);

        $queryDetailPesanan = "INSERT INTO detail_pesanan (id_produk, jumlah, id_pesanan) VALUES ('$id', '$jumlah', '$idPesanan')";
        $resultDetailPesanan = mysqli_query($conn, $queryDetailPesanan);

    }

    mysqli_close($conn);
    header("Location: index.php");
}
?> 