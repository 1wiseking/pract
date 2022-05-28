<?php
    if (isset($_POST["login"], $_POST["password"])) {
        require "vendor/autoload.php";
        $DB = new \Photos\DB();
        $login_exist = $DB->check_login($_POST["login"]);
        if ($login_exist) {
            header("Location: user.php?sign_error=login");
        }
        else {
            $DB->new_user($_POST["login"], $_POST["password"]);
            header("Location: user.php?sign_success=ok");
        }
    }