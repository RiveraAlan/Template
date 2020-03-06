<?php

function getCatgElement($name, $image, $price){
    $inflation = $price + ($price * .2);

    $catgElement = "
    <div class=\"col-lg-4 col-md-6\" onclick=\"location.href='#';\" style=\"cursor: pointer;\">
							<div class=\"single-product\">
								<img src=\"$image\" alt=\"\" height=\"300\" width=\"250\">
								<div class=\"product-details\">
									<h6>$name</h6>
									<div class=\"price\">
										<h6>$price</h6>
										<h6 class=\"l-through\">$$inflation</h6>
									</div>
									
								</div>
							</div>
						</div>
    
    ";

    echo $catgElement;


}




?>