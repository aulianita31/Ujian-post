<?php
    include_once('setting.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM supplier WHERE id='$id'";
    $result = mysqli_query($koneksi, $sql);
    if ($result) {
        header('location: index.php?m=supplier');
    } else {
        include "index.php?m=supplier";
        echo '<script language="JavaScript">';
        echo 'alert("Data Gagal Dihapus.")';
        echo '</script>';
    }
