<?php


//receives image, name, and price
function cartItem($productName, $productPrice){
    $cartItem = 
    "
    <tr>
    <td>
        <div class=\"media\">
            <div class=\"d-flex\">
                <img src=\"img/cart.jpg\" alt=\"\">
            </div>
            <div class=\"media-body\">
                <p>$productName</p>
            </div>
        </div>
    </td>
    <td>
        <h5>$$productPrice</h5>
    </td>
    <td>
        <div class=\"product_count\">
            <input type=\"text\" name=\"qty\" id=\"sst\" maxlength=\"12\" value=\"1\" title=\"Quantity:\"
                class=\"input-text qty\">
            <button onclick=\"var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;\"
                class=\"increase items-count\" type=\"button\"><i class=\"lnr lnr-chevron-up\"></i></button>
            <button onclick=\"var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;\"
                class=\"reduced items-count\" type=\"button\"><i class=\"lnr lnr-chevron-down\"></i></button>
        </div>
    </td>
    <td>
        <h5>$720.00</h5>
    </td>
    </tr>
    ";
    echo $cartItem;
}

?>
    

