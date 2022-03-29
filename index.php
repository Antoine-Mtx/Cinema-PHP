<?php
try
{
    $db = new PDO(
        'mysql:host=localhost;dbname=cinema;charset=utf8',
        'root',
        'Hephaistos@2022'
    );
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table film
$sqlQuery = 'SELECT * FROM films';
$filmStatement = $db->prepare($sqlQuery);
$filmStatement->execute();
$film = $filmStatement->fetchAll();
?>

<!-- On affiche chaque film un à un -->

<h2>Liste des films</h2>

<?php
foreach ($film as $movie) {
    ?>
        <p><?php    var_dump($movie);
                    echo $movie['titre']; ?></p>
    <?php
    }
?>