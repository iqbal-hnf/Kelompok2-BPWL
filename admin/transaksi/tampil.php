<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1>Transaksi</h1>

    <a href="<?= site_url('Admin/addtransaksi'); ?>" class="btn btn-primary mb-3">Add Transaksi</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID Transaksi</th>
                <th scope="col">ID Buku</th>
                <th scope="col">ID User</th>
                <th scope="col">Tanggal Beli</th>
                <th scope="col">Jumlah Beli</th>
                <th scope="col">Total</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($tampilTransaksi as $key => $value) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $value['id_transaksi']; ?></td>
                    <td><?php echo $value['id_buku']; ?></td>
                    <td><?php echo $value['id_user']; ?></td>
                    <td><?php echo $value['tgl_beli']; ?></td>
                    <td><?php echo $value['jml_beli']; ?></td>
                    <td><?php echo $value['total']; ?></td>
                    <td>
                        <a href="<?= site_url('Admin/edittransaksi') ?>/<?= $value['id_transaksi']; ?>" class="badge badge-success">Edit </a> ||
                        <a href="<?= site_url('Admin/Aksideletetransaksi') ?>/<?= $value['id_transaksi']; ?>" class="badge badge-danger">Delete</a>
                    </td>
                </tr>

            <?php
            }
            ?>
        </tbody>
    </table>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->