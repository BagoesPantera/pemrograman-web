<div class="row justify-content-between">
    <div class="col-10"><b>Kategori</b></div>
    <div class="col-2 d-flex justify-content-end align-items-end">
        <a class="btn btn-dark btn-sm" href="http://localhost/web-program/P11/2101020016_bagoespantera/admin/index.php?page=kategori-add">Add</a>
    </div>
</div>
<hr>
<table class="table table-sm border border-dark">
    <thead class="thead-dark">
        <tr>
            <th scope="col" width="5%">No</th>
            <th scope="col">Nama</th>
            <th scope="col" width="15%">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $stmt = "SELECT * FROM `kategori`";
        $datas = mysqli_query($conn, $stmt);
        while ($data = mysqli_fetch_array($datas)) {
        ?>
        
            <tr>
                <th scope="row"><?= $data['id_kategori'] ?></th>
                <td><?= $data['nama_kategori'] ?></td>
                <td>
                    <button class="btn btn-dark btn-sm">Edit</button>
                    <a class="btn btn-dark btn-sm" href="index.php?page=kategori-del&id=<?= $data['id_kategori']; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
  </tbody>
</table>