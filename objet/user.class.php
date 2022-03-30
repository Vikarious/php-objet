<?php

class User
{
    // Propriétés
    private $pseudo;
    private $email;
    private $signature;
    private $actif;

    // Methodes
    // Pseudo
    public function getPseudo()
    {
        return $this->pseudo;
    }
    public function setPseudo($newPseudo)
    {
        if (!empty($newPseudo) and strlen($newPseudo) < 10) {
            $this->pseudo = $newPseudo;
        } else {
            echo "Pseudo vide ou trop long <br>";
        }
    }
    // Email
    public function setEMail($newEMail)
    {
        if (!empty($newEMail) and strlen($newEMail) < 20) {
            $this->email = $newEMail;
        } else {
            echo "Pseudo vide ou trop long <br>";
        }
    }

    public function envoyerEMail($titre, $message = "Texte par defaut")
    {
        return mail($this->email, $titre, $message);
    }
    public function bloquer()
    {
        $this->actif = false;
        $this->envoyerEMail("Alert User", "Vous etes bloqué");
    }
}
