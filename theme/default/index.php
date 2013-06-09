<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?=$content['title']?></title>
<meta name="keywords" content="<?=$content['keyw']?>" />
<meta name="description" content="<?=$content['desc']?>" />
<link href="theme/default/default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
  <div id="logo">
    <h1><a href="http://web-mastery.info/">Center Stage</a></h1>
    <h2><a href="http://www.freecsstemplates.org/">By Free CSS Templates</a></h2>
  </div>
  <div id="menu">
    <ul><?foreach ($menu as $menu):?>
	  <li><a href=?action=<?=$menu['action_menu']?>&id=<?=$menu['argument_menu']?>><?=$menu['name_menu']?></a></li>
	  <?endforeach?>
</ul>
  </div>
</div>
<div id="page">
  <div id="content">
      <?=$content['text']?>
  </div>
  <!-- end content -->
  <div id="sidebar">
    <div id="search" class="boxed">
      <h2 class="title">Quick Search</h2>
      <div class="content">
        <form id="searchform" method="get" action="">
          <fieldset>
          <input id="searchinput" type="text" name="searchinput" value="" />
          <input id="searchsubmit" type="submit" value="Search" />
          <p><a href="http://web-mastery.info/">Advanced Search</a></p>
          </fieldset>
        </form>
      </div>
    </div>
    <div id="news" class="boxed">
      <h2 class="title">News &amp; Events</h2>
      <div class="content">
        <ul>
        <?foreach($news as $s_news):?>
          <li class="first">
            <h3><?=$s_news['date_news']?></h3>
            <p><a href="?action=news&id=<?=$s_news['id_news']?>"><?=$s_news['title_news']?>&hellip;</a></p>
          </li>
        <?endforeach?>
        </ul>
      </div>
    </div>
    <div id="extra" class="boxed">
      <h2 class="title">Sagittis Convallis</h2>
      <div class="content">
        <ul class="list">
          <li class="first"><a href="http://web-mastery.info/">Ut semper vestibulum est&hellip;</a></li>
          <li><a href="http://web-mastery.info/">Vestibulum luctus venenatis&hellip;</a></li>
          <li><a href="http://web-mastery.info/">Integer rutrum nisl in mi&hellip;</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- end sidebar -->
  <div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<div id="footer">
  <p id="legal">&copy;2007 Center Stage. All Rights Reserved. Designed by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a></p>
  <p id="links"><a href="http://web-mastery.info/">Privacy</a> | <a href="http://web-mastery.info/">Terms</a> | <a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> | <a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets">CSS</abbr></a></p>
</div>
</body>
</html>