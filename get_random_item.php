<?php
$items = array(
    'item1' => 20, 
    'item2' => 50,
    'item3' => 30, 
);

echo get_random_item($items);;



function get_random_item($items)
{
    $total = array_sum($items);

    $random = mt_rand(1, $total);

    foreach ($items as $item => $chance) {
        $random -= $chance;

        if ($random <= 0) {
            return $item; 
        }
    }

    return null;
}
?>