<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1>User</h1>

    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Hak Akses</th>
                <th scope="col">Tanggal Bergabung</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($tampilUser as $key => $value) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $value['id']; ?></td>
                    <td><?php echo $value['name']; ?></td>
                    <td><?php echo $value['email']; ?></td>
                    <td><?php echo $value['role_id']; ?></td>
                    <td><?= date('d F Y', $value['date_created']); ?></td>
                    <td>
                        <a href="<?= site_url('Admin/editUser') ?>/<?= $value['id']; ?>" class="badge badge-success">Edit </a> ||
                        <a href="<?= site_url('Admin/Aksideleteuser') ?>/<?= $value['id']; ?>" class="badge badge-danger">Delete</a>
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