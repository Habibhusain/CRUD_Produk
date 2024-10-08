<?php
require "db.php";

$get_id= $_GET['id'];

function get_edit_data()
{
    global $db;
    global $get_id;
    $query_get_edit_data = "SELECT * FROM produk WHERE id = '$get_id'";
    $ambil_data_edit = $db->query($query_get_edit_data);
    $data_edit = $ambil_data_edit->fetchArray();
    
    return $data_edit;
}

if(isset($_POST['nama_produk']) && $_POST['nama_produk'] !=''){
    $get_nama_produk=$_POST['nama_produk'];
    $get_harga=$_POST['harga'];
    $get_deskripsi=$_POST['deskripsi'];
    $update_edit_data ="UPDATE produk SET nama_produk='$get_nama_produk', harga='$get_harga', deskripsi='$get_deskripsi' WHERE id='$get_id' ";
    $update_data = $db->query($update_edit_data);

    if( get_edit_data())
    {
        echo "<script>
        alert('data berhasil di edit')
        window.location='produk.php';
        </script>";
    }else{
        echo "<script>
        alert('data gagal di edit ')
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
    <title>Edit Data </title>
    <style>
        body {
            font-family: Poppins;
        }
        .container {
            max-width: 300px;
            box-shadow: 0 0 5px grey;
            overflow: hidden;
            border-radius: 10px;
            background-color:skyblue;
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
    padding: 5px 35px;
    border-radius: 5px;
    font-weight: bold;
    background-color: rgb(255, 145, 0);
    font-size: 16px;
        }
    </style>
</head>
<body>
    <center>
<div class="container">
        <h1>Edit Data</h1>
        <div class="form-container">
            <form method="POST" action="edit_produk.php?id=<?php echo get_edit_data()['id'];?>">
                <!-- INPUT NAMA -->
                <div class="input-group">
                    <label>Nama</label>
                    <input type="text" name="nama_produk" value="<?php echo get_edit_data()['nama_produk'];?>" required>
                    <label>Harga</label>
                    <input type="text" name="harga" value="<?php echo get_edit_data()['harga'];?>" required>
                    <label>Deskripsi</label>
                   <textarea name="deskripsi" required><?php echo get_edit_data()['deskripsi'];?></textarea>
                </div>
                <!-- SUBMIT BUTTON -->
                <div class="input-group">
                    <input type="submit" name="submit" value="Update">
                    <a href="produk.php">Kembali</a>

                </div>
            </form>
        </div>
    </div>
    </center>
</body>
</html>