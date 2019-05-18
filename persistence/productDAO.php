<?php


function readShop()
    {
        
        require_once (__DIR__ . "/../business/dbcon.php");  
        $dbCon = dbCon($user, $pass);
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
            
            $duckString = '<v-flex xl2 md2 xs3>
           
            <a href="/product/' . $duck['id'] . '"><v-card class="products ma-2 pt-4">' . $duckImg . '<v-card-text class="px-0">' .
                $duckInfo . '</v-card-text></v-card>
                </a>
                </v-flex>';
           
            echo ($duckString);
        }
        
    }

    
function readProduct($productID)
    {          
        $user = "root";
$pass = "";

        require_once (__DIR__ . "/../business/dbcon.php");
        $dbCon = dbCon($user, $pass);
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
           
            $duckString2 = '<v-flex xl4 md4 xs4 pt-5 class="productCard">' .
            $duckInfo . $b . '<a target="_blank" id="addToCart">Add to cart</a></v-flex><v-flex xl2 md2 xs2></v-flex>';

            echo $duckString1 . $duckString2;
        
            }
            
          
    }
      

    
?>
