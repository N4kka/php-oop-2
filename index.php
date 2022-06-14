<?php
require_once __DIR__ . "/Food.php";
require_once __DIR__ . "/Games.php";
require_once __DIR__ . "/Kennels.php";
require_once __DIR__ . "/User.php";

$cibo = new Food("Croccantini", "Royal Canin", 100, "Manzo");
var_dump($cibo);

$giochi = new Games("Palla", "Gioco robusto per allenare i denti del cane", 20, "plastica");
var_dump($giochi);

$cucce = new Kennels("Cuccia", "Comodissima cuccia per far dormire il tuo cane in totale serenità e comodità", 150, "Pelle scamosciata");

$nicola = new User("Nicola", "sarlinicola7@gmail.com", "pincopallino");
$nicola->addToCart($cibo);
$nicola->addToCart($giochi);
$nicola->addToCart($cucce);

$giochi->available = false;

$result = $nicola->addToCart($giochi);
if ($result) {
    echo "This game is added to the cart";
} else {
    echo "This game is currently not available";
}

var_dump($nicola);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
</head>

<body>

    <h2>Prodotti per animali</h2>
    <ul>
        <li> <?php echo $cibo->printInfo() ;?> </li>
        <li> <?php echo $giochi->printInfo() ;?> </li>
        <li> <?php echo $cucce->printInfo() ;?> </li>
    </ul>

    <h2>Ciao <?php echo $nicola->name ?>, questo é il tuo carrello</h2>
    <ul>
        <?php foreach($nicola->cart as $cartProducts) { ?>
        <li> <?php echo $cartProducts->printInfo(); ?> </li>
        <?php } ?>  
    </ul>
    <h3>Totale: € <?php echo $nicola->getTotalPrice(); ?> </h3>

</body>

</html>