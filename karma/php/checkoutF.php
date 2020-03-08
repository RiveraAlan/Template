<?php

function checkoutItem($name, $price){

    $item = "<li><a href=\"#\">$name <span class=\"middle\">x 01</span> <span class=\"last\">$$price</span></a></li>";

    echo $item;
}




?>