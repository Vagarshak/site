<?php

if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
}
require __DIR__.'/function/class_database.php';
require __DIR__.'/model/class_select.php';

$db = new MysqlSelectId($id);
$db->sql_query();

include __DIR__.'/view/long_text.php';

?>