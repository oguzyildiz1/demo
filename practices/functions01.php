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


// filtered books by name
function filterByName($books, $author){
    $filteredBooks = [];
    foreach($books as $book){
        if($book['author'] === $author){
            $filteredBooks[]= $book;
        }
    }
    return $filteredBooks;
}

// var_dump(filterByName($books));
?>

<ul>
    <?php foreach(filterByName($books, "Lori Copeland") as $book) : ?>
        <li><?= "{$book['title']}, {$book['author']}" ?></li>
    <?php endforeach; ?>
</ul>
