<?php
 require __DIR__.'/models/news.php';

 $items = getNews();

 include __DIR__.'/views/index.php';
?>