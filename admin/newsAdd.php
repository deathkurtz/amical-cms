<!DOCTYPE html>
<head>
<script src="../js/nicEdit.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });</script>

</head>
<body>
<form action="newsQuery.php" method="POST">
        <input type="hidden" name="action" value="AddNews"></input>
        Заголовок: <input type="text" name="title" height="45"></input><br />
        Ключевые слова: <input type="text" name="keyw" height="45" maxlength="255"></input><br />
        Описание: <input type="text" name="desc" height="45" maxlength="255"></input><br />
        <textarea cols="50" name="text"></textarea><br />
        <input name="date" type="date" />
        <input type="submit">
</form>
</body>
</html>