
<?php 
include 'koneksi.php';
$id = $_GET['br_id'];
$query = mysqli_query($koneksi, "SELECT * FROM barang WHERE br_id = '$id'");
$m = mysqli_fetch_object($query);

if (isset($_POST["submit"])){
    $id = htmlspecialchars($_POST["br_id"]);
    $nama = htmlspecialchars ($_POST["br_nm"]);
    $harga = htmlspecialchars($_POST["br_hrg"]);
    $stok = htmlspecialchars($_POST["br_stok"]);
    $satuan = htmlspecialchars($_POST["br_satuan"]);
    $ket = htmlspecialchars($_POST['ket']);
    $status = htmlspecialchars($_POST['br_sts']);
    $gambar = $_FILES['br_gbr']['name'];
    if($gambar!=null){
      $dir = '../gambar/';
      $gambar_temporary = $_FILES['br_gbr']['file'];
      move_uploaded_file($gambar_temporary, $dir.$gambar);
    }else{
      $gambar = $m->br_gbr;
    }
    if (!empty($id) && !empty($nama) && !empty($harga) && !empty($stok) && !empty($satuan) && !empty($ket) && !empty($status)){

        mysqli_query($koneksi, "UPDATE barang SET br_id=$id ,`br_nm`='$nama',`br_hrg`='$harga',`br_stok`='$stok',`br_satuan`='$satuan',`br_gbr`='$gambar',`ket`='$ket',`br_sts`='$status' WHERE br_id = $id");

        header('location:index.php');
    }else{
        echo "Update Gagal";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <title>Tambah Data Barang</title>
    <h2 class="text-center">UPDATE DATA BARANG</h2>
</head>
<div class="container">
<hr>
<form action="" method="post" enctype="multipart/form-data">
    <input class="form-control" type="hidden" value="<?= $m->br_id ?>" placeholder="Masukkan ID" name="br_id" required><br>
<input class="form-control" type="text" value="<?= $m->br_nm ?>" placeholder="Masukkan Nama Barang" name="br_nm" required><br>
<input class="form-control" type="number" value="<?= $m->br_hrg ?>" placeholder="Masukkan Harga Barang" name="br_hrg" required><br>
<input class="form-control" type="number" value="<?= $m->br_stok ?>" placeholder="Masukkan Stock Barang " name="br_stok" required><br>
<input class="form-control" type="text" value="<?= $m->br_satuan?>" placeholder="Masukkan Satuan Barang" name="br_satuan" required><br>
<input class="form-control" type="file" placeholder="Masukkan Gambar" name="br_gbr" ><br>
<input class="form-control" type="text" value="<?= $m->ket ?>" placeholder="Masukkan keterangan" name="ket" required><br>
<input class="form-control" type="text" value="<?= $m->br_sts ?>" placeholder="Masukkan Status" name="br_sts" required><br>
<input type="submit" name="submit" class="btn btn-success" value="Update">
    </form>
</div>
</body>
</html>