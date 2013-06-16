<?php

require_once('newsQuery.php');

$listNews = new NewsAction;

$listNews = $listNews->ListNews(3);

?>
<a href="newsAdd.php">Добавить новость</a>
<p>
<?foreach($listNews as $news):?>
<?=$news['title_news'];?> <a href=newsEdit.php?id=<?=$news['id_news'];?>>ред.</a>  <a href=newsDel.php?id=<?=$news['id_news'];?>>удалить</a><br />
<?endforeach;?>
</p>