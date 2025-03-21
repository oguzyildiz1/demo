<?php
$authors = [
    [
        'name' => 'Stephen King',
        'book' => 'It',
        'year' => 2001,
        'store' => 'http://www.amazon.com'
    ],
    [
        'name' => 'Jrr Tolkien',
        'book' => 'Lotr',
        'year' => 1990,
        'store' => 'http://www.amazon.com'

    ],
    [
        'name' => 'R. A. Salvatore',
        'book' => 'Drizzt Do\'urden',
        'year' => 2010,
        'store' => 'http://www.alibaba.com'

    ],
    [
        'name' => 'Stephen King',
        'book' => 'Kara Kule',
        'year' => 2010,
        'store' => 'http://www.alibaba.com'
    ]
];

// $items is the array
$filter = function ($items, $key, $value) {
    $filteredItems = [];
    // search for amazon
    foreach ($items as $item) {
        // check seller, if amazon, add that to new arr
        if ($item[$key] === $value) {
            $filteredItems[] = $item;
        }
    }

    return $filteredItems;
    // returns an array
};

$filteredAuthors = $filter($authors, 'year', 2010);


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
        <?php foreach ($filteredAuthors as $author) : ?>
            <li><?= "{$author['name']} - {$author['book']} - {$author['year']}"; ?></li>
        <?php endforeach; ?>
    </ul>


</body>

</html>