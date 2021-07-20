<!-- Begin Page Content -->
<h2>Update Transaksi</h2><br>
<div class="container-fluid">
    <form action="<?= site_url('Admin/Aksiedittransaksi'); ?>" method="post">


        <div class="mb-3">
            <label class="form-label">ID Transaksi</label>
            <input type="text" name="id_transaksi" value="<?php echo $record->id_transaksi ?>" class="form-control">
            <div name="id_transaksi"></div>
        </div>
        <div class="mb-3">
            <label class="form-label">ID Buku</label>
            <input type="text" name="id_buku" value="<?php echo $record->id_buku ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">ID User</label>
            <input type="text" name="id_user" value="<?php echo $record->id_user ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tanggal Beli</label>
            <input type="date" name="tgl_beli" value="<?php echo $record->tgl_beli ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Jumlah Beli</label>
            <input type="text" name="jml_beli" value="<?php echo $record->jml_beli ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Total</label>
            <input type="text" name="total" value="<?php echo $record->total ?>" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->