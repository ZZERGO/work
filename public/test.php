$categories = [];
<?php

$cName = "Без категории";

$categories[0]= [
    'title' => $cName,
    'slug' => $cName,
    'parent_id' => 0
];

for ($i = 1; $i < 10; $i++){
    $cName = "Категория #".$i;
    $parent_id = ($i > 4) ? rand(1, 4) : 1;
    $categories[$i] = [
        'title' => "Категория #" . $i,
        'slug' => $cName,
        'parent_id' => $parent_id
    ];
}

function var_dump_pre($mixed = null) {
    echo '<pre>';
    var_dump($mixed);
    echo '</pre>';
    return null;
}

var_dump_pre($categories);