<?php
$modul = (isset($_GET['s'])) ? $_GET['s'] : 'view';
switch ($modul) {
    case 'view': default:
        include('supplier/view.php');
        break;
    case 'add':
        include('supplier/add.php');
        break;
    case 'save';
        include('supplier/save.php');
        break;
    case 'edit';
        include('supplier/edit.php');
        break; 
    case 'update';
        include('supplier/update.php');
        break;
    case 'delete';
        include('supplier/delete.php');
        break;
}