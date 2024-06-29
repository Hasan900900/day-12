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

    // session_start();
    
    // if (isset($_POST['product']))
    
    //  {
//     $product = $_POST['product'];
//     $id = $_POST['id'];
//     $name = $_POST['name'];
    
    //     $_SESSION["card"][$product]  = [
//         'id' => $id,
//         'name' => $name
//     ];
    
    //     echo "<pre>";
//     print_r($_SESSION);
    
    // }
    


    // / unset($_SESSION["Array"]);
    
    // if (isset($_POST['product'])) {
//     $product = $_POST['product'];
//     $id = $_POST['id'];
//     $name = $_POST['name'];
    




    session_start();
    // unset($_SESSION["card"]);

    echo "<pre>";
    $_SESSION["card"][$_POST["product"]]  = $_POST;
    if (isset($_SESSION["card"][$_POST['product']])) {
        $_SESSION[$_POST[""]]++;
    }
    print_r($_SESSION);



















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
    
    ?>










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
    </div>







</body>