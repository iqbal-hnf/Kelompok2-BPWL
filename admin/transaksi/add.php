<!-- Begin Page Content -->
<h2>Add Transaksi</h2><br>
<div class="container-fluid">
    <form action="<?= site_url('Admin/Aksiaddtransaksi'); ?>" method="post">


        <div class="mb-3">
            <label class="form-label">ID Transaksi</label>
            <input type="text" name="id_transaksi" class="form-control" required>
            <div name="id_transaksi"></div>
        </div>
        <div class="mb-3">
            <label class="form-label">ID Buku</label>
            <input type="text" name="id_buku" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">ID User</label>
            <input type="text" name="id_user" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tanggal Beli</label>
            <input type="date" name="tgl_beli" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Jumlah Beli</label>
            <input type="text" name="jml_beli" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Total</label>
            <input type="text" name="total" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->