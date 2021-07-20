<!-- Begin Page Content -->
<h2>Update User</h2><br>
<div class="container-fluid">
    <form action="<?= site_url('Admin/AksieditUser'); ?>" method="post">
        <div class="mb-3">
            <label class="form-label">ID</label>
            <input type="text" name="id" value="<?php echo $record->id ?>" class="form-control">
            <div name="id"></div>
        </div>
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" value="<?php echo $record->name ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" value="<?php echo $record->email ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Hak Akses</label>
            <input type="text" name="role_id" value="<?php echo $record->role_id ?>" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->