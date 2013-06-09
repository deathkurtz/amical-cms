<?php

require_once('pageQuery.php');

$delPage = new PageAction;

$delPage = $delPage->DeletePage($_GET['id']);
$where = 'action_menu=\'page\' AND argument_menu='.$_GET['id'];
QueryDB::Delete('menu', $where);

header('Location: page.php');
?>