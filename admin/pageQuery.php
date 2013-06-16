<?php
require_once('..\dbQuery.php');

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
            
    function AddPage($title,$keyw,$desc,$text)
    {
        $this->object = array('id_page'=>"NULL",
                            'title_page'=> $title,
                            'keyw_page'=> $keyw,
                            'desc_page'=> $desc,
                            'text_page'=> '?>'.$text);            

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
         case 'AddPage': $queryPage->AddPage($title,$keyw,$desc,$text);
         case 'UpdatePage': $queryPage->UpdatePage($id,$title,$keyw,$desc,$text);
         case 'DeletePage': $queryPage->DeletePage($id);   
        }
    }
        else 
    {
        
        require_once('menuQuery.php');
            $addMenu = new MenuAction;
            $addMenu->AddMenu($title, 1, 'page', $queryPage->AddPage($title,$keyw,$desc,$text));
        header('Location: pageAdd.php');
   
    }
?>