<?php
include_once('OWASP.php');

// Définition d'une classe pour l'affichage des produits
class productModel
{
    private $product;

    // Connexion à la base de données via ce constructeur
    public function __construct()
    {
        $this->product = OWASP::connexion();
    }

    // Requête pour afficher tous les produits présents dans la base de données à partir du plus récent
    public function getAllProducts()
    {
        return $this->product->query("SELECT * from product order by created_at desc")->fetchAll(PDO::FETCH_ASSOC);
    }

    // Requête qui renvoie un produit en fonction de son identifiant
    public function getProductById($id)
    {
        return $this->product->query("SELECT * from product where id = $id")->fetchAll(PDO::FETCH_ASSOC);
    }
}
