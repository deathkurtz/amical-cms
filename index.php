<?php

    require_once('queryDB.php');

$connect = new QueryDB;

$sql = "SELECT * FROM menu";

$query = $connect->Select($sql);

    if(empty($_GET['page']))

$page=1;

    else

$page = $_GET['page'];
 
$page = "SELECT * FROM pages WHERE id_page = ".$page;

$pageload = $connect->Select($page);

$news = $connect->Select("SELECT * FROM news ORDER BY date_news DESC LIMIT 3");

    foreach ($pageload as $page):

include_once('theme\default\index.php');

    endforeach
  
?>