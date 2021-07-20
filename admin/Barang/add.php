<!-- Begin Page Content -->
<h2>Add Barang</h2><br>
<div class="container-fluid">
    <form action="<?= site_url('Admin/Aksiaddbuku'); ?>" method="post">


        <div class="mb-3">
            <label class="form-label">ID Barang</label>
            <input type="text" name="id_buku" class="form-control" required>
            <div name="id_buku"></div>
        </div>
        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Penerbit</label>
            <input type="text" name="penerbit" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Pengarang</label>
            <input type="text" name="pengarang" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tahun</label>
            <input type="date" name="tahun" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">ID Kategori</label>
            <input type="text" name="id_kategori" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Gambar</label>
            <input type="text" name="gambar" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="text" name="harga" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->