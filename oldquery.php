<?php
require_once('queryDB.php');

        $action = $_POST['action'];
        $id = $_POST['id'];
        $title = $_POST['title'];
        $keyw = $_POST['keyw'];
        $desc = $_POST['desc'];
        $text = $_POST['text']; 
      
class PageAction extends QueryDB
{   
    protected $where = 'id_page='; 
    protected $table = 'pages';
    protected $object = array();    
    
    
    function ListPage()
    {
        
        return QueryDB::Select('SELECT * FROM pages');
    }
    
    function ViewPage($id)
    {
        
        return QueryDB::Select('SELECT * FROM pages WHERE id_page ='.$id);
    }
            
    function NewPage($title,$keyw,$desc,$text)
    {
        $this->object = array('id_page'=>"NULL",
                            'title_page'=> $title,
                            'keyw_page'=> $keyw,
                            'desc_page'=> $desc,
                            'text_page'=> $text);            

        return QueryDB::Insert($this->table,$this->object);
        
    }
    
    function UpdatePage($id,$title,$keyw,$desc,$text)
    {
        $this->where = $this->where.$id;
        $this->object = array('id_page'=>$id,
                            'title_page'=> $title,
                            'keyw_page'=> $keyw,
                            'desc_page'=> $desc,
                            'text_page'=> $text);            
        
        QueryDB::Update($this->table,$this->object,$this->where);
    }

    function DeletePage($id)
    {   
        $this->where = $this->where.$id;
        QueryDB::Delete($this->table,$this->where);
    }
}

$queryPage = new PageAction;

    if(empty($_POST['AddToMenu']))
    {
        switch($action)
        {
         case 'NewPage': $queryPage->NewPage($title,$keyw,$desc,$text);
         case 'UpdatePage': $queryPage->UpdatePage($id,$title,$keyw,$desc,$text);
         case 'DeletePage': $queryPage->DeletePage($id);   
        }
    }
        else 
    {
        echo '<script>location.replace("test.php?activ=1&name='.$title.'&id='.$queryPage->NewPage($title,$keyw,$desc,$text).'");</script>';
    }
?>