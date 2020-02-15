<?php
    
    include '/home/globappq/public_html/gsered.com/connect_db.php';
    class Writer{
        public function fetch_writer($writer_id){
            global $conn;
            $query = mysqli_query($conn,"SELECT * FROM login WHERE id=$writer_id");
            mysqli_close($conn);
            return $query->fetch_array();
        }
    }

?>