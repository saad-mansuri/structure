<?php

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];

        $mysqli->query("INSERT INTO db(name,email) VALUES ('$name', '$email')") or
            die($mysqli->error);

        echo "<script>alert('Insert sucessfully');</script>";
        // $_SESSION['msg_type'] = "success";

        // header("location:index.php");

    }

?>

