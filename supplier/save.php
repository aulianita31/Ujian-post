<?php
if (isset($_POST['simpan'])) {
    include_once('setting.php');
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $hp = $_POST['hp'];
    $email = $_POST['email'];

    $sql = "INSERT INTO supplier SET nama='$nama', alamat='$alamat', hp='$hp', email='$email'";
    $result = mysqli_query($koneksi, $sql);
    if ($result) {
        header('location: index.php?m=supplier');
    } else {
        include "index.php?m=supplier&s=add";
        echo '<script language="JavaScript">';
        echo   'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }
}