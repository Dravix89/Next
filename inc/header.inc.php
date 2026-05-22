<?php

/**
 * @var string $page  La page courante (définie dans index.php)
 */
?>

<?php
/**
 * Header template file
 *
 * Contient :
 * - le <head> HTML (SEO, CSS, CDN)
 * - l'ouverture du <body>
 * - la barre de navigation
 *
 * @package PHP_David
 * @author  David R
 */
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;800;900&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ======================================================
         SEO (référencement)
         ====================================================== -->
    <title>- To The Next Level</title>
    <!-- <link rel="icon" href="/assets/favicon.ico" type="image/x-icon"> -->
    <link rel="icon" href="/assets/img/favicon.png" type="image/png">
    <meta name="description" content="Site de présentation – développement web">
    <meta name="keywords" content="développement web, PHP, Bootstrap, Sass">
    <meta name="author" content="David R">

    <!-- ======================================================
         Préconnexion CDN
         Améliore les performances de chargement
         ====================================================== -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="preconnect" href="https://kit.fontawesome.com" crossorigin>

    <!-- ======================================================
         Font Awesome (icônes)
         defer = chargement après le HTML
         ====================================================== -->
    <script src="https://kit.fontawesome.com/4e4d21f661.js" crossorigin="anonymous" defer></script>

    <!-- ======================================================
         Bootstrap CSS
         ====================================================== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <!-- ======================================================
         CSS compilé depuis Sass (style.scss → style.css)
         ====================================================== -->
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<!-- ==========================================================
     Body
     ========================================================== -->

<body class="d-flex flex-column min-vh-100 <?= ($page === 'Accueil') ? 'page-accueil' : 'page-interne' ?>">

    <?php
    require_once __DIR__ . "/navbar.php";
    ?>

    <!-- ==========================================================
     Contenu principal
     ========================================================== -->

    <main id="content" class="<?= ($page === 'Accueil') ? 'main-hero' : 'main-interne' ?>">