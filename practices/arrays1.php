<?php 
$trees = ["çam", "kavak", "iğde"];
?>

<ul>
    <?php foreach($trees as $tree)
    {
        echo "<li>{$tree}&#8482</li>";
    }
    ;?>
</ul>
