<?php

require_once('menuQuery.php');

$delPage = new PageAction;

$where = 'id_menu='.$_GET['id'];

QueryDB::Delete('menu', $where);

header('Location: menuAdmin.php');
?>