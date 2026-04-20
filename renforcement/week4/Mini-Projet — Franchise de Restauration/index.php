    <?php
    require_once 'models/Plat.php';
    require_once 'models/PlatSale.php'; 
    require_once 'models/Boisson.php';
    require_once 'models/PlatSucre.php';
    require_once 'models/Restaurant.php';

    $p = new PlatSale(1, 'Burger Classic', 8.50, 650, ['steak','salade','tomate'], false);

    echo $p->calculerPrix() . "\n";

    $d = new PlatSucre(3, 'Tarte Tatin', 6.00, 420, true, 8);

    echo $d->calculerPrix();

    $resto = new Restaurant('Chez CodeWave', 10);

    // 3 plats salés
    $resto->ajouterPlat(new PlatSale(1, "Pizza", 80, 900, ["fromage"], false));
    $resto->ajouterPlat(new PlatSale(2, "Salade", 50, 300, ["laitue"], true));
    $resto->ajouterPlat(new PlatSale(3, "Burger", 70, 800, ["viande"], false));

    // 2 plats sucrés (1 fait maison)
    $resto->ajouterPlat(new PlatSucre(4, "Tarte", 40, 400, true, 6));
    $resto->ajouterPlat(new PlatSucre(5, "Glace", 30, 250, false, 2));

    // 2 boissons (1 alcoolisée)
    $resto->ajouterPlat(new Boisson(6, "Coca", 15, 150, 33, false));
    $resto->ajouterPlat(new Boisson(7, "Vin", 60, 200, 25, true));

    echo count($resto->getPlatsDisponibles()) . "\n";

    echo $resto->calculerCA() . "\n";

    echo  $resto->getPlatPlusRentable()->getNom() . "\n";

    echo "Plats <= 500 calories:\n";

    foreach($resto->filtrerParCalories(500) as $plat){
        echo "- " . $plat->getNom() . "\n";
    }

    var_dump($resto->getStatistiques());