<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=api",'root','');
} catch (PDOException $th) {
    throw $th;
}
?>