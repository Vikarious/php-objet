<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php if (isset($_GET["notif"])) {
        echo "Erreur veuillez ressaisir vos données";
    } ?>

    <form action="./traitement.php" method="POST">
        <label for="bankCode">Code bank:</label><br>
        <input type="text" id="bankCode" name="bankCode" value=""><br>

        <label for="agencyCode">agencyCode:</label><br>
        <input type="text" id="agencyCode" name="agencyCode" value=""><br>

        <label for="accountNumber">Account Number:</label><br>
        <input type="text" id="accountNumber" name="accountNumber" value=""><br>

        <label for="ribKey">RIB key:</label><br>
        <input type="text" id="ribKey" name="ribKey" value=""><br>

        <input type="submit" value="Submit">
    </form>

</body>

</html>