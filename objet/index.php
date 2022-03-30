<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Introduction php orienté objet</h1>

    <h2>Instanciation</h2>
    <?php
    include_once("./user.class.php");
    $user1 = new User();
    $user2 = new User();
    $user3 = new User();
    $user4 = new User();

    $user1->setPseudo('Dupond');
    $user1->setEMail("test@gmail.com");

    $user2->setPseudo('Jean');
    $user3->setPseudo('Bastien');
    $user4->setPseudo('123456');

    if ($user1->envoyerEMail("le titre", "le texte du mail")) {
        echo "<p> mail envoyé </p>";
    } else {
        echo "<p> mail pas envoyé </p>";
    }

    var_dump($user1);

    $user1->bloquer();

    var_dump($user1);
    ?>
</body>

</html>