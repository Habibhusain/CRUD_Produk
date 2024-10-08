<?php
require "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Legal</title>
    <style>
        
        a{
    text-decoration: none;
    color: white;
    padding: 5px 10px;
    border-radius: 5px;
    font-weight: bold;
    background-color: rgb(255, 145, 0);
    font-size: 16px;

    }
    table {
            width: 50%;
            border-collapse: collapse;
            margin:0 auto;
            bac
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
    
        <table border=1>
        <tr><th colspan="6"><a href="tambah_produk.php">Tambah</a></th></tr>

    
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th colspan="2">aksi</th>
            </tr>
            <?php
           $query_ambil_data = "SELECT * FROM produk";
           $ambil_data = $db->query($query_ambil_data);
           $no=1;
           while($row = $ambil_data->fetchArray()):
            ?>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $row['nama_produk'];?></td>
                <td><?php echo $row['harga'];?></td>
                <td><?php echo $row['deskripsi'];?></td>
                <td><a href="edit_produk.php?id=<?php echo $row['id'];?>">edit</a></td>
                <td><a href="hapus_produk.php?id=<?php echo $row['id'];?>" onclick="return confirm('Kamu Yakin Mau Hapus Produk Ini :'(">hapus</a></td>
            </tr>
            <?php 
            $no++;
            endwhile; 
            ?>
        </table>
</body>
</html>