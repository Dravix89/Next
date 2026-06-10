# Next — Site vitrine PHP

Site vitrine développé en PHP avec architecture en includes, utilisation de Bootstrap 5, Sass et JavaScript.

---

# Aperçu du projet

Projet front-end/back-end léger permettant de présenter :

- Accueil
- Methode
- Offres
- Projets
- A Propos 
- Contact
- Newsletter

Le projet est structuré de manière modulaire avec des fichiers `include` réutilisables pour le header, la navbar et le footer.

---

# Technologies utilisées

- PHP
- HTML5
- SCSS / CSS3
- Bootstrap 5
- JavaScript Vanilla
- Font Awesome
- MySQL (prévu mais désactivé actuellement)

---

# Structure du projet

```bash
04_Next/
│
├── assets/
│   ├── css/
│   │   ├── style.scss
│   │   ├── style.css
│   │   ├── _Contact.scss
│   │   ├── _footer.scss
│   │   └── autres fichiers SCSS...
│   │
│   ├── img/
│   │   └── ressources images
│   │
│   └── js/
│       └── script.js
│
├── inc/
│   ├── init.php
│   ├── navbar.php
│   ├── header.inc.php
│   └── footer.inc.php
│
├── Accueil.php
├── Methode.php
├── Offres.php
├── Projets.php
├── Apropos.php
├── Contact.php
├── contact_traitement.php
├── index.php
└── newsletter_traitement.php

``` 


## Fonctionnalités

- Architecture PHP modulaire
- Responsive design
- Navigation dynamique
- Intégration Bootstrap 5
- Gestion du formulaire de contact
- Gestion newsletter
- Structure prête pour connexion MySQL via PDO
- Organisation Sass par composants/pages

---

## Base de données

> La connexion est actuellement désactivée afin de travailler uniquement sur la partie front-end.

Une connexion PDO est préparée dans :

```bash
/inc/init.php
```

### Configuration prévue

```php
$host = 'localhost';
$dbname = 'next';
$user = 'root';
$password = '';
```

---

## Auteur

David R

---

## Statut du projet

Projet en développement.

- Intégration back-end en cours

