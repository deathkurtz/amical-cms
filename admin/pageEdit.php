<?
 
require_once('pageQuery.php');

$loadPage = new PageAction;

$loadPage = $loadPage->ViewPage($_GET['id']);

foreach($loadPage as $page):
?>
<html>
<head>
<script src="js/nicEdit.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });</script>

</head>
<body>
<form action="oldquery.php" method="POST">
        <input type="hidden" name="action" value="UpdatePage"></input>
        <input type="hidden" name="id" value="<?=$_GET['id'];?>"></input>
        Заголовок: <input type="text" name="title" height="45" value="<?=$page['title_page'];?>"></input><br />
        Ключевые слова: <input type="text" name="keyw" height="45" maxlength="255" value="<?=$page['keyw_page'];?>"></input><br />
        Описание: <input type="text" name="desc" height="45" maxlength="255" value="<?=$page['desc_page'];?>"></input><br />
        <textarea cols="50" name="text" ><?=$page['text_page'];?></textarea>
        <input type="submit">
</form>
<?endforeach?>
</body>
</html>