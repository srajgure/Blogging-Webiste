<?php

include_once('includes/connection.php');
    class Article_design{
        public function fetch_all(){
            global $pdo;
            $query=$pdo->prepare("SELECT * FROM articles WHERE article_cat='design'");
            $query->execute();
            return $query->fetchAll();
        }
    }
?>