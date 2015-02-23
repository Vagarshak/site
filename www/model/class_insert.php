<?php
class MysqlInsert extends DataBase{

    public $title;
    public $text_news;

    function __construct($title, $text_news){

        $this->title = $title;
        $this->text_news = $text_news;
    }
    function result_set(){
        $this->db_connection();
        $this->result = mysql_query($this->sql_query());
        }

    function sql_query(){

        $this->query = "INSERT INTO news
                   (title_news, text_news) VALUES ('$this->title', '$this->text_news')";
        return $this->query;
    }

}
?>