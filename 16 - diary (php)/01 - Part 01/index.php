<?php

require __DIR__ . '/inc/functions.inc.php';
require __DIR__ . '/inc/db-connect.inc.php';

$stmt = $pdo->prepare('SELECT * FROM `entries`');
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
// var_dump($results)

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/normalize.css" />
    <link rel="stylesheet" type="text/css" href="./styles/styles.css" />
    <title>PHP Diary</title>
</head>
<body>
    <nav class="nav">
        <div class="container">
            <div class="nav__layout">
                <a href="index.php" class="nav-brand">
                    <svg class="nav-brand__image" viewBox="0 0 60.7863869853 60.7863869853">
                        <path style="fill: currentColor" d="m45.589790239,30.3931934927c8.3928407749,0,15.1965967463-6.8037559715,15.1965967463-15.1965967463S53.9826310139,0,45.589790239,0H15.196554313C6.8037135382,0,0,6.8037559715,0,15.1965967463v30.3931934927c0,8.3928407749,6.8037135382,15.1965967463,15.196554313,15.1965967463h30.393235926c8.3928407749,0,15.1965967463-6.8037559715,15.1965967463-15.1965967463s-6.8037559715-15.1965967463-15.1965967463-15.1965967463Z"/>
                    </svg>
                    PHP Diary
                </a>
                <a href="form.php" class="button">
                    <svg class="button__icon" viewBox="0 0 44.4901230052 44.4901230053">
                        <g style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 2px;">
                            <circle cx="22.2450615026" cy="22.2450615026" r="21.2450615026"/>
                            <line x1="22.2450615026" y1="13.4699274037" x2="22.2450615026" y2="31.0201956015"/>
                            <line x1="31.0201956015" y1="22.2450658041" x2="13.4699274037" y2="22.2450572011"/>
                        </g>
                    </svg>
                    New entry
                </a>
            </div>
        </div>
    </nav>
    <main class="main">
        <div class="container">
            <h1 class="main-heading">Entries</h1>
            <?php foreach ($results AS $result): ?>
                <div class="card">
                    <div class="card__image-container">
                        <img class="card__image" src="images/pexels-canva-studio-3153199.jpg" alt="" />
                    </div>
                    <div class="card__desc-container">
                        <div class="card__desc-time"><?php echo e($result['date']); ?></div>
                        <h2 class="card__heading"><?php echo e($result['title']); ?></h2>
                        <p class="card__paragraph">
                            <?php echo nl2br(e($result['message'])); ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>

            <ul class="pagination">
                <li class="pagination__li">
                    <a class="pagination__link" href="#">⏴</a>
                </li>
                <li class="pagination__li">
                    <a class="pagination__link pagination__link--active" href="#">1</a>
                </li>
                <li class="pagination__li">
                    <a class="pagination__link" href="#">2</a>
                </li>
                <li class="pagination__li">
                    <a class="pagination__link" href="#">3</a>
                </li>
                <li class="pagination__li">
                    <a class="pagination__link" href="#">⏵</a>
                </li>
            </ul>
        </div>
    </main>
    <footer class="footer">
        <div class="container">
            <h3 class="footer__heading">PHP diary project</h3>
            <p class="footer__desc">This PHP diary project allows users to systematically document and reflect on their learning journey, enhancing retention and providing valuable insights into their personal growth and development.</p>
        </div>
    </footer>
</body>
</html>