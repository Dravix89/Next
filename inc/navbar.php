<?php
/**
 * @var string $page  La page courante (définie dans index.php)
 */
?>

<nav class="contebody navbar navbar-expand-lg">
  <div class="navbar-inner contebody d-flex align-items-center justify-content-between">
    <a class="navbar-brand d-flex align-items-center" href="index.php?page=Accueil">
      <img src="assets/img/logo.png" alt="Logo" width="80" height="70">
    </a>
   <button id="navToggler" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
       <button id="navClose" style="background:none;border:none;color:#fff;font-size:2rem;position:absolute;top:1rem;right:1rem;cursor:pointer;display:none;" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">&times;</button>
      <ul class="navbar-nav align-items-lg-center">
        <li class="nav-item">
          <a class="nav-link <?php echo ($page === 'Accueil') ? 'active' : ''; ?>" href="index.php?page=Accueil">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($page === 'Offres') ? 'active' : ''; ?>" href="index.php?page=Offres">Offres</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($page === 'Projets') ? 'active' : ''; ?>" href="index.php?page=Projets">Projets</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($page === 'Contact') ? 'active' : ''; ?>" href="index.php?page=Contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php
$pagesAvecHero = ['Accueil', 'Offres', 'Projets'];
?>

<?php if (in_array($page, $pagesAvecHero)): ?>
  <header class="Hero">
    <div class="hero-inner contebody">
      <div class="hero-content text-center text-white">
        <div class="hero-layout hero-layout-1 mb-4">
          <h1>
            Le Next Level Ne S'attend Pas, Il Se Construit Avec Méthode Et Exigence Pour Ceux Qui Veulent Vraiment Changer La Donne
          </h1>
          <p>Sous-Titre</p>
        </div>
        <div class="hero-layout hero-layout-2 d-flex justify-content-center flex-wrap">
          <a href="#Contact" class="btn-hero-primary">Nous Contacter</a>
          <a href="#Projets" class="btn-hero-outline">Découvrir</a>
        </div>
      </div>
    </div>
  </header>
<?php endif; ?>