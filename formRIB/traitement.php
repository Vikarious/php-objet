<?php
include_once("./ribValidator.php");

// function my_var_dump($var)
// {
//     echo "<pre style='background-color: orange; border: 2px solid black'>";
//     print_r($var);
//     // var_dump($var);
//     echo "</pre>";
// }

$validator = new RIBValidator($_POST["bankCode"], $_POST["agencyCode"], $_POST["accountNumber"], $_POST["ribKey"]);
// my_var_dump($validator);

if ($validator->isValid()) {
    header("location: ./index.php?notif=ok");
    exit;
} else {
    header("location: ./index.php?notif=notok");
    exit;
}
