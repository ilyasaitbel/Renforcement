1. Afficher le nom et l''email de tous les utilisateurs de type 'client'
2. Afficher tous les plats dont le prix est inférieur à 15€, triés du moins cher au plus cher
3. Compter le nombre de commandes par statut ('livré', 'en cours', 'annulé')
4. Afficher les 3 restaurants avec la meilleure note moyenne (ORDER BY + LIMIT)
5. Calculer le chiffre d'affaires total et le panier moyen de toutes les commandes livrées
6. Afficher tous les plats dont le nom contient le mot 'poulet' (LIKE)

1. Afficher le nom et l'email de tous les utilisateurs de type 'client'

select nom , email from utilisateurs where type='client'

2. Afficher tous les plats dont le prix est inférieur à 15€, triés du moins cher au plus cher

select * from  plats where prix < 15 order by asc

3. Compter le nombre de commandes par statut ('livré', 'en cours', 'annulé')

select statut, count(*) as nb_commande from commandes where statut in ('livré', 'en cours', 'annulé') GROUP BY statut

4. Afficher les 3 restaurants avec la meilleure note moyenne (ORDER BY + LIMIT)

SELECT * FROM restaurants ORDER BY  not_moy LIMIT 3

5. Calculer le chiffre daffaires total et le panier moyen de toutes les commandes livrées

SELECT status , SUM(total) as total_chiffre_daffaires , avg(total) as total_panier_moyen from restaurants WHERE status = 'livré' GROUP BY status

6. Afficher tous les plats dont le nom contient le mot 'poulet' (LIKE)

SELECT * from plats WHERE nom like '%poulet%'