CREATE DATABASE Owasp;
USE Owasp;


DROP TABLE IF EXISTS 'product' ;

CREATE TABLE IF NOT EXISTS 'product' (
  'id' INT UNSIGNED NOT NULL AUTO_INCREMENT,
  'name' VARCHAR(45) NOT NULL,
  'description' TEXT NULL,
  'picture' VARCHAR(128) NULL,
  'price' DECIMAL(10,2) NOT NULL DEFAULT 0,
  'status' TINYINT(1) NOT NULL DEFAULT 0,
  'created_at' TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  'alt' VARCHAR(45) NOT NULL
)

--Exemple pour ajouter un produit dans la base de données
--la ligne qui commence par "id" montre l'ordre des valeurs
--la ligne qui commence par "1" montre un exemple de valeur
--les espaces entre les valeurs sont juste là pour faire beau

--START TRANSACTION;
--INSERT INTO 'product' ('id', 'name', 'description', 'picture', 'price', 'status', 'created_at') VALUES (
--      'id', 'nom',         'description',           'image',                          'prix', 'status', 'date'
--      '1',  'nomproduit', 'description du produit', '../image/produit/nomproduit.jpg', '30',   '1',     '2018-10-17'
--);
--COMMIT;
