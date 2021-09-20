<?php
// installation de la connexion entre le code PHP et MySQL (PDO)

require_once '_connec.php';

$pdo = new \PDO(DSN, USER, PASS);

$query = "INSERT INTO friend (firstname, lastname) VALUES ('Chandler', 'Bing')";
$statement = $pdo->exec($query);

$query = "SELECT * FROM friend";
$statement = $pdo->query($query);
$friends = $statement->fetchAll();

print_r($friends);

?>

<div class="list">
    <ul>
        <li>
            <a></a>
        </li>
    </ul>
</div>

