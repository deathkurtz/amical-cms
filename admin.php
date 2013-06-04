<html>
<head>
<script src="js/nicEdit.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });</script>

</head>
<body>
<form action="oldquery.php" method="POST">
        <input type="hidden" name="action" value="insert"></input>
        Заголовок: <input type="text" name="title" height="45"></input><br />
        Ключевые слова: <input type="text" name="keyw" height="45" maxlength="255"></input><br />
        Описание: <input type="text" name="desc" height="45" maxlength="255"></input><br />
        <textarea cols="50" name="text"></textarea>
        <input type="submit">
</form>
</body>
</html>