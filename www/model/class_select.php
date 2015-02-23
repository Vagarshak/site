<?php

class MysqlSelect extends DataBase{

    function sql_query(){
        $this->query = 'SELECT * FROM `news`';
        return $this->query;
    }

}
class MysqlSelectId extends DataBase{
    public $id;

    function __construct($id){
        $this->id = $id;
    }

    function sql_query(){
        $this->query = 'SELECT * FROM `news` WHERE `id_news` = '.$this->id;
        return $this->query;
    }

}
?>