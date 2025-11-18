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


// anonymous function or lambda function
function filter($items, $callback){
    $filteredItems = [];
    foreach($items as $item){
        if ($callback($item)){
            $filteredItems[]= $item; 
        }
    }
    return $filteredItems;
};
// extracting a variable...
$filteredBooks = filter($books, function($books){
    return $books['price'] < 9;
}); // need key value pairs


// var_dump(filterByName($books));
?>

<ul>
    <?php foreach($filteredBooks as $book) : ?>
        <li><?= "{$book['title']}, {$book['author']}" ?></li>
    <?php endforeach; ?>
</ul>
