<?php
/** @var \PDO $pdo */


require_once 'inc/init.php';

// ===============================
// SÉCURITÉ : Vérifier POST
// ===============================

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit('Accès interdit');
}

// ===============================
// RÉCUPÉRATION + NETTOYAGE
// ===============================

$nom       = trim($_POST['nom'] ?? '');
$prenom    = trim($_POST['prenom'] ?? '');
$email     = trim($_POST['email'] ?? '');
$telephone = trim($_POST['telephone'] ?? '');
$sujet     = trim($_POST['sujet'] ?? '');
$message   = trim($_POST['message'] ?? '');

if (empty($email) || empty($message)) {
    exit('Email et message obligatoires');
}

// ===============================
// ENREGISTRER LE MESSAGE
// ===============================

$sql = "INSERT INTO messages_contact 
(nom, prenom, email, telephone, sujet, message)
VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $nom,
    $prenom,
    $email,
    $telephone,
    $sujet,
    $message
]);

// ===============================
// INSCRIPTION NEWSLETTER
// ===============================

$sqlNewsletter = "
INSERT INTO newsletter (email)
VALUES (?)
ON DUPLICATE KEY UPDATE actif = 1
";

$stmt = $pdo->prepare($sqlNewsletter);
$stmt->execute([$email]);

// ===============================
// EMAIL DE CONFIRMATION
// ===============================

$to = $email;
$subject = "Inscription à la newsletter – Next";
$messageMail = "
Bonjour,

Merci pour votre inscription à la newsletter Next.

Vous recevrez prochainement nos actualités.

À bientôt,
L’équipe Next
";

$headers = "From: contact@next.fr\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8";

mail($to, $subject, $messageMail, $headers);

// ===============================
// REDIRECTION
// ===============================

header('Location: merci.html');
exit;
