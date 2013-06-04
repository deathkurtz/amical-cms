<?php
//$result = mysql_query("UPDATE pages SET text_page = '$sql' WHERE id_page='$id'");
require_once('queryDB.php');

        $connectDB = new QueryDB;
        
        $table = "pages";
        $action = $_POST['action'];
        $id = 15;
//        $id = $_POST['id'];
        $title = $_POST['title'];
        $keyw = $_POST['keyw'];
        $desc_page = $_POST['desc'];
        $text_page = $_POST['text'];
        $where = "id_page =".$id;            
        $object = array();

//    if($action=="insert")
//    {
    
//        $object["id_page"]= "NULL";
//        $object["title_page"]= $title;
//        $object["keyw_page"]= $keyw;
//        $object["desc_page"]= $desc;
//        $object["text_page"]= $text;            
//        
//        $connectDB->Insert($table,$object);
//    }
    //
//    if($action=='update')
//    {
//        $object["id_page"]= $id;
//        $object["title_page"]= $title;
//        $object["keyw_page"]= $keyw;
//        $object["desc_page"]= $desc;
//        $object["text_page"]= $text;            
//        
//        $connectDB->Update($table,$object,$where);
//    }
//
//    if($action=='delete')
//    {    
        $connectDB->Delete($table,$where);
//    }
//
?>