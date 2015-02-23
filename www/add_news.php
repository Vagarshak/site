<?php
require __DIR__.'/function/class_database.php';
require __DIR__.'/model/class_insert.php';

if(!empty($_POST['title'])){
    $title = $_POST['title'];
}
if(!empty($_POST['text_news'])){
    $text_news = $_POST['text_news'];
}
if(isset($title) && isset($text_news)) {

    $db = new MysqlInsert($title, $text_news);
    $db->sql_query();


    header('Location: index.php');

}
include __DIR__.'/view/add_news.php';
?>