<?php
include './database.php';

$query = $pdo->prepare("SELECT * FROM `post`");
$query->execute();

$dataArray = [];

while($row = $query->fetch(PDO::FETCH_ASSOC)){
    array_push($dataArray,$row);
}

header('Content-Type: application/json');
echo json_encode($dataArray);

?>