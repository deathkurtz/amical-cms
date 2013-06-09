<?php

require_once('menuQuery.php');

$delMenu = new MenuAction;

$del = $delMenu->DeleteMenu($_GET['id']);

$where = 'id_page='.$_GET['arg'];
QueryDB::Delete('pages', $where);

header('Location: menu.php');
?>