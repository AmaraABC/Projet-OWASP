CREATE DATABASE Owasp;
USE Owasp;


DROP TABLE IF EXISTS `product` ;

CREATE TABLE IF NOT EXISTS `product` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL COMMENT 'Le nom du produit',
  `description` TEXT NULL COMMENT 'La description du produit',
  `picture` VARCHAR(128) NULL COMMENT 'L\'URL de l\'image du produit',
  `price` DECIMAL(10,2) NOT NULL DEFAULT 0 COMMENT 'Le prix du produit',
  `status` TINYINT(1) NOT NULL DEFAULT 0 COMMENT 'Le statut du produit (0=non renseignée, 1=dispo, 2=pas dispo)',
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'La date de création du produit',
)



--exemple pour ajouter un produit dans la base de donnée
--la ligne qui commence par "id" montre l'ordre des valeur
--la ligne qui commence par "1" montre un exemple de valeur
--les espace entre les valeur sont juste là pour faire beau

--START TRANSACTION;
--INSERT INTO `product` (`id`, `name`, `description`, `picture`, `price`, `status`, `created_at`) VALUES (
--      `id`, `nom`,         `description`,           `image`,                          `prix`, `status`, `date`
--      '1',  'nomproduit', 'description du produit', '../image/produit/nomproduit.jpg', '30',   '1',     '2018-10-17'
--);
--COMMIT;
