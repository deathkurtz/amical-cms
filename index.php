<?php

require_once('queryDB.php');

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
        foreach ($sql->NewsLoad($id) as $Tcontent):$content = array('text' => $Tcontent['text_news']);
            include_once('theme\default\index.php');
        endforeach;
            break;
        default:
        foreach ($sql->PageLoad($id) as $Tcontent):$content = array('text' => $Tcontent['text_page']);
            include_once('theme\default\index.php');
        endforeach;
    }    
?>