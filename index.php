<?php
if (isset($_POST['send'])) {
    extract($_POST);
    if (
        isset($username) && isset($email) &&
        isset($phone) && isset($message) &&
        $username != "" && $email != "" &&
        $phone != "" && $message != ""
    ) {
        //le destinataire (votre email)
        $to = "testcodeidconnect@gmail.com";
        $subject = "Vous avez recu un message de : " . $email;

        $message = "
        <p>Vous avez recu un message de <strong> " . $email . "</strong> </p>
        <p><strong>Nom : </strong> " . $username . "</p>
        <p><strong>Telephone : </strong> " . $phone . "</p>
        <p><strong>Message : </strong> " . $message . "</p>
        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <' . $email . '>' . "\r\n";

        //envoi du mail
        mail($to, $subject, $message, $headers);
        //verificationnd l'envoie

        if ($send) {
            $_SESSION['succes_message'] = "message envoyé";
        } else {
            $info = "message non envoyé";
        }
    } else {
        $info = "Veuillez remplir tous les champs";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envoie d'un email depuis un formulaire</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    //affichage message d'erreur
    if (isset($info)) {
    ?>
        <p class="request_message" style="color:red">
            <?= $info ?>
        </p>
    <?php
    }
    ?>

    <?php
    //afficher le message de succes
    if (isset($_SESSION['succes_message'])) {
    ?>
        <p class="request_message" style="color:green">
            <?= $_SESSION['succes_message']  ?>
        </p>
    <?php
    }
    ?>
    <form action="" method="POST">
        <label for="">Nom</label>
        <input type="text" name="username">
        <label for="">Email</label>
        <input type="email" name="email">
        <label for="">Téléphone</label>
        <input type="number" name="phone">
        <label for="">Message</label>
        <textarea name="message" id="" cols="30" rows="10"></textarea>
        <button name="send">Envoyer</button>
    </form>
</body>

</html>