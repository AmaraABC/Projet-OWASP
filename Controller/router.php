<?php
include_once('productController.php');

// Définition d'une variable pour la redirection vers une page du site
$page = (isset($_GET['page']) ? $_GET['page'] : 'homepage');

switch ($page) {
    case 'homepage':
        include_once('./View/homepage.php');
        break;

    case 'articles':
        $products = new productController;
        $products->products();
        break;

    case 'details':
        $details = new productController;
        $details->details();
        break;
}
