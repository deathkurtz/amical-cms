<?php

    abstract class DB
{
        //
        // Настройки подключения к БД
        //
        private $host = 'localhost';
        private $dbname = 'cms';
        private $dbuser = 'root';
        private $password = '';

        //
        // Подключение к БД
        //
        function __construct()
        {
            mysql_connect($this->host,$this->dbuser,$this->password) or die ('Нет связи с сервером');
            mysql_selectdb($this->dbname) or die ('Нет связи с БД');
        }


}

    class QueryDB extends DB
{

       //
	   // Выборка строк
	   // $sql    	- полный текст SQL запроса
	   // $arrayOut	- массив выбранных объектов
	   //
        function Select($sql)
        {    
            $result = mysql_query($sql);
                    
            $n = mysql_num_rows($result);
            $arrayOut = array();
            
            for ($i = 0; $i < $n; $i++)
            {
                $row = mysql_fetch_assoc($result);
                $arrayOut[] = $row;
            }
            
        return $arrayOut;
            
        }
        
        //
        // Изменение строк
    	// $table 		- имя таблицы
    	// $object 		- ассоциативный массив с парами вида "имя столбца - значение"
    	// $where		- условие (часть SQL запроса)
    	// результат	- число измененных строк
        //
        function Update($table, $object, $where)
        {
    		$sets = array();
    	
    		foreach ($object as $key => $value)
    		{
    			$key = mysql_real_escape_string($key . '');
    			
    			if ($value === null)
    			{
    				$sets[] = "$key=NULL";			
    			}
    			else
    			{
    				$value = mysql_real_escape_string($value . '');					
    				$sets[] = "$key='$value'";			
    			}			
            }
          
    		$sets_s = implode(',', $sets);			
    		$query = "UPDATE $table SET $sets_s WHERE $where";
    		$result = mysql_query($query);

        return mysql_affected_rows();
        	
        }
        
        //
    	// Вставка строки
    	// $table 		- имя таблицы
    	// $object 		- ассоциативный массив с парами вида "имя столбца - значение"
    	// результат	- идентификатор новой строки
    	//
        function Insert($table, $object)
        {			
    		$columns = array();
    		$values = array();
    	
    		foreach ($object as $key => $value)
    		{
    			$key = mysql_real_escape_string($key . '');
    			$columns[] = $key;
    			
    			if ($value === null)
    			{
    				$values[] = 'NULL';
    			}
    			else
    			{
    				$value = mysql_real_escape_string($value . '');							
    				$values[] = "'$value'";
    			}
    		}
    		
    		$columns_s = implode(',', $columns);
    		$values_s = implode(',', $values);
    			
    		$query = "INSERT INTO $table ($columns_s) VALUES ($values_s)";
    		$result = mysql_query($query);

        return mysql_insert_id();

        }
        
        //
    	// Удаление строк
    	// $table 		- имя таблицы
    	// $where		- условие (часть SQL запроса)	
    	// результат	- число удаленных строк
    	//		
    	function Delete($table, $where)
    	{
    		$query = "DELETE FROM $table WHERE $where";		
    		$result = mysql_query($query);
    
  		return mysql_affected_rows();	
    	}
        
    
}

    class Content extends QueryDB
{
        
        function PageLoad($id)
        {   
            return QueryDB::Select('SELECT * FROM pages WHERE id_page='.$id);    
        }
    
        function NewsLoad($id)
        {
            return QueryDB::Select('SELECT * FROM news WHERE id_news='.$id);
        }
    
        function NewsLoadAll($limit)
        {
            return QueryDB::Select('SELECT * FROM news ORDER BY date_news DESC LIMIT '.$limit);
        }

        function MenuLoad()
        {
            return QueryDB::Select('SELECT * FROM menu WHERE activ_menu = 1');
        }

}