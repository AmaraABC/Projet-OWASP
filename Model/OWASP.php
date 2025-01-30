<?php

// Définition d'une classe pour la connexion avec la base de données sur MySQL
class OWASP
{
    public static function connexion()
    {
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=owasp', 'root', 'password');
            // echo "Connexion à la base de données effectuée avec succès !\n";
            return $bdd;
        } catch (Exception $e) {
            echo $e;
        }
    }
}

// Lancement de la connexion
OWASP::connexion();
