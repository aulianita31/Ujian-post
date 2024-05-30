<?php
if(isset($_POST['save'])) {
    include_once "setting.php";
    $supplier_id = $_POST['supplier_id'];
    $total       = $_POST['total'];

    $sql = "INSERT INTO penjualan SET supplier_id='$supplier_id', total='$total'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        // var_dump($sql);
        header('Location: index.php?m=penjualan');
    } else {
        include 'index.php?m=penjualan';
        echo '<script language="JavaScript">';
        echo 'alert("Data gagal ditambahkan")';
        echo '<script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}