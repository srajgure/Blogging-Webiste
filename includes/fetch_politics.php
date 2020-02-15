<?php

include_once('includes/connection.php');
    class Article_politics{
       public function fetch_all(){
            global $pdo;
            $query=$pdo->prepare("SELECT * FROM articles WHERE article_cat='politics'");
            $query->execute();
            return $query->fetchAll();
        }
        
    }
?>