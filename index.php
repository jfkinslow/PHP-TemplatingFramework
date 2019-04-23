<?php 
    if(isset($_GET['page'])) {
        $page = $_GET['page'];
        if ($page === "index" || empty($page)){
            require_once('./system/views/index.php');
        }
    } else {
        require_once('./system/views/index.php');
    }
?>