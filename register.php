<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

include 'koneksi.php';

if(isset($_POST['username']) && isset($_POST['password'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cek = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");
    $cekEmail = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'");

    if(mysqli_num_rows($cek) > 0){
        echo "username_kembar";
    } else if(mysqli_num_rows($cekEmail) > 0){
        echo "email_kembar";
    } else {
        $input = mysqli_query($conn, "INSERT INTO user (nama, email, username, password) VALUES ('$nama', '$email', '$username', '$password')");
        if($input){
            echo "berhasil";
        } else {
            echo "gagal";
        }
    }
} else {
    echo "Data tidak lengkap";
}
?>