<?php

require_once('newsQuery.php');

$delNews = new NewsAction;

$delNews = $delNews->DeleteNews($_GET['id']);

header('Location: news.php');
?>