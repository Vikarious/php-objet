<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <?php
    if (isset($_GET["notif"])) {
        if ($_GET["notif"] == "ok") {
    ?>
            <div class="alert alert-success" role="alert">
                RIB valide !
            </div>
        <?php
        }
        if ($_GET["notif"] == "notok") {
        ?>
            <div class="alert alert-warning" role="alert">
                RIB non valide !
            </div>
    <?php
        }
    }
    ?>

    <form action="./traitement.php" method="POST">
        <label for="bankCode">Code bank:</label><br>
        <input type="text" id="bankCode" name="bankCode" minlength="5" maxlength="5" pattern="[0-9]{5}" required><br>

        <label for="agencyCode">Agency Code:</label><br>
        <input type="text" id="agencyCode" name="agencyCode" minlength="5" maxlength="5" pattern="[0-9]{5}" required><br>

        <label for="accountNumber">Account Number:</label><br>
        <input type="text" id="accountNumber" name="accountNumber" minlength="11" maxlength="11" pattern="[0-9a-zA-Z]{11}" required><br>

        <label for="ribKey">RIB key:</label><br>
        <input type="text" id="ribKey" name="ribKey" minlength="2" maxlength="2" pattern="[0-9]{2}" required><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>