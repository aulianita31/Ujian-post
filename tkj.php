<?php
$modul = (isset($_GET['m'])) ? $_GET['m'] : 'home';
switch ($modul) {
    case 'home':
        include('home.php');
        break;
    case 'supplier':
        include('supplier/index.php');
        break;
    case 'penjualan';
        include('penjualan/index.php');
        break;
}