<?php
$db_host = 'db';
$db_user = 'root';
$db_password = 'rootpass';
$db_db = 'syntrafs';
$db_port = 3306;

try {
    $pdo = new PDO('mysql:host=' . $db_host . '; port=' . $db_port . '; dbname=' . $db_db, $db_user, $db_password);
} catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . "<br/>";
    die();
}



function getTracks()
{
    global $pdo;

    $stmt = $pdo->prepare("SELECT * FROM `230217_tracks` ORDER BY ID ASC LIMIT 50");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
