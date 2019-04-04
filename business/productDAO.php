<?php
function displayProducts()
    {
        /*
        //DUMMY DATA
        $getProducts =
            [
                ["name" => "Standard Duck", "price" => "10.00", "id" => "1"],
                ["name" => "Mermaid Duck", "price" => "32.95", "id" => "2"],
                ["name" => "Arnold Duck", "price" => "12.00", "id" => "3"],
                ["name" => "Sunglasses Duck", "price" => "10.00", "id" => "4"],
                ["name" => "Donald Trump Duck", "price" => "32.00", "id" => "5"],
                ["name" => "Turtle Duck", "price" => "5.00", "id" => "6"],
                ["name" => "Bat Duck", "price" => "25.00", "id" => "7"],
                ["name" => "Female Duck", "price" => "47.00", "id" => "8"],
                ["name" => "Ninja Duck", "price" => "25.00", "id" => "9"]
            ];
        */
            
        require_once "dbcon.php";  
        
        $dbCon = dbCon($user, $pass);
        $query = $dbCon->prepare("SELECT * FROM products");
        $query->execute();
        $getProducts = $query->fetchAll();
        //var_dump($getProducts);

        foreach ($getProducts as $duck)
        {
            //$getDuckImgId = '/../backend/DWPEXAM/presentation/img/products/' . $duck['id'] . '.png';
            $getDuckImgId = '/presentation/img/products/' . $duck['id'] . '.png';
            $duckImg = '<v-img class="duckImg" src="' . $getDuckImgId . '"></v-img>';
            $b = "<br>";
            $duckInfo = $duck['name'] . $b . $duck['price'] . ' USD$';
            $duckString = '<v-flex xs4 md2 xl3><a><v-card class="pricecard ma-2 pt-4">' . $duckImg . '<v-card-text class="px-0" >' .
             $duckInfo . '</v-card-text></v-card></a></v-flex>';
            echo $duckString;
        }
    }
?>