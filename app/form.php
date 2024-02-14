<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <p> <label for="product">Descrition : </label><input type="text" name="product" placeholder="Produit" value="<?php if (isset($_POST['product'])) {
            echo $_POST['product'];
        } ?>"></p>
        <p> <label for="price">Prix : </label><input type="text" name="price" label="Prix" placeholder="Prix unitaire"
                value="<?php if (isset($_POST['price'])) {
                    echo $_POST['price'];
                } ?>"></p>
        <p> <input type="submit" value="Envoyer">
    </form>

    <?php

    $errs = array();
    if (isset($_POST['product']) && isset($_POST['price'])) {

        if (empty($_POST['product'])) {
            $errs["Produit"][] = "Veuillez entrer un nom de produit";
        }
        if (empty($_POST["price"])) {
            $errs["Prix"][] = "Veuillez entrer un prix unitaire";
        }
        if (!is_numeric($_POST['price'])) {
            $errs["price"][] = "Veuillez utiliser des chiffres pour le prix unitaire";
        }

        if (count($errs) > 0) {
            echo "<ul>";
            foreach ($errs as $champEnErreur => $erreursDuChamp) {
                foreach ($erreursDuChamp as $erreur) {
                    echo "<li>" . $erreur . "</li>";
                }
            }
            echo "</ul>";
        } else if (count($errs) === 0) {

        }
    } else
    ?>

</body>

</html>