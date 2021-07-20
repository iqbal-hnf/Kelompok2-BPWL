<!-- Begin Page Content -->
<h2>Update Kategori</h2><br>
<div class="container-fluid">
    <form action="<?= site_url('Admin/Aksieditkategori'); ?>" method="post">


        <div class="mb-3">
            <label class="form-label">ID Kategori</label>
            <input type="text" name="id_kategori" value="<?php echo $record->id_kategori ?>" class="form-control">
            <div name="id_kategori"></div>
        </div>
        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <input type="text" name="kategori" value="<?php echo $record->kategori ?>" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->