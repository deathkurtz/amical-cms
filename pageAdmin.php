<?php

require_once('oldquery.php');

$listPage = new PageAction;

$listPage = $listPage->ListPage();

?>
<a href="pageAdd.php">Добавить страницу</a>
<p>
<?foreach($listPage as $page):?>
<?=$page['title_page'];?> <a href=pageEdit.php?id=<?=$page['id_page'];?>>ред.</a>  <a href=pageDel.php?id=<?=$page['id_page'];?>>удалить</a><br />
<?endforeach;?>
</p>