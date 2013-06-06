<?php
require_once('queryDB.php');

class MenuAction extends QueryDB
{        
        protected $table = 'menu';

function AddMenu($name,$activ,$link)
    {
        $this->object = array('id_menu'=>"NULL",
                            'name_menu'=> $name,
                            'activ_menu'=> $activ,
                            'link_menu'=> $link);            

        QueryDB::Insert($this->table,$this->object);
        
    }
}
if (empty($_GET['activ']))
    $activ = 0;
else
    $activ = 1;

$action = new MenuAction;

$action = $action->AddMenu($_GET['name'],$activ,'?action=page&id='.$_GET['id']);

echo' <script>location.replace("pageAdd.php");</script> ';
?>