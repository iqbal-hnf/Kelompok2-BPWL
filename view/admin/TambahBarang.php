<?php 
include 'koneksi.php';
if (isset($_POST["submit"])){
   
    $id = htmlspecialchars($_POST["br_id"]);
    $nama = htmlspecialchars ($_POST["br_nm"]);
    $harga = htmlspecialchars($_POST["br_hrg"]);
    $stok = htmlspecialchars($_POST["br_stok"]);
    $satuan = htmlspecialchars($_POST["br_satuan"]);
    $ket = htmlspecialchars($_POST['ket']);
    $status = htmlspecialchars($_POST['br_sts']);

    $dir = "../Konsumen/gambar/";

    $target = $dir . basename($_FILES["br_gbr"]['name']);	
    $validator = 1;
    $imagefiletype = strtolower(pathinfo($target, PATHINFO_EXTENSION));
    $check = getimagesize($_FILES['br_gbr']['tmp_name']);
    $gambar = $_FILES["br_gbr"]["name"];

    if ($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $validator = 1;
    } else {
      echo "file not an image";
      $validator = 0;
    }
  
    if ($validator === 1) {
      if (move_uploaded_file($_FILES["br_gbr"]["tmp_name"], $target)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["br_gbr"]["name"])). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    } else {
      echo "upload file anda gagal";
    }
  

    $query = "INSERT INTO barang VALUES ('$id','$nama','$harga','$stok','$satuan','$gambar','$ket','$status')";
    mysqli_query($koneksi,$query);
    
    if (mysqli_affected_rows($koneksi)>0  ){
      
      echo "
      <script> 
      alert('Data Berhasil Ditambahkan!');
      document.location.href = 'index.php';
      </script>
      ";
    }else {
      echo "gagal";
      echo "<br>";
      echo mysqli_error($koneksi);
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
    <h2 class="text-center">TAMBAH DATA</h2>
</head>

<body>
<div class="container">
<form action="" method="post" enctype="multipart/form-data">
<hr>
<input class="form-control" type="text" placeholder="Masukkan ID" name="br_id" required><br>
<input class="form-control" type="text" placeholder="Masukkan Nama Barang" name="br_nm" required><br>
<input class="form-control" type="number" placeholder="Masukkan Harga Barang" name="br_hrg" required><br>
<input class="form-control" type="number" placeholder="Masukkan Stock Barang " name="br_stok" required><br>
<input class="form-control" type="text" placeholder="Masukkan Satuan Barang" name="br_satuan" required><br>
<input class="form-control" type="file" placeholder="Masukkan Gambar" name="br_gbr" required><br>
<input class="form-control" type="text" placeholder="Masukkan keterangan" name="ket" required><br>
<input class="form-control" type="text" placeholder="Masukkan Status" name="br_sts" required><br>
<div class="d-grid gap-2">
  <button class="btn btn-success" input type="submit" name="submit">Submit</button>
</div>
</hr>
</div>
</form>
</body>
</html>
?>