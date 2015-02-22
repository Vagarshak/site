<?php
require __DIR__.'/models/news.php';
 if(!empty($_POST['title'])){
     $data['title'] = $_POST['title'];
 }
 if(!empty($_POST['text_news'])){
     $data['text_news'] = $_POST['text_news'];
 }

 if(isset($data['title']) && isset($data['text_news'])) {
    insert_news($data);
    header('Location: index.php');

 }
 include __DIR__.'/views/add_news.php';
?>