<?php

//receives image, name, and price
function cartItem($productName, $productPrice, $image, $index){
    $cartItem = 
    "
    <form action=\"cart.php\" method=\"post\">
    <tr>
    <td>
        <div class=\"media\">
            <div class=\"d-flex\">
                <img src=\"$image\" alt=\"\" height=\"150\" width=\"auto\">
                
            </div>
            <div class=\"media-body\">
                <p>$productName</p>
                <input type=\"hidden\" name=\"rmvIndex\" value='$index'>
                <button name=\"remove\" type=\"submit\" class=\"genric-btn danger-border circle\">Remove Item ($index)</button>
            </div>
            
        </div>
    </td>
    <td>
        <h5>$$productPrice</h5>
    </td>
    <td>
        <div class=\"product_count\">
            <input type=\"text\" name=\"qty$index\" id=\"sst$index\" maxlength=\"12\" value=\"1\" title=\"Quantity:\"
                class=\"input-text qty\">
            <button onclick=\"var result = document.getElementById('sst$index'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;\"
                class=\"increase items-count\" type=\"button\"><i class=\"lnr lnr-chevron-up\"></i></button>
            <button onclick=\"var result = document.getElementById('sst$index'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 1 ) result.value--;return false;\"
                class=\"reduced items-count\" type=\"button\"><i class=\"lnr lnr-chevron-down\"></i></button>
        </div>
    </td>
    <td>
        <h5>$$productPrice</h5>
    </td>
    </tr>
    </form>
    ";
    echo $cartItem;
}

function cartHeader(){
    //if session cart array holds items, display the amount of items stored next to the cart icon
    if(isset($_SESSION['cart'])){
        $count = count($_SESSION['cart']);
        echo "<span>$count</span>";
    }else{
        echo "<span>0</span>";
    }
}

?>
    

