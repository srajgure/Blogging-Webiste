<?php

include_once('includes/connection.php');
// include_once('includes/article.php');
    class Article{
        public function fetch_all(){
            global $pdo;
            $query=$pdo->prepare("SELECT * FROM articles");
            $query->execute();
            return $query->fetchAll();
        }
        
        public function fetch_data($article_id){
            global $conn;
            $query = mysqli_query($conn,"SELECT * FROM articles WHERE article_id=$article_id");
            return $query->fetch_array();
        }
        
    }
?>