<?php

include_once('includes/connection.php');
    class Article_tech{
        public function fetch_all(){
            global $pdo;
            $query=$pdo->prepare("SELECT * FROM articles WHERE article_cat='tech'");
            $query->execute();
            return $query->fetchAll();
        }
    }
?>