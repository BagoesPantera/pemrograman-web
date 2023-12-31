<div class="row justify-content-between">
    <div class="col-10"><b>Produk</b></div>
    <div class="col-2 d-flex justify-content-end align-items-end">
        <a class="btn btn-dark btn-sm" href="index.php?page=produk-add">Add</a>
    </div>
</div>
<hr>
<table class="table table-sm border border-dark">
    <thead class="thead-dark">
        <tr>
            <th scope="col" width="5%">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Kategori</th>
            <th scope="col">Harga</th>
            <th scope="col">Gambar</th>
            <th scope="col" width="15%">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $stmt = "SELECT * FROM produk 
        JOIN kategori ON produk.id_produk=kategori.id_kategori
        ";
        $datas = mysqli_query($conn, $stmt);
        while ($data = mysqli_fetch_array($datas)) {
        ?>
        
            <tr>
                <th scope="row"><?= $data['id_produk'] ?></th>
                <td><?= $data['nama_produk'] ?></td>
                <td><?= $data['nama_kategori'] ?></td>
                <td><?= $data['harga'] ?></td>
                <td><?= $data['gambar'] ?></td>
                <td>
                    <button class="btn btn-dark btn-sm">Edit</button>
                    <a class="btn btn-dark btn-sm" href="index.php?page=produk-del&id=<?php echo $data['id_produk']; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
  </tbody>
</table>