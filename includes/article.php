<?php

include_once('includes/connection.php');
include_once('includes/article.php');
    class Article{
        public function fetch_all(){
            global $conn;
            $query=mysqli_query($conn,"SELECT * FROM articles");
            //$query->execute();
            //$val=$query->fetchAll();
            $result=mysqli_fetch_all($query,MYSQLI_ASSOC);
            
            return $result;
        }
        
        public function fetch_data($article_id){
            global $conn;
            $query = mysqli_query($conn,"SELECT * FROM articles WHERE article_id=$article_id");
            return $query->fetch_array();
        }
        public function fetch_writer($writer_id){
            global $conn;
            $query = mysqli_query($conn,"SELECT * FROM gse_users WHERE user_id=$writer_id");
            return $query->fetch_array();
        }
        
    }
?>