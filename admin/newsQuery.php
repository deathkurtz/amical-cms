<?php
require_once('..\dbQuery.php');

        $action = $_POST['action'];
        $id = $_POST['id'];
        $title = $_POST['title'];
        $keyw = $_POST['keyw'];
        $desc = $_POST['desc'];
        $text = $_POST['text'];
        $date = $_POST['date']; 
      
class NewsAction extends QueryDB
{   
    protected $where = 'id_news='; 
    protected $table = 'news';
    protected $object = array();    
    
    
    function ListNews($limit)
    {
        
        return QueryDB::Select('SELECT * FROM news LIMIT '.$limit);
    }
    
    function ViewNews($id)
    {
        
        return QueryDB::Select('SELECT * FROM news WHERE id_news ='.$id);
    }
            
    function AddNews($title,$keyw,$desc,$text)
    {
        $this->object = array('id_news'=>"NULL",
                            'title_news'=> $title,
                            'keyw_news'=> $keyw,
                            'desc_news'=> $desc,
                            'text_news'=> '?>'.$text,
                            'date_news'=> $date);            

        return QueryDB::Insert($this->table,$this->object);
        
    }
    
    function UpdateNews($id,$title,$keyw,$desc,$text,$date)
    {
        $this->where = $this->where.$id;
        $this->object = array('id_news'=>$id,
                            'title_news'=> $title,
                            'keyw_news'=> $keyw,
                            'desc_news'=> $desc,
                            'text_news'=> $text,
                            'date_news'=> $date);            
        
        QueryDB::Update($this->table,$this->object,$this->where);
    }

    function DeleteNews($id)
    {   
        $this->where = $this->where.$id;
        QueryDB::Delete($this->table,$this->where);
    }
}

$queryNews = new NewsAction;

        switch($action)
        {
         case 'AddNews': $queryNews->AddNews($title,$keyw,$desc,$text,$date);
         case 'UpdateNews': $queryNews->UpdateNews($id,$title,$keyw,$desc,$text,$date);
         case 'DeleteNews': $queryNews->DeleteNews($id);   
        }

?>