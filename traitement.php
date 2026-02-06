<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $type = htmlspecialchars($_POST['type']);
    $message = htmlspecialchars($_POST['message']);

    // Ici, tu pourrais envoyer un vrai mail, mais pour le test XAMPP :
    echo "<h1>Merci $nom !</h1>";
    echo "<p>Votre demande pour un <strong>$type</strong> a bien été reçue. Opticode vous recontactera sur <strong>$email</strong>.</p>";
    echo "<a href='index.html'>Retour au site</a>";
}
?>