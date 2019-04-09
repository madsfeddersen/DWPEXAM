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

function displayProductDetails()
    {          

        

        require_once "dbcon.php";  
        $dbCon = dbCon($user, $pass);
        $query = $dbCon->prepare("SELECT * FROM products");
        $query->execute();
        $getProducts = $query->fetchAll();
        

        $item = $_SERVER['REQUEST_URI'];
        $trim = preg_replace('/\D/', '', $item);
        
       echo "<br><br>";

        
       /*foreach($getProducts as $duck)
            {
                print $duck['id'] . " ";  
            }*/

        foreach($getProducts as $duck){
                if (isset($duck["id"])){
                    echo $duck["name"] . "<br>";
                }
            }

        /*echo "<br><br>";
       
        print_r($getProducts);

        echo "<br><br>";

        echo var_dump($getProducts);
      */
        
    }
      

    
?>
