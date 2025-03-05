<?php

// Définition d'une classe pour la connexion avec la base de données sur MySQL
class OWASP
{
    public static function connexion()
    {
        try {
            /* MySQL
            $bdd = new PDO('mysql:host=localhost;dbname=owasp', 'root', 'password'); */
            
            // PostgreSQL / pgadmin 4
            $bdd = new PDO('pgsql:host=localhost;port=5432;dbname=owasp', 'postgres', 'epiphany212RA_');
            // echo "Connexion à la base de données effectuée avec succès !\n";
            return $bdd;
        } catch (Exception $e) {
            echo $e;
        }
    }
}

// Lancement de la connexion
OWASP::connexion();
