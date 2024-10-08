<?php

require "db.php";

$id_get=$_GET['id'];
$hapus_produk="DELETE FROM produk WHERE id='$id_get'";
$hapus = $db->query($hapus_produk);

if($hapus)
{
    echo "<script>
    alert('data berhasil di hapus')
    window.location='produk.php';
    </script>";
}
else{
    echo "<script>
    alert('data gagal dihapus')
    window.location='produk.php';
    </script>";
}