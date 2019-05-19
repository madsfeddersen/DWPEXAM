<br>

<?php

    if (isset($_SESSION['cart_item']))
    {
        foreach ($_SESSION["cart_item"] as $item)
        {
            echo $item['code'] . '<br>' . $item['name'] . '<br>' . $item['price'];
            
        }
    }
    
?>
    <Br>
    <br>
    read orders here or change to crud
