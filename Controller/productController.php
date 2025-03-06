<?php
include_once('./Model/productModel.php');

// Classe pour afficher les informations de chaque View
class productController
{
    private $model;

    public function __construct()
    {
        $this->model = new productModel;
    }

    // Transmission des informations à la page qui affiche les produits du microsite
    public function products()
    {
        $products = $this->model->getAllProducts();
        include('./View/articles.php');
    }

    // Transmission des informations à la page 'details' des produits
    public function details()
    {
        $details = $this->model->getProductById($_GET['id']);
        include('./View/detail.php');
    }
}
