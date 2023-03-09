<?php

require_once("commerce.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Prodotti per animali</title>
</head>

<body>
    <header>
        <h1>Prodotti per animali</h1>
    </header>
    <main>
        <ul class="prodotti">
            <?php foreach ($negozio->getProdotti() as $prodotto) : ?>
                <li class="prodotto">
                    <img src="<?php echo $prodotto->getImmagine(); ?>" alt="<?php echo $prodotto->getNome(); ?>">
                    <h2><?php echo $prodotto->getNome(); ?></h2>
                    <p class="categoria"><?php echo $prodotto->getCategoria(); ?></p>
                    <p class="prezzo"><?php echo $prodotto->getPrezzo(); ?>€</p>
                    <?php if ($prodotto instanceof Cibo) : ?>
                        <p class="tipo">Cibo</p>
                    <?php elseif ($prodotto instanceof Gioco) : ?>
                        <p class="tipo">Gioco</p>
                    <?php elseif ($prodotto instanceof Cuccia) : ?>
                        <p class="tipo">Cuccia</p>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
</body>

</html>