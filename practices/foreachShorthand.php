<?php 
$trees = ["çam", "kavak", "iğde"];
?>

<ul>
    <?php foreach($trees as $tree) : ?>
       <li><?= $tree;?></li> 
    <?php endforeach;?>
</ul>

<ul>
    <?php foreach($trees as $tree) : ?>
        <?php if($tree == "kavak") : ?>
            <li><?= "{$tree}'ın ince dalları vardır" ?></li>
        <?php endif; ?>
    <?php endforeach;?>
</ul>

