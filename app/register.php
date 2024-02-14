<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require("form.php");
    
   

    try {

        $conn = new PDO("mysql:host=" . $_ENV['DB_HOST'] . ";dbname=" . $_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['product']) && isset($_POST['price']) && is_numeric($_POST['price'])) {
                $request = 'INSERT INTO article
                        (label, prix)
                      VALUES 
                        (:label, :prix)';

                $statement = $conn->prepare($request);
                $statement->execute(['label' => $_POST['product'], 'prix' => $_POST['price']]);

                echo 'Traitement effectué avec succés. Rafraichissement dans 3 secondes.';

                header('Refresh:3');
            }
        } else {

        }
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }





    ?>
</body>

</html>