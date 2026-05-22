<?php
/** @var \PDO $pdo */


require_once 'inc/init.php';

$email = trim($_POST['email'] ?? '');

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit('Email invalide');
}

$sql = "
INSERT INTO newsletter (email)
VALUES (?)
ON DUPLICATE KEY UPDATE actif = 1
";

$stmt = $pdo->prepare($sql);
$stmt->execute([$email]);

mail(
    $email,
    "Bienvenue à la newsletter Next",
    "Merci pour votre inscription !",
    "From: contact@next.fr"
);

header('Location: merci.html');
exit;
