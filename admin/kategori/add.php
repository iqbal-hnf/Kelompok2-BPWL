<!-- Begin Page Content -->
<h2>Add Kategori</h2><br>
<div class="container-fluid">
    <form action="<?= site_url('Admin/Aksiaddkategori'); ?>" method="post">


        <div class="mb-3">
            <label class="form-label">ID Kategori</label>
            <input type="text" name="id_kategori" class="form-control" required>
            <div name="id_kategori"></div>
        </div>
        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <input type="text" name="kategori" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->