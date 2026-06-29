<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: *');

include 'koneksi.php';

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND password='$password'");

    if(mysqli_num_rows($result) > 0) {
        echo "berhasil";
    } else {
        echo "gagal";
    }
} else {
    echo "Data tidak lengkap";
}
?>