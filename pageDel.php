<?php

require_once('oldquery.php');

$delPage = new PageAction;

$delPage = $delPage->DeletePage($_GET['id']);
// Удаление страницы

?>