<?php

 if(isset($_REQUEST['id'])){
     $id = $_REQUEST['id'];
 }
 echo $id;
require __DIR__.'/models/news.php';

$items = getNewsId($id);

include __DIR__.'/views/long_text.php';
?>