
-- J'ai créé des fake data pour tester

CREATE DATABASE livraison

use livraison

-- Création de la base
CREATE DATABASE livraison;
USE livraison;

-- Table utilisateurs
CREATE TABLE utilisateurs (
    id INT PRIMARY KEY,
    nom VARCHAR(50),
    email VARCHAR(100),
    type VARCHAR(20)
);

-- Table restaurants
CREATE TABLE restaurants (
    id INT PRIMARY KEY,
    nom VARCHAR(50),
    ville VARCHAR(50),
    note_moy FLOAT
);

-- Table plats
CREATE TABLE plats (
    id INT PRIMARY KEY,
    restaurant_id INT,
    nom VARCHAR(50),
    prix FLOAT,
    categorie VARCHAR(50)
);

-- Table commandes
CREATE TABLE commandes (
    id INT PRIMARY KEY,
    client_id INT,
    livreur_id INT,
    restaurant_id INT,
    statut VARCHAR(20),
    total FLOAT,
    created_at DATE
);

-- Table lignes_commande
CREATE TABLE lignes_commande (
    id INT PRIMARY KEY,
    commande_id INT,
    plat_id INT,
    quantite INT,
    prix_unit FLOAT
);

-- Table notations
CREATE TABLE notations (
    id INT PRIMARY KEY,
    commande_id INT,
    note INT
);

INSERT INTO utilisateurs (id, nom, email, type) VALUES
(1, 'Ali', 'ali@mail.com', 'client'),
(2, 'Sara', 'sara@mail.com', 'client'),
(3, 'Yassine', 'yassine@mail.com', 'client'),
(4, 'Omar', 'omar@mail.com', 'livreur'),
(5, 'Lina', 'lina@mail.com', 'livreur'),
(6, 'Karim', 'karim@mail.com', 'livreur');

INSERT INTO restaurants (id, nom, ville, note_moy) VALUES
(1, 'PizzaCity', 'Casablanca', 4.5),
(2, 'BurgerHouse', 'Rabat', 4.2),
(3, 'SushiTime', 'Marrakech', 4.8),
(4, 'marhba bik', 'Marrakech', 4.8),
(5, 'TacosWorld', 'Fes', 3.9);

INSERT INTO plats (id, restaurant_id, nom, prix, categorie) VALUES
(1, 1, 'Pizza', 80, 'fastfood'),
(2, 2, 'Burger', 60, 'fastfood'),
(3, 3, 'Sushi', 120, 'japonais'),
(4, 4, 'Tacos', 50, 'fastfood');

INSERT INTO commandes (id, client_id, livreur_id, restaurant_id, statut, total, created_at) VALUES
(1, 1, 4, 1, 'livré', 160, '2025-01-10'),
(2, 2, 5, 2, 'livré', 60, '2025-01-11'),
(3, 1, 4, 1, 'livré', 80, '2025-01-12'),
(4, 3, 5, 3, 'en cours', 120, '2025-01-13'),
(5, 2, 4, 1, 'livré', 90, '2025-01-14'),
(6, 2, 4, 4, 'livré', 90, '2025-01-14'),
(7, 1, 6, 2, 'livré', 40, '2025-01-15');

INSERT INTO lignes_commande (id, commande_id, plat_id, quantite, prix_unit) VALUES
(1, 1, 1, 2, 80),
(2, 2, 2, 1, 60),
(3, 3, 1, 1, 80),
(4, 4, 3, 1, 120),
(5, 5, 1, 1, 90),
(6, 6, 2, 1, 40);

INSERT INTO notations (id, commande_id, note) VALUES
(1, 1, 5),
(2, 2, 4),
(3, 3, 3),
(4, 5, 5),
(5, 6, 2);

--  Tous les restaurants avec leur nombre de commandes
SELECT r.nom, COUNT(c.id) as nbc FROM restaurants r LEFT JOIN commandes c on r.id = c.restaurant_id GROUP BY r.nom

--  Pour chaque livreur, afficher son nom et le nombre de
-- livraisons effectuées (statut = 'livré'), même s'il n'en a aucune
SELECT * FROM utilisateurs;
SELECT u.nom , COUNT(c.id) from utilisateurs u LEFT JOIN commandes c on u.id = c.livreur_id and c.statut = 'livré' WHERE u.type = 'livreur' GROUP BY u.nom

-- Afficher les clients qui ont passé au moins une commande dont le
-- total dépasse 30€
SELECT u.nom FROM utilisateurs u WHERE id IN (SELECT c.client_id FROM commandes c JOIN lignes_commande lc on c.id = lc.commande_id WHERE lc.prix_unit * lc.quantite > 30 )

--  Afficher les restaurants qui n'ont reçu AUCUNE commande

SELECT r.nom FROM restaurants r WHERE r.id NOT IN (SELECT c.restaurant_id from commandes c)

-- Restaurants ayant reçu plus de 3 commandes ET un chiffre
-- d'affaires total > 80€

SELECT r.nom , COUNT(c.id) nbc, SUM(c.total) t FROM restaurants r JOIN commandes c ON r.id = c.restaurant_id GROUP BY r.nom HAVING nbc > 2 and t > 80;

-- Pour chaque client, son nom et la somme totale
-- dépensée, triée du plus gros au plus petit

SELECT u.nom, SUM(lc.quantite * lc.prix_unit) as total FROM utilisateurs u JOIN commandes c on c.client_id = u.id JOIN lignes_commande lc on lc.commande_id = c.id GROUP BY u.id ORDER BY total DESC;

--  Livreurs ayant au moins une notation > 4 (via la table notations
-- et commandes)

SELECT DISTINCT u.nom FROM utilisateurs u JOIN commandes c on u.id = c.livreur_id WHERE EXISTS (SELECT 1 FROM notations n WHERE n.commande_id =  c.id and n.note > 4)

-- Lancez EXPLAIN sur la requête n°6 et identifiez si un index manque.
-- Créez-le si nécessaire.

    CREATE INDEX idx_client on commandes(client_id);
    CREATE INDEX idx_commande on lignes_commande(commande_id);
    EXPLAIN SELECT u.nom, SUM(lc.quantite * lc.prix_unit) as total FROM utilisateurs u JOIN commandes c on c.client_id = u.id JOIN lignes_commande lc on lc.commande_id = c.id GROUP BY u.id ORDER BY total DESC;

-- bonus

-- Trouvez le plat le plus commandé (toutes commandes confondues) en croisant
-- lignes_commande et plats

SELECT p.nom, SUM(lc.quantite) nbp FROM plats p join lignes_commande lc on p.id = lc.plat_id GROUP BY p.nom ORDER BY nbp DESC

-- Calculez le panier moyen par ville en croisant commandes et restaurants, uniquement
-- pour les villes avec plus de 5 commandes

SELECT r.ville , COUNT(c.id) nbc FROM restaurants r JOIN commandes c on c.restaurant_id = r.id GROUP BY r.ville ORDER BY nbc DESC