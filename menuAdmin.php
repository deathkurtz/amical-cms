<?php

require_once('menuQuery.php');

$listMenu = new MenuAction;

$listMenu = $listMenu->ListMenu();

?>
<a href="menuAdd.php">Добавить меню</a>
<p>
<?foreach($listMenu as $menu):?>
<?=$menu['name_menu'];?> <a href=menuEdit.php?id=<?=$menu['id_menu'];?>>ред.</a>  <a href=menuDel.php?id=<?=$menu['id_menu'];?>>удалить</a><br />
<?endforeach;?>
</p>