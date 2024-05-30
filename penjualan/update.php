<?php
if(isset($_POST['update'])) {
    include_once "setting.php";
    $id           = $_POST['id'];
    $supplier_id = $_POST['supplier_id'];
    $total    = $_POST['total'];

    $sql = "UPDATE penjualan SET supplier_id='$supplier_id', total='$total' WHERE id='$id'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        // var_dump($sql);
        header('Location: index.php?m=penjualan');
    } else {
        include 'index.php?m=penjualan';
        echo '<script language="JavaScript">';
        echo 'alert("Data gagal diupdate")';
        echo '<script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}
