<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=dbname;charset=utf8;", "user", "pass");
} catch(PDOException $e) {
    header("Location: landingpage.php?status=error");
    die();
}