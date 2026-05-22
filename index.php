<?php
// Pour rappel le point d'entrée d'un site internet est toujours le fichier index.php.
// Si Apache trouve un fichier index.php à la racine du dossier, il le lancera et l'affichera auto.

require_once 'inc/init.php';

$page = $_GET['page'] ?? 'Accueil';


$pagesAutorisees = ['Accueil', 'Offres', 'Projets', 'Contact'];

if (!in_array($page, $pagesAutorisees)) {
    $page = 'Accueil';
}

require_once 'inc/header.inc.php';


include $page . '.php';
?>
   

<script src="assets/js/script.js"></script>

<?php
require_once 'inc/footer.inc.php';
?>