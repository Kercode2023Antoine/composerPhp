<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    use Dotenv\Dotenv;

    require __DIR__ . "/vendor/autoload.php";
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    require('./app/register.php');

    ?>
</body>

</html>