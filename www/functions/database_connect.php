<?php
 function connect_db(){
     mysql_connect('localhost', 'root', '');
     mysql_select_db('db_news');
 }
function sql_query($query){

    connect_db();
    mysql_query($query);

}
 function my_sql_query($query){

     connect_db();
     $result = mysql_query($query);

     $news = [];
     while(false != $row = mysql_fetch_assoc($result)){
         $news[] = $row;
     }
     return $news;
 }
?>