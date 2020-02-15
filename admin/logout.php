<?php
session_start();
echo "SUMIT1";
session_destroy();
echo "SUMIT";

header('Location: ../index.php');

?>