<?php
//require_once('./cartTesterDB.php');


function singleItem($productName, $productPrice, $productCatg, $productDesc, $productImg, $productID){
    $element="
    
    <form action=\"single-product.php\" method=\"post\">
				<div class=\"row s_product_inner\">
					<div class=\"col-lg-6\">
						<div class=\"s_Product_carousel\">
							<div class=\"single-prd-item\">
                                <img class=\"img-fluid\" src=\"$productImg\" alt=\"\" height=\"400\" width=\"200\">
							</div>
							<div class=\"single-prd-item\">
								<img class=\"img-fluid\" src=\"$productImg\" alt=\"\" height=\"400\" width=\"200\">
							</div>
							<div class=\"single-prd-item\">
								<img class=\"img-fluid\" src=\"$productImg\" alt=\"\" height=\"400\" width=\"200\">
							</div>
						</div>
					</div>
					<div class=\"col-lg-5 offset-lg-1\">
						<div class=\"s_product_text\">
							<h3>$productName</h3>
							<h2>$$productPrice</h2>
							<ul class=\"list\">
								<li><a class=\"active\" href=\"\"><span>Category</span> : $productCatg</a></li>
								<li><a href=\"\"><span>Availibility</span> : In Stock</a></li>
							</ul>
							<p>$productDesc
							</p>
                            <div class=\"card_area d-flex align-items-center\">
                                <input type=\"hidden\" name=\"prodID\" value='$productID'>
                                <button name=\"add\" type=\"submit\" class=\"primary-btn\">Add to Cart</button>
							</div>
						</div>
					</div>
				</div>
			</form>
    
    ";
    
    echo $element;
}

function getName($productKey){
    echo "Running Shoes";
}
   

function getPrice($productKey){
    echo "$59";
}

function getCategory($productKey){
    echo "Sport Shoes";
}

function findStock($productKey){
    //if item stock > 0 return stock availability
    echo "In Stock";
}

function getImage($productKey){
    echo "img/category/s-p1.jpg";
}

function getDescription($productKey){
    echo "Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for
    something that can make your interior look awesome, and at the same time give you the pleasant warm feeling
    during the winter.";
}
?>


