<?php
// $items is the array
$filter = function ($items, $fn) {
    $filteredItems = [];
    // search for amazon
    foreach ($items as $item) {
        // check seller, if amazon, add that to new arr
        if ($fn($item)) {
            $filteredItems[] = $item;
        }
    }

    return $filteredItems;
    // returns an array
};

$filteredAuthors = $filter($authors, function ($author) {
    return $author["year"] < 2010;
});
