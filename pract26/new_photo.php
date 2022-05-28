<?php
    if (isset($_POST["image"], $_POST["text"])) {
        require "vendor/autoload.php";
        $DB = new \Photos\DB();
        session_start();
        $user_id = $_SESSION["user_id"];
        $DB->new_photo($user_id, $_POST["image"], $_POST["text"]);
        header("Location: user.php");
    }
