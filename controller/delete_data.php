<?php
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];

        $status = $mysqli->query("DELETE FROM `db` WHERE $id =`id`") or die($mysqli->error);

        if ($status) {
            header("location: /structure/?page={$_GET['page']}");
        }
    
    }
?>