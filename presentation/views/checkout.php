<?php
require_once(__DIR__ . "/../../business/handleCheckout.php");

echo "<br>" . $status . "<br>";
echo $statusMsg;

if(!empty($statusMsg))
  {
?>
  <h1 class="status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></h1>
<?php
  }
?>



<head>
    <link href="presentation/css/checkout.css" rel="stylesheet">
  
</head>
<br>
<br>
<div class="row wrap">
  <div class="col-50">
    <div class="container">
    <h2>Please fill out the form to checkout</h2>
      <form action="/handleCheckout" method="POST">
        <div class="row">
          <div class="col-25">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fas fa-user-alt"></i> Full Name</label>
            <input type="text" id="fname" name="fullname" value="<?php echo !empty($postData['fullname'])?$postData['fullname']:''; ?>" placeholder="Hugh Ash">
            <label for="email"><i class="fas fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" placeholder="hugh@jass.com">
            <label for="adr"><i class="fas fa-address-card"></i> Address</label>
            <input type="text" id="adr" name="address" value="<?php echo !empty($postData['address'])?$postData['address']:''; ?>" placeholder="42 Wallaby Way">
            <label for="city"><i class="fas fa-institution"></i> City</label>
            <input type="text" id="city" name="city" value="<?php echo !empty($postData['city'])?$postData['city']:''; ?>" placeholder="Pallet Town">

            <div class="row">
              <div class="col-25">
                <label for="zip">Zip / Postalcode</label>
                <input type="text" id="zip" name="zip" value="<?php echo !empty($postData['zip'])?$postData['zip']:''; ?>" placeholder="1337 ">
              </div>
            </div>
          </div>
          <div class="col-25">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fab fa-cc-visa" style=""></i>
              <i class="fab fa-cc-amex" style=""></i>
              <i class="fab fa-cc-mastercard" style=""></i>
              <i class="fab fa-cc-discover" style=""></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" value="<?php echo !empty($postData['cardname'])?$postData['cardname']:''; ?>" placeholder="Hugh Jacques Ash">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" value="<?php echo !empty($postData['cardname'])?$postData['cardname']:''; ?>" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" value="<?php echo !empty($postData['expmonth'])?$postData['expmonth']:''; ?>" placeholder="Movember">
            <div class="row">
              <div class="col-25">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" value="<?php echo !empty($postData['expyear'])?$postData['expyear']:''; ?>" placeholder="2018">
              </div>
              <div class="col-25">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" value="<?php echo !empty($postData['cvv'])?$postData['cvv']:''; ?>" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        
        
        <!-- Google reCAPTCHA box -->
        <!--<div class="g-recaptcha" data-sitekey="6LchXaEUAAAAAID5UnKUmw3LJqVA9fmo1vWM8TVO"></div>
-->
        <input name="submit" type="submit" value="Continue to checkout" class="btn">
      </form>

     <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script>-->

    </div>
  </div>
  <?php
//Reset total cost to do recalc
if(isset($_SESSION["cart_item"])){
    $item_total = 0;
?>	
  <div class="col-25">
    <div class="container cartwrap">
    <h2><i class="fas fa-shopping-cart"></i> Order summary</h2>
      <?php
      foreach ($_SESSION["cart_item"] as $item){
      ?>
      <div class="cart-item-container">
      <div class="product-price"><?php echo $item["price"] . '$'?></div>
      <p class=cart-item-name><?php echo $item["quantity"]?> x <b></b><a href=""><?php echo $item["name"] . ' Duck'; ?></a> <span class="price"></span></p>
      </div>
      <?php
        $item_total += ($item["price"]*$item["quantity"]);
      }
    }
      ?>
      <p class="price">Total: <span ><b><?php echo $item_total . ' $USD'; ?></b></p>
    </div>
  </div>
</div>


     
      	
			