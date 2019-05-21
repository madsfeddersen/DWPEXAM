<?php

function createProduct() {
    
}


function readShop()
    {
        
        require (__DIR__ . "/../business/dbcon2.php");  
        $dbCon = dbCon2();
        $query = $dbCon->prepare("SELECT * FROM products");
        $query->execute();
        $getProducts = $query->fetchAll();

        foreach ($getProducts as $duck)
        {
            // THIS WORKS WITH LOCALHOST $getDuckImgId = '/../backend/DWPEXAM/presentation/img/products/' . $duck['id'] . '.png';
            $getDuckImgId = '/presentation/img/products/' . $duck['id'] . '.png';
            
            $duckImg = '<v-img class="duckImg" src="' . $getDuckImgId . '"></v-img>';
            $b = "<br>";
            $duckInfo = $duck['name'] . $b . 'Duck' . $b . $duck['price'] . ' USD$';
            
            $addToCartBtn = '
                <form method="post" action="../business/cart/cart.php?action=add&code=' . $duck['code'] . '">
                <input type="text" name="quantity" value="1" size="2" style="text-align: center;">
                <input type="submit" value="Add to cart" id="addBtn" style="text-align: left;">
                </form>';

            $duckString = '<v-flex xl2 md2 xs3>

            
           
            <a href="/product/' . $duck['id'] . '"><v-card class="products ma-2 pt-4">' . $duckImg . '<v-card-text class="px-0">' .
                $duckInfo . $addToCartBtn . '</v-card-text></v-card>
                </a> 
                </v-flex>';

                
           
            echo $duckString;
        }
        
    }

    
function readProduct($productID)
    {          
        require_once (__DIR__ . "/../business/dbcon.php");
        $dbCon = dbCon();
        $query = $dbCon->prepare("SELECT * FROM products WHERE id = '$productID'");
        $query->execute();
        $getProducts = $query->fetchAll();
        
       foreach($getProducts as $duck)
            {
            $getDuckImgId = '/presentation/img/products/' . $duck['id'] . '.png';
            $duckImg = '<v-img class="duckImg" src="' . $getDuckImgId . '"></v-img>';
            $b = "<br>";
            $duckInfo = '<h1 id="productTitle">' . $duck['name'] .  " " . 'Duck' . '</h1>' . $b . $duck['description'] . $b . $b . '<div id="priceTag">' . $duck['price'] . 'USD$</div>';
            $duckString1 = '<v-flex xl2 md2 xs2></v-flex><v-flex xl4 md4 xs4 ><a href="/product/' . $duck['id'] . '">' . $duckImg . '</a></v-flex>';
            
            $addToCartBtn = '
            <form method="post" action="../business/cart/cart.php?action=add&code=' . $duck['code'] . '">
            <input type="text" name="quantity" value="1" size="2" />
            <input type="submit" value="Add to cart" id="addBtn">
            </form>';
            
            $duckString2 = '<v-flex xl4 md4 xs4 pt-5 class="productCard">' . $duckInfo . $addToCartBtn . $b . '</v-flex><v-flex xl2 md2 xs2></v-flex>';

            echo $duckString1 . $duckString2;
        
            }
            
          
    }
      
function updateProduct($UpdateThisProduct) {
    //Use router!!!
}

function deleteProduct($DeleteThisProduct) {
    //Use router!!!
}

    
?>
