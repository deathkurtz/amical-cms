<?php
require_once('queryDB.php');

class MenuAction extends QueryDB
{        
        protected $table = 'menu';
        
    function ListMenu()
    {
        
        return QueryDB::Select('SELECT * FROM menu');
    }

    function AddMenu($name,$activ,$link)
    {
        $this->object = array('id_menu'=>"NULL",
                            'name_menu'=> $name,
                            'activ_menu'=> $activ,
                            'link_menu'=> $link);            

        QueryDB::Insert($this->table,$this->object);
        
    }
}

?>