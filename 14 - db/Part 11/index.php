<?php
function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$pdo = new PDO('mysql:host=localhost;port=3310;port=3310;dbname=note_app', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$stmt = $pdo->prepare('UPDATE `notes` SET `title` = :title, `content` = :content WHERE `id` = :id');
$stmt->bindValue('id', 8);
$stmt->bindValue('content', 'COnTENT (from PHP)');
$stmt->bindValue('title', 'TItLE (from PHP)');
$stmt->execute();

$id = 11;
$stmt2 = $pdo->prepare('DELETE FROM `notes` WHERE `id` = :id');
$stmt2->bindValue('id', $id);
$stmt2->execute();

$title = 'A title...';
$stmt3 = $pdo->prepare('DELETE FROM `notes` WHERE `title` = :title');
$stmt3->bindValue('title', $title);
$stmt3->execute();