<!-- Begin Page Content -->
<h2>Update Buku</h2><br>
<div class="container-fluid">
    <form action="<?= site_url('Admin/Aksieditbuku'); ?>" method="post">


        <div class="mb-3">
            <label class="form-label">ID Buku</label>
            <input type="text" name="id_buku" value="<?php echo $record->id_buku ?>" class="form-control">
            <div name="id_buku"></div>
        </div>
        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="judul" value="<?php echo $record->judul ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Penerbit</label>
            <input type="text" name="penerbit" value="<?php echo $record->penerbit ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Pengarang</label>
            <input type="text" name="pengarang" value="<?php echo $record->pengarang ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Tahun</label>
            <input type="date" name="tahun" value="<?php echo $record->tahun ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">ID Kategori</label>
            <input type="text" name="id_kategori" value="<?php echo $record->id_kategori ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Gambar</label>
            <input type="text" name="gambar" value="<?php echo $record->gambar ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="text" name="harga" value="<?php echo $record->harga ?>" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->