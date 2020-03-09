<?php

function checkoutItem($name, $price, $index){
    $quantity = (int)$_SESSION['qty'][$index];
    $qtyPrice = $price * $quantity;
    $item = "<li><a href=\"#\">$name <span class=\"middle\">x$quantity</span> <span class=\"last\">$$qtyPrice</span></a></li>";

    echo $item;
}




?>