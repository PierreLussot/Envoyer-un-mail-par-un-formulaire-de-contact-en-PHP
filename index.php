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
    <p class="request_message">
        message envoyer !
    </p>
    <form action="" method="POST">
        <label for="">Nom</label>
        <input type="text" name="username">
        <label for="">Email</label>
        <input type="email" name="name">
        <label for="">Téléphone</label>
        <input type="number" name="phone">
        <label for="">Message</label>
        <textarea name="message" id="" cols="30" rows="10"></textarea>
        <button name="send">Envoyer</button>
    </form>
</body>

</html>