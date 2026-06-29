<?php
include 'koneksi.php';

// Memeriksa apakah data dikirim via POST
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['username'])) {
        echo "Sukses: Data diterima untuk user " . $_POST['username'];
    } else {
        echo "Error: POST diterima tapi kunci 'username' tidak ditemukan. Isi POST: " . json_encode($_POST);
    }
} else {
    echo "Error: Bukan request POST";
}
?>