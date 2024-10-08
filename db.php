<?php
$db = new SQLite3("produk.sqlite");
if(!$db) {
    echo $db->lastErrorMsg();
    exit;
} else {
    // echo "Open Database Berhasil....\n";
}

$db->query("CREATE TABLE IF NOT EXISTS produk 
            (id INTEGER PRIMARY KEY AUTOINCREMENT, nama_produk TEXT NOT NULL, harga TEXT NULL, deskripsi TEXT NULL)");