<?php

include_once('includes/connection.php');
    class Article_social{
        public function fetch_all(){
            global $pdo;
            $query=$pdo->prepare("SELECT * FROM articles WHERE article_cat='social'");
            $query->execute();
            return $query->fetchAll();
        }
    
    }
?>