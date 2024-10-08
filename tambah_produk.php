<?php
require "db.php";

if (isset($_POST['nama_produk']) && $_POST['nama_produk'] != '')
{
    $nama = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $tambah_produk= $db->query("INSERT INTO produk (nama_produk, harga, deskripsi) VALUES ('$nama', '$harga','$deskripsi')");
    if($tambah_produk)
        {
            echo "<script>alert('data berhasil di tambah')
            window.location='produk.php';
            </script>";
        }
        else{
            echo "<script>alert('data gagal tambah')
            window.location='produk.php';
            </script>";
        }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <style>
        body {
            font-family: Poppins;
        }
        .container {
            max-width: 300px;
            box-shadow: 0 0 5px grey;
            overflow: hidden;
            border-radius: 10px;
            margin:0 auto;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
        }
        .form-container {
            width: 200px;
            display: table;
            margin: 0 auto;
        }
        .input-group {
            margin: 15px 0;
            text-align: center;
        }
        label {
            display: block;
            text-align: start;
            margin: 5px 0 5px 8px;
        }
        input {
            padding: 5px 10px;
        }
        input[type="submit"] {
            cursor: pointer;
            margin-bottom: 20px;
            padding: 7px 70px;
        }
         a{
    text-decoration: none;
    color: white;
    padding: 5px 10px;
    border-radius: 5px;
    font-weight: bold;
    background-color: rgb(255, 145, 0);
    font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Produk</h1>
        <div class="form-container">
            <form method="POST">
                <!-- INPUT NAMA -->
                <div class="input-group">
                    <label>Nama Produk</label>
                    <input type="text" name="nama_produk">
                    <label>Harga</label>
                    <input type="text" name="harga">
                    <label>Deskripsi</label>
                    <input type="text" name="deskripsi">
                </div>
                <!-- SUBMIT BUTTON -->
                <div class="input-group">
                    <input type="submit" name="submit" value="Tambah">
                    <a href="produk.php">Kembali</a>
                </div>
            </form>
        </div>
    </div>
    </body>
    </html>