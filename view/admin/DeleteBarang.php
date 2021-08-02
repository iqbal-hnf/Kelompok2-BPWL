<?php
include "koneksi.php";

$id = $_GET['br_id'];

if(!empty($id)){
    mysqli_query($koneksi, "DELETE FROM barang WHERE br_id = $id");

    echo "
    <script> 
    alert('Data Berhasil Dihapus!');
    document.location.href = 'index.php';
    </script>
    ";

}else{
    echo "Delete Gagal";
}
?>