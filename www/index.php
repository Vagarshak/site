<?php

 require __DIR__.'/function/class_database.php';
 require __DIR__.'/model/class_select.php';

 $db = new MysqlSelect();

 include __DIR__.'/view/index.php';

?>