<?php
include 'koneksi.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <title>Barang</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Tabel Data Barang</h1>
        <div class="row text-center">
            <a href="formtambah.php">Tambah Data</a>
            <table class="table table-danger table-striped" border="3">
                <div>
                    <thead>
                        <tr class="table-info">
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Item</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Satuan</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        $query  = mysqli_query($koneksi, "SELECT * FROM barang");
                        while ($value = mysqli_fetch_array($query)) {
                            $i++;
                        ?>
                            <tr>
                                <td><?=$value['br_id']; ?></td>
                                <td><?=$value['br_nm']; ?></td>
                                <td><?=$value['br_item']; ?></td>
                                <td><?=$value['br_hrg']; ?></td>
                                <td><?=$value['br_stok']; ?></td>
                                <td><?=$value['br_satuan']; ?></td>
                                <td><?=$value['br_gbr']; ?></td>
                                <td><?=$value['ket']; ?></td>
                                <td><?=$value['br_sts']; ?></td>
                                <td>
                                    <a href="formedit.php?id=<?= $c['id_2055301117'] ?>" ">Edit</a>
                                    <a href="hapusdb.php?id=<?= $c['id_2055301117'] ?>" ">Hapus</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </div>
            </table>
        </div>
    </div>
</body>
<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>

