✏ Exercice 1 — Gestion de projets — Guidé

Contexte :
Une agence digitale gère des projets composés de tâches. Chaque tâche a une durée estimée.
Le chef de projet veut calculer le budget total d'un projet en se basant sur les heures estimées,
en ajoutant une marge de 10% pour les imprévus. Il veut aussi pouvoir lister les tâches
dépassant un certain seuil d'heures.
Structure des classes :
• class Task { private $id; private $description; private $estimatedHours; }
• class Project { private $title; private $dailyRate; private $tasks = []; }
• → Task : constructeur + getters + méthode isBig($threshold) qui retourne
true si estimatedHours > $threshold
• → Project : constructeur + addTask(Task $task) + getter $tasks
• → Project : calculateTotalHours() — somme des heures de toutes les
tâches
• → Project : calculateTotalWithBuffer($bufferPercent = 10) — total * (1 +
buffer/100)
• → Project : calculateBudget() — totalHeures * dailyRate / 8 (taux
journalier / 8h)
• → Project : getBigTasks($threshold) — retourne un tableau des tâches
dont isBig() est true
Travail demandé :
1. Créez la classe Task avec ses 3 attributs private, son constructeur, ses getters et la
méthode isBig($threshold)
2. Créez la classe Project avec $title, $dailyRate (taux journalier), $tasks (tableau vide par
défaut)
3. Implémentez addTask(Task $task) : ajoute la tâche au tableau $tasks
4. Implémentez calculateTotalHours() : parcourt $tasks avec foreach et additionne les
heures
5. Implémentez calculateTotalWithBuffer($bufferPercent = 10) : retourne les heures + la
marge en %
6. Implémentez calculateBudget() : heures totales avec buffer × (dailyRate / 8)
7. Implémentez getBigTasks($threshold) : retourne un tableau filtré des tâches dépassant
le seuil
8. Testez avec un projet 'Refonte site web' (600€/jour), 3 tâches : 'Design' 12h, 'Dev front'
30h, 'Dev back' 45h
9. Affichez : total heures sans buffer, total avec 10% buffer, budget estimé, tâches > 20h
🚀 Bonus :
a. Ajoutez une méthode getSummary() qui retourne une chaîne formatée avec toutes les
infos du projet
b. Ajoutez une méthode getMostExpensiveTask() qui retourne la tâche avec le plus
d'heures