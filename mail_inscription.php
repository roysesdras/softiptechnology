<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nettoyer les données soumises
    $full_name = htmlspecialchars($_POST['full_name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($_POST['phone']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $formation_choisi = htmlspecialchars($_POST['formation_choisi']);
    $message = htmlspecialchars($_POST['message']);

    // Valider l'adresse e-mail
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Construire le message
        $message = "Nom et Prénom: $full_name\n"; 
        $message .= "Adresse: $adresse\n";
        $message .= "Email: $email\n";
        $message .= "Téléphone: $phone\n";
        $message .= "Formation ou domaine d'intérêt: $formation_choisi\n";
        $message .= "Message: $message";

        // En-têtes du mail
        $headers = "From: $email\r\n";
        $headers .= "Reply-to: $email\r\n";

        // Envoyer le mail de manière plus sécurisée
        $retour = mail("contact@softiptechnology.com", "Une inscription vient d'être enregistrée. <br>Veuillez vérifier votre boîte mail ou votre page de paiement pour confirmer la réception des fonds.", $message, $headers);

        // Redirigé vers la page de confirmation
        header("Location:confirm.php");
        exit;       
    } 
    
} else {
    // Si le formulaire n'a pas été soumis
    echo '<p style="font-size: 18px; padding: 5em; font-family:calibri;">Le formulaire n\'a pas été soumis correctement. Veuillez réessayer. <br>
    <a href="https://votre-site-web.de/#inscription_form.php">je m\'inscris</a></p>';
}
?>

