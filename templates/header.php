<?php
require_once('config/config.php');
require_once('config/bdd.php');

$currentPage = basename($_SERVER['SCRIPT_NAME']);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pages[$currentPage]; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>

    <header>
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap" />
                    </svg>
                    <span class="fs-2">Le Quai Antique</span>
                </a>

                <ul class="nav nav-pills">
                    <?php foreach ($mainMenu as $key => $value) { ?>
                        <li class="nav-item"><a href="<?= $key; ?>" class="nav-link <?php if ($currentPage === $key) {echo 'active';} ?>"><?= $value; ?></a></li>
                    <?php } ?>
                </ul>
            </header>
        </div>

    </header>