<?php

function readShop()
    {
        
        require (__DIR__ . "/../../business/dbcon.php");  
        $dbCon = dbCon();
        $sql = "CALL `getProducts`();"; 
        $query = $dbCon->prepare($sql);
        $query->execute();
        $getProducts = $query->fetchAll();

        foreach ($getProducts as $duck)
        {
            // THIS WORKS WITH LOCALHOST $getDuckImgId = '/../backend/DWPEXAM/presentation/img/products/' . $duck['id'] . '.png';
            $getDuckImgId = '/presentation/img/products/' . $duck['name'] . '.png';
            
            $duckImg = '<v-img class="duckImg" src="' . $getDuckImgId . '"></v-img>';
            $b = "<br>";
            $duckInfo = $duck['name'] . $b . 'Duck' . $b . $duck['price'] . ' USD$';
            $duckString = '<v-flex xl2 md2 xs3>
            <a href="/product/' . $duck['id'] . '"><v-card class="products ma-2 pt-4">' . $duckImg . '<v-card-text class="px-0">' .
                $duckInfo . '</v-card-text></v-card>
                </a> 
                </v-flex>';

                
           
            echo $duckString;
        }
        
    }

function readProduct($productID)
    {          
        require (__DIR__ . "/../../business/dbcon.php");
        $dbCon = dbCon();
        $query = $dbCon->prepare("SELECT * FROM products WHERE id = '$productID'");
        $query->execute();
        $getProducts = $query->fetchAll();
        
       foreach($getProducts as $duck)
            {
            $getDuckImgId = '/presentation/img/products/' . $duck['name'] . '.png';
            $duckImg = '<v-img class="duckImg" src="' . $getDuckImgId . '"></v-img>';
            $b = "<br>";
            $duckInfo = '<h1 id="productTitle">' . $duck['name'] .  " " . 'Duck' . '</h1>' . $b . $duck['description'] . $b . $b . '<div id="priceTag">' . $duck['price'] . 'USD$</div>';
            $duckString1 = '<v-flex xl2 md2 xs2></v-flex><v-flex xl4 md4 xs4 ><a href="/product/' . $duck['id'] . '">' . $duckImg . '</a></v-flex>';
            
            $addToCartBtn = '
            <form class="productform" method="post" action="../business/cart/cart.php?action=add&code=' . $duck['code'] . '">
            <select name="quantity">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            
            <select name="color">
                    <option value="Duck">Duck Color</option>
                    <option value="Red">Red</option>
                    <option value="Blue">Blue</option>
                    <option value="Green">Green</option>
                </select>
                <br>
                <select name="size">
                <option value="Regular">Regular</option>
                <option value="Small">Small</option>
                <option value="Large">Large</option>dada
                <option value="Giant">Giant</option>
            </select>
            
            <input type="submit" value="Add to cart" id="addBtn">
            </form>';
            
            $duckString2 = '<v-flex xl4 md4 xs4 pt-5 class="productCard">' . $duckInfo . $addToCartBtn . $b . '</v-flex><v-flex xl2 md2 xs2></v-flex>';

            echo $duckString1 . $duckString2;
        
            }    
    }

    function readProductFrontpage($productID)
    {          
        require (__DIR__ . "/../../business/dbcon.php");
        $dbCon = dbCon();
        $query = $dbCon->prepare("SELECT * FROM products WHERE id = '$productID'");
        $query->execute();
        $getProducts = $query->fetchAll();
        
       foreach($getProducts as $duck)
            {
            $getDuckImgId = '/presentation/img/products/' . $duck['name'] . '.png';
            $duckImg = '<v-img class="duckImg" src="' . $getDuckImgId . '"></v-img>';
            $b = "<br>";
            $duckInfo = '<h1 id="productTitle">' . $duck['name'] .  " " . 'Duck' . '</h1>' . $b . $duck['description'] . $b . $b . ' <a href="/product/' . $duck['id'] . '"><p style="color: #000;">See more</p><div id="priceTag">' . $duck['price'] . 'USD$</div>';
            $duckString1 = '<v-flex xl2 md2 xs2></v-flex><v-flex xl4 md4 xs4 ><a href="/product/' . $duck['id'] . '">' . $duckImg . '</a></v-flex>';
            $duckString2 = '<v-flex xl4 md4 xs4 pt-5 class="productCard">' . $duckInfo  . $b . '</v-flex><v-flex xl2 md2 xs2></v-flex>';

            echo $duckString1 . $duckString2;
            }
    }
    
?>
