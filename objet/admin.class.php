<?php

include_once("user.class.php");

Class Admin extends User
{
    private $droits;

    public function supprimerUser($user)
    {
        echo "<p/>L'administrateur " . $this->pseudo . " supprime l'utilisateur " . $this->user . ".";
    }
}
