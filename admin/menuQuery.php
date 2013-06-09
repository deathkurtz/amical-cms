<?php
require_once('..\dbQuery.php');

class MenuAction extends QueryDB
{       
        protected $where = 'id_menu=';
        protected $table = 'menu';
        
    function ListMenu()
    {
        
        return QueryDB::Select('SELECT * FROM menu');
    }

    function AddMenu($name,$activ,$action,$argument)
    {
        $this->object = array('id_menu'=>"NULL",
                            'name_menu'=> $name,
                            'activ_menu'=> $activ,
                            'action_menu'=> $action,
                            'argument_menu'=> $argument);            

        QueryDB::Insert($this->table,$this->object);
        
    }
    
    function DeleteMenu($id)
    {   
        $this->where = $this->where.$id;
        QueryDB::Delete($this->table,$this->where);
    }
}

?>