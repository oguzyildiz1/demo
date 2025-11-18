<?php 
$books = [
    [
        "title" => "Nickel and Dimed: On (Not) Getting By in America",
        "author" => "Barbara Ehrenreich",
        "price" => 14.99
    ],
    [
        "title" => "The One Dollar Horse",
        "author" => "Lauren St. John",
        "price" => 9.99
    ],
    [
        "title" => "Christmas Vows: \$5.00 Extra",
        "author" => "Lori Copeland",
        "price" => 7.50
    ],
        [
        "title" => "New York Knicks",
        "author" => "Lori Copeland",
        "price" => 10.50
    ]
];


// php array filter
$filteredBooks = array_filter($books, function($books){
    return $books['title'] === "The One Dollar Horse";
}); // need key value pairs


// var_dump(filterByName($books));
?>

<ul>
    <?php foreach($filteredBooks as $book) : ?>
        <li><?= "{$book['title']}, {$book['author']}, {$book['price']}" ?></li>
    <?php endforeach; ?>
</ul>
