<?
 
require_once('newsQuery.php');

$loadNews = new NewsAction;

$loadNews = $loadNews->ViewNews($_GET['id']);

foreach($loadNews as $news):
?>
<!DOCTYPE html>
<head>
<script src="../js/nicEdit.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });</script>

</head>
<body>
<form action="newsQuery.php" method="POST">
        <input type="hidden" name="action" value="UpdateNews"></input>
        <input type="hidden" name="id" value="<?=$_GET['id'];?>"></input>
        Заголовок: <input type="text" name="title" height="45" value="<?=$news['title_news'];?>"></input><br />
        Ключевые слова: <input type="text" name="keyw" height="45" maxlength="255" value="<?=$news['keyw_news'];?>"></input><br />
        Описание: <input type="text" name="desc" height="45" maxlength="255" value="<?=$news['desc_news'];?>"></input><br />
        <textarea cols="50" name="text" ><?=$news['text_news'];?></textarea>
        <input name="date" type="date" value=<?=$news['date_news'];?> />
        <input type="submit">
</form>
<?endforeach?>
</body>
</html>