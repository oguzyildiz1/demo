<?php
$authors = [
    "king",
    "jrr tolkien",
    "ra salvatore"
];

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background: darkred">
    <h1>Popular Authors</h1>
    <ul>
        <?php foreach ($authors as $author) {
            echo "<li>{$author}<sub>tm</sub></li>";
        }

        ?>
    </ul>

    <ul>
        <?php foreach ($authors as $author) : ?>
            <li><?= "{$author}<up>tm</up>"; ?></li>
        <?php endforeach ?>
    </ul>

    
</body>

</html>