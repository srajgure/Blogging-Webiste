<?php

include_once('includes/connection.php');
    class Article_sports{
       public function fetch_all(){
            global $pdo;
            $query=$pdo->prepare("SELECT * FROM articles WHERE article_cat='sports'");
            $query->execute();
            return $query->fetchAll();
        }
    }
?>