<?php
 require_once __DIR__ .'/../functions/database_connect.php';
 function getNews(){

     $query = 'SELECT * FROM `news`';

     return my_sql_query($query);
 }
 function getNewsId($id){

     $query = 'SELECT * FROM `news` WHERE `id_news` =' . $id;

     return my_sql_query($query);
 }
 function insert_news ($data){

     $query = "INSERT INTO `news`
              (`title_news`, `text_news`) VALUES ('".$data['title']."', '".$data['text_news']."')";
     sql_query($query);
 }
?>