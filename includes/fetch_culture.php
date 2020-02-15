<?php

include_once('includes/connection.php');
    class Article_culture{
      public function fetch_all(){
            global $pdo;
            $query=$pdo->prepare("SELECT * FROM articles WHERE article_cat='culture'");
            $query->execute();
            return $query->fetchAll();
        }
        
    }
?>