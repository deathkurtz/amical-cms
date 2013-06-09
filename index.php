<?php

require_once('dbQuery.php');

        $sql = new Content;
                
        $action = $_GET['action'];
        
        $news = $sql->NewsLoadAll(3);
                
        $menu = $sql->MenuLoad();
       
       
    if(empty($_GET['id']))
            
        $id=1;
            
    else
            
        $id = $_GET['id'];
        

    switch($action)
    {
        case "news":
        foreach ($sql->NewsLoad($id) as $Tcontent):
        $content = array('text' => $Tcontent['text_news'],
                        'title' => $Tcontent['title_news'],
                        'keyw' => $Tcontent['keyw_news'],
                        'desc' => $Tcontent['desc_news']);
            include_once('theme\default\index.php');
        endforeach;
            break;
        default:
        foreach ($sql->PageLoad($id) as $Tcontent):
        $content = array('text' => $Tcontent['text_page'],
                        'title' => $Tcontent['title_page'],
                        'keyw' => $Tcontent['keyw_page'],
                        'desc' => $Tcontent['desc_page']);
            include_once('theme\default\index.php');
        endforeach;
    }    
?>