<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COUNTER</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>


    <?php





    // $products = array(
    //     array("Volvo", "0", 22, 18),
    //     array("BMW", "1", 15, 13),
    //     array("Saab", "2", 5, 23),
    //     array("Land Rover", "3", 17, 15),
    //     array("Land Rover", "4", 17, 15)
    // );
//     $products = array(
//      "product" => array(   

//      "product1"=> array("brand" => "Volvo", "id" => "0", "stock" => 22, "sold" => 18),

//             "product2" => array("brand" => "BMW", "id" => "product2", "stock" => 15, "sold" => 13),
//             "product3" =>  array("brand" => "Saab", "id" => "product3", "stock" => 5, "sold" => 23),
//             "product4" => array("brand" => "mercidies", "id" => "3", "stock" => 17, "sold" => 15),
//             "product5" => array("brand" => "Land Rover", "id" => "4", "stock" => 17, "sold" => 15)
//     )
//     );
//   echo $products["product"]["product3"] ["brand"];


//  with loop  not dynamic



    // $products = array(
    //     "product" => array(
    //         "product1" => array("brand" => "Volvo", "id" => "0", "stock" => 22, "sold" => 18),
    //         "product2" => array("brand" => "BMW", "id" => "product2", "stock" => 15, "sold" => 13),
    //         "product3" => array("brand" => "Saab", "id" => "product3", "stock" => 5, "sold" => 23),
    //         "product4" => array("brand" => "mercidies", "id" => "3", "stock" => 17, "sold" => 15),
    //         "product5" => array("brand" => "Land Rover", "id" => "4", "stock" => 17, "sold" => 15)
    //     )
    // );

    // foreach ($products["product"] as $keys => $values) {
        
    //     if ($keys == "product2"   )  {
    //         echo $values["brand"] ;
    //         echo "<br/>";
    //     }else if ($keys == "product3") {
    //         echo $values["brand"] ;
    //         echo "<br/>";
    //     }
    //     else{
    //         echo "no matches ";
    //         echo "<br/>";
    //     }
    //     // print_r($values) ;
    // if (in_array($key, $MatchingKey))
    // }
    

    //  with loop dynamic

    $products = array(
        "product" => array(
            "product1" => array("brand" => "Volvo", "id" => "0", "stock" => 22, "sold" => 18),
            "product2" => array("brand" => "BMW", "id" => "product2", "stock" => 15, "sold" => 13),
            "product3" => array("brand" => "Saab", "id" => "product3", "stock" => 5, "sold" => 23),
            "product4" => array("brand" => "mercidies", "id" => "3", "stock" => 17, "sold" => 15),
            "product5" => array("brand" => "Land Rover", "id" => "4", "stock" => 17, "sold" => 15)
        )
    );
    foreach ($products["product"] as $key => $value) {
        if (($key == $value["id"])) {
            echo $value["brand"] . "<br/>";
        } else { 
            echo "No match for $key <br/>";
        }
    }





    ?>

    <!-- // session_start();
    
    // if (isset($_POST['product']))
    
    //  {
//     $product = $_POST['product'];
//     $id = $_POST['id'];
//     $name = $_POST['name'];
    
    //     $_SESSION["card"][$product]  = [
//         'id' => $id,
//         'name' => $name
//     ];
    
    //     echo "";
//     print_r($_SESSION);
    
    // }
    


    // / unset($_SESSION["Array"]);
    
    // if (isset($_POST['product'])) 
//     $product = $_POST['product'];
//     $id = $_POST['id'];
//     $name = $_POST['name'];
    




    // session_start();
    // // unset($_SESSION["card"]);

    // echo "<>";
    // $_SESSION["card"][$_POST["product"]]  = $_POST;
    // if (isset($_SESSION["card"][$_POST['product']])) {
    //     $_SESSION[$_POST[""]]++;
    // }
    // print_r($_SESSION);



















    // if (isset($_SESSION["card"][$_POST['product']])) {
    //     $_SESSION["card"][$_POST['product']]++;
    // } else {
    //     $_SESSION["card"][$_POST['product']] = [
    //         'id' => $_POST['id'],
    //         'name' => $_POST['name']
    
    //         ];
    // }
    
    //     echo "<pre>";
    // print_r($_SESSION);
// /     unset($_SESSION["Array"]);
    // unset($_SESSION["card"]);
    //main//
    
    // session_start();
    
    // echo "<pre>";
    // $_SESSION["card"][$_POST["product"]] = $_POST;
    // print_r($_SESSION);
    


    // print_r($_REQUEST);
    // print_r($_POST);
    // isset($_SESSION["card"]);
    




    // print_r($_SERVER);
    // print_r($_SESSION);
    
    // echo $_SERVER["SERVER_SOFTWARE"];
    // echo "<br>";
    
    // echo $_SERVER["SERVER_NAME"];
    // echo "<br>";
    // echo $_SERVER["SERVER_PORT"];
    // echo "<br>";
    // echo $_SERVER["REQUEST_SCHEME"];
    // echo "<br>";
    // echo $_SERVER["TMP"];
    



    // die("Hasan");
    // if($_SERVER['REQUEST_METHOD']=="POST"){
    //     $email=$_POST['email'];
    //     $password=$_POST['password'];
    //     echo $email;
    //     echo "<br>";
    //     echo $password;
    // }
    
    ?> -->




 <div class="container">
    <form action="index.php" method="post">
        <input type="text" name="index" value="from ">
        <input type="text" name="password" value="COUNT">
        <input type="submit" value="SUBMIT">

    </form>
</div> 




<!-- 
    <div class="card2">
        <h3>banana</h3>
        <h3>apple</h3>
        <h3>mango</h3>
        <h3>orange</h3>
    </div>




    <div class="card2">
        <form action="index.php" method="post">

            <input id="banana" type="text" name="product" value="banana4" style="display:none">
            <input id="banana" type="text" name="product" value="1">
            <input id="banana" type="text" name="product" value="bananas" readonly>


            <input type="submit" value="ADD TO CART">
        </form>

        <form action="index.php" method="post">

            <input id="apple" type="text" name="product" value="apple" style="display:none">
            <input id="banana" type="text" name="product" value="2">
            <input id="banana" type="text" name="product" value="Apples" readonly>

            <input type="submit" value="ADD TO CART">
        </form>

        <form action="index.php" method="post">

            <input id="mango" type="text" name="product" value="mango" style="display:none">
            <input id="banana" type="text" name="product" value="3">
            <input id="banana" type="text" name="product" value="mangoes" readonly>

            <input type="submit" value="ADD TO CART">
        </form>

        <form action="index.php" method="post">

            <input id="orange" type="text" name="product" value="orange" style="display:none">
            <input id="banana" type="text" name="product" value="4">
            <input id="banana" type="text" name="product" value="oranges" readonly>

            <input type="submit" value="ADD TO CART">
        </form>
    </div> -->







</body>