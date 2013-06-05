<?php

require_once('oldquery.php');

$listPage = new PageAction;

$listPage = $listPage->ListPage();

foreach($listPage as $page):
?>
<a href=admin.php?id=<?=$page['id_page'];?>><?=$page['title_page'];?></a><br />
<?
endforeach;
?>