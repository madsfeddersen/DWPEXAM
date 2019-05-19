<br>
<h1 class="page-title">Shopping cart</h1>
<?php
if(!isset($_SESSION)) {
  session_start();
}
require_once("DBController.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
    //start the switch/case
switch($_GET["action"]) {
//adding items to cart
	case "add":

		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM products WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array(
			    'name'=>$productByCode[0]["name"],
                'code'=>$productByCode[0]["code"],
                'quantity'=>$_POST["quantity"],
                'price'=>$productByCode[0]["price"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
//Remove item from cart
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
//Empty the entire cart
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>

<head>
    <link href="../../presentation/css/shopCart.css" type="text/css" rel="stylesheet" />
    <link href="../../presentation/css/main.css" type="text/css" rel="stylesheet" />
</head>

<br>

<br>

<div id="shopping-cart">

<div class="heading">
  <a href="/shop" id="backBtn">Back to shop</a>
  <a href="/checkout" id="buyBtn" >Checkout</a>
  <a id="emptyBtn" href="/../../business/cart/cart.php?action=empty">Empty Cart</a></div>
<?php
//Reset total cost to do recalc
if(isset($_SESSION["cart_item"])){
    $item_total = 0;
?>	
<table align="center" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th class="cartTable"><strong>Name</strong></th>
<th class="cartTable"><strong>Code</strong></th>
<th class="cartTable"><strong>Quantity</strong></th>
<th class="cartTable"><strong>Price</strong></th>
<th class="cartTable"><strong>Remove Item</strong></th>
</tr>	
<?php		
    
    foreach ($_SESSION["cart_item"] as $item){
		?>
				<tr>
				<td class="cartTable"><strong><?php echo $item["name"]; ?></strong></td>
				<td class="cartTable"><?php echo $item["code"]; ?></td>
				<td class="cartTable"><?php echo $item["quantity"]; ?></td>
				<td class="cartTable"><?php echo $item["price"]." DKK"; ?></td>
				<td class="cartTable"><a href="/business/cart/cart.php?action=remove&code=<?php echo $item['code']; ?> " class="removeBtn">Remove</a></td>
				</tr>
				<?php
        $item_total += ($item["price"]*$item["quantity"]);
    }
    
		?>

<tr>
<td colspan="5" text-align=right style="color:#000;"><strong>Total:</strong> <?php echo $item_total." DKK"; ?></td>
</tr>
</tbody>
</table>	


<?php
}

?>
</div>

<div>
  <br>
	<h1> More ducks that might interest you :)</h1>
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM products ORDER BY code ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $aNumber=> $value){
	?>



		<div class="product-item">
			<form method="post" action="/../../business/cart/cart.php?action=add&code=<?php echo $product_array[$aNumber]["code"]; ?>">
			<div><strong><?php echo $product_array[$aNumber]["name"] . ' Duck'; ?></strong></div>
			<div class="product-image"><img src="/../../presentation/img/products/<?php echo $product_array[$aNumber]["id"] . '.png'; ?>"></div>
			<div class="product-price"><?php echo $product_array[$aNumber]["price"]." DKK"; ?></div>
			<div>
            <input type="text" name="quantity" value="1" size="2" />
						<input type="submit" value="Add to cart" class="addBtn" />
				</div>
			</form>
		</div>
	<?php
			}
  }

	?>
</div>



