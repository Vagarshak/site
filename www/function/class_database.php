<?php
 class DataBase
 {
     public $host_name = 'localhost';
     public $user_name = 'root';
     public $password = '';
     public $db_name = 'db_news';

     public $query;
     public $result;
     public $row;
     public $news = [];

     function db_connection()
     {
         mysql_connect($this->host_name, $this->user_name, $this->password);
         mysql_select_db($this->db_name);
     }
     function result_set(){
         $this->db_connection();
         $this->result = mysql_query($this->sql_query());


         while(false != $this->row = mysql_fetch_assoc($this->result)){
             $this->news[] = $this->row;
         }
         return $this->news;
     }
 }

?>