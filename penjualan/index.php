<?php
$modul = (isset($_GET['s'])) ? $_GET['s'] : 'view';
switch ($modul) {
    case 'view': default:
        include('penjualan/view.php');
        break;
    case 'add':
        include('penjualan/add.php');
        break;
    case 'save';
        include('penjualan/save.php');
        break;
    case 'edit';
        include('penjualan/edit.php');
        break; 
    case 'update';
        include('penjualan/update.php');
        break;
    case 'delete';
        include('penjualan/delete.php');
        break;
}