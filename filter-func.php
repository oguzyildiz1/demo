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

    ],
    [
        'name' => 'R. A. Salvatore',
        'book' => 'Drizzt Do\'urden',
        'store' => 'http://www.alibaba.com'

    ]
];

function filterByAuthor($authors, $store) // gets an arr para
{
    $filteredAuthors = [];
    // search for amazon
    foreach ($authors as $author) {
        // check seller, if amazon, add that to new arr
        if ($author['store'] === $store) {
            $filteredAuthors[] = $author;
        }
    }

    return $filteredAuthors;
    // returns an array
}

// <?php foreach ($filteredAuthors) :
//    <li>a</li>
// endforeach;

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
    <h3>Where to buy?</h3>
    <ul>
        <?php
        // create lists for filtered authors 
        $store = 'http://www.amazon.com';
        $filteredAuthors = filterByAuthor($authors, $store);
        ?>

        <?php foreach ($filteredAuthors as $author) : ?>
            <li><a href="<?= $author['store']; ?>">
                    <?= $author['book']; ?>
                </a></li>
        <?php endforeach ?>
    </ul>


</body>

</html>