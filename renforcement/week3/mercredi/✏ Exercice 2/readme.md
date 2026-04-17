✏ Exercice 2 — Catalogue de véhicules — Semi-autonome

Contexte :
Un concessionnaire gère différents types de véhicules : voitures, motos et camionnettes. Tous
les véhicules ont une marque, un modèle, une année et un prix de base. Chaque type de
véhicule calcule son prix final différemment : la voiture ajoute des frais de mise en route (150€),
la moto applique une remise de 5% si l'année < 2020, la camionnette ajoute un malus
écologique calculé en fonction de sa charge utile.
Structure des classes :
• abstract class Vehicule { protected $marque; protected $modele; protected
$annee; protected $prixBase; }
• class Voiture extends Vehicule { private $fraisMiseEnRoute = 150; }
• class Moto extends Vehicule { private $remiseAncienne = 0.05; }
• class Camionnette extends Vehicule { private $chargeUtile; }
• → abstract function getPrixFinal() : float (obligatoire dans chaque
sous-classe)
• → abstract function getDescription() : string
Travail demandé :
10.Créez la classe abstraite Vehicule avec ses 4 attributs protected, son constructeur, ses
getters
11. Déclarez les méthodes abstraites getPrixFinal() et getDescription() dans Vehicule
12.Créez Voiture extends Vehicule : getPrixFinal() retourne prixBase + 150
13.Créez Moto extends Vehicule : getPrixFinal() applique -5% si annee < 2020, sinon
prixBase
14.Créez Camionnette extends Vehicule avec $chargeUtile (en kg) : getPrixFinal() ajoute
chargeUtile * 0.10 comme malus écologique
15.Implémentez getDescription() dans chaque sous-classe avec un format propre à chaque
type
16.Créez un tableau $catalogue avec 2 voitures, 1 moto et 1 camionnette
17.Parcourez le catalogue avec foreach et affichez getDescription() + getPrixFinal() pour
chaque véhicule
18.Calculez et affichez le prix moyen du catalogue (somme des getPrixFinal() / nombre de
véhicules)
🚀 Bonus :
c. Ajoutez une méthode statique Vehicule::getMostExpensive(array $vehicules) qui
retourne le véhicule le plus cher
d. Ajoutez une méthode isRecent() dans Vehicule qui retourne true si annee >= (année
courante - 3)

