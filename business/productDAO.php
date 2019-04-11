<?php
function displayProducts()
    {          
        require_once "dbcon.php";  
        $dbCon = dbCon($user, $pass);
        $query = $dbCon->prepare("SELECT * FROM products");
        $query->execute();
        $getProducts = $query->fetchAll();
        //var_dump($getProducts);

        foreach ($getProducts as $duck)
        {
            // THIS WORKS WITH LOCALHOST $getDuckImgId = '/../backend/DWPEXAM/presentation/img/products/' . $duck['id'] . '.png';
            $getDuckImgId = '/presentation/img/products/' . $duck['id'] . '.png';
            
            $duckImg = '<v-img class="duckImg" src="' . $getDuckImgId . '"></v-img>';
            $b = "<br>";
            $duckInfo = $duck['name'] . $b . 'Duck' . $b . $duck['price'] . ' USD$';
            
            $duckString = '<v-flex xl2 md2 xs3>
           
            <a href="/product/' . $duck['id'] . '"><v-card class="pricecard ma-2 pt-4">' . $duckImg . '<v-card-text class="px-0">' .
                $duckInfo . '</v-card-text></v-card>
                </a>
                </v-flex>';
           
            echo $duckString;
        }
        
    }

    
function displayProductDetails($productID)
    {          
        
        require_once "dbcon.php";
        $dbCon = dbCon($user, $pass);
        $query = $dbCon->prepare("SELECT * FROM products WHERE id = '$productID'");
        $query->execute();
        $getProducts = $query->fetchAll();
        
      
       foreach($getProducts as $duck)
    
            {
               echo $duck['id'] . " ";
            }
            
          
    }
      

    
?>
