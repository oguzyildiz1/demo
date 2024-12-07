<?php
$authors = [
    [
        'name' => 'King',
        'book' => 'It',
        'store' => 'http://www.amazon.com'
    ],
    [
        'name' => 'Jrr Tolkien',
        'book' => 'Lotr',
        'store' => 'http://www.amazon.com'

    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assoc Arr</title>
</head>

<body>
    <h1>Popular Books</h1>

    <h3>Authors</h3>
    <ul>
        <?php foreach ($authors as $author) : ?>
            <li><?= $author['name']; ?></li>
        <?php endforeach; ?>
    </ul>

    <h3>Books</h3>
    <ul>
        <?php foreach ($authors as $author) : ?>
            <li><?= $author['book']; ?></li>
        <?php endforeach; ?>
    </ul>


    <h3>Where to buy?</h3>
    <ul>
        <?php foreach ($authors as $author) : ?>
            <li><a href='<?= $author["store"] . "/s?k=" .
                                $author["book"]; ?>'>Store</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>