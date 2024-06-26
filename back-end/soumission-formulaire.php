<?php
// Importation de la librairie PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Chemins pour les fichiers requis
require '../libraries/phpmailer/src/Exception.php';
require '../libraries/phpmailer/src/PHPMailer.php';
require '../libraries/phpmailer/src/SMTP.php';

if (isset($_POST["submit"])) {
    $mail = new PHPMailer(true);

    try {
        // Paramètres de configuration SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = "martykillian7@gmail.com"; // Adresse e-mail du destinataire
        $mail->Password = 'aqxkjugksblpvwpy'; // Mot de passe d'application GMAIL
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // Paramètres du message
        $mail->setFrom(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL)); // Adresse e-mail de l'expéditeur (Arcadia reçoit le mail)
        $mail->addAddress("martykillian7@gmail.com"); // Adresse e-mail renseignée dans le formulaire (également destinataire)
        $mail->isHTML(true);

        $mail->Subject = filter_input(INPUT_POST, 'sujet', FILTER_SANITIZE_SPECIAL_CHARS);
        $mail->Body = "Ce message vous a été envoyé via la page contact du site kmportfolio.com <br> Nom : <strong>{$_POST['name']}</strong> <br> Mail : {$_POST['email']}<br><br>" . $_POST["message"]; // Inclure l'adresse e-mail de l'expéditeur dans le corps du message

        // Permet à l'utilisateur de répondre à l'expéditeur directement depuis Gmail
        $mail->addReplyTo($_POST['email']);

        // Envoi du message
        $mail->send();

        echo "
            <script>
            alert('Envoi avec succès.');
            document.location.href = '../index.php';
            </script>
        ";
    } catch (Exception $e) {
        echo "Erreur d'envoi du message : {$mail->ErrorInfo}";
    }
}
?>
