<?php

require_once('pageQuery.php');

$delPage = new PageAction;

$delPage = $delPage->DeletePage($_GET['id']);
$where = 'link_menu=\'?action=page&id='.$_GET['id'].'\'';
QueryDB::Delete('menu', $where);

header('Location: pageAdmin.php');
?>