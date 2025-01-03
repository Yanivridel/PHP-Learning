<?php
function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$pdo = new PDO('mysql:host=localhost;port=3310;port=3310;dbname=note_app', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$stmt = $pdo->prepare('SELECT * FROM `notes`');
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($results);

?>
<ul>
    <?php foreach($results AS $result): ?>
        <li><?php echo e($result['title']); ?></li>
    <?php endforeach; ?>
</ul>