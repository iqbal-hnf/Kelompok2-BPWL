<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1>Kategori</h1>

    <a href="<?= site_url('Admin/addkategori'); ?>" class="btn btn-primary mb-3">Add Kategori</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID Kategori Buku</th>
                <th scope="col">Kategori Buku</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($tampilKategori as $key => $value) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $value['id_kategori']; ?></td>
                    <td><?php echo $value['kategori']; ?></td>
                    <td>
                        <a href="<?= site_url('Admin/editkategori') ?>/<?= $value['id_kategori']; ?>" class="badge badge-success">Edit </a> ||
                        <a href="<?= site_url('Admin/Aksideletekategori') ?>/<?= $value['id_kategori']; ?>" class="badge badge-danger">Delete</a>
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