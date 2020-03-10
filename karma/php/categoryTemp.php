<?php

function getCatgElement($name, $image, $price, $id){
    $inflation = $price + ($price * .2);

    echo '
    	<button class="col-lg-4" type="submit" name="prodSelect" value="'.$id.'">
			<div class="single-product">
				<img src="'.$image.'">
				<div class="product-details">
					<h6>'.$name.'</h6>
					<div class="price">
						<h6>'.$price.'</h6>
					</div>
				</div>
			</div>
		</button>';


}

// <form action=\"category.php\" method=\"post\">
// <button class=\"col-lg-4 col-md-6\" name=\"thisProd\" type=\"submit\">
// 					<div class=\"single-product\">
// 						<img src=\"$image\" alt=\"\" height=\"300\" width=\"250\">
// 						<div class=\"product-details\">
// 							<h6>$name</h6>
// 							<div class=\"price\">
// 								<h6>$price</h6>
// 								<h6 class=\"l-through\">$$inflation</h6>
// 							</div>
							
// 						</div>
// 					</div>
// 				</button>
// 				<input type=\"hidden\" name=\"prodID\" value='$id'>
// 	</form>


?>