<?php
//   $cars = array("hasan","minhad","faizan","shams");
//   forEach($cars as $x){
//     echo "$x </br>";

//   }
//   $ar = ["name"=>"Hamza", "email"=>"email@gmail.com", "username"=>"hamzoo", "hobbies"=>["name"=>"anime"]];
//   $js = json_encode($ar);
//   echo "$js";
// if ($_SERVER["REQUEST_METHOD"] == "GET") {
//     $name = htmlspecialchars($_GET['name']);
//     $email = htmlspecialchars($_GET['email']);
//     $pass = htmlspecialchars($_GET['password']);

//     // Check for empty fields
//     if (empty($name) || empty($email) || empty($pass)) {
//         echo "Please fill all fields";
//         return;
//     }

//     // Check password length
//     if (strlen($pass) < 6) {
//         echo "Please enter a password greater than 6 characters";
//         return;
//     }

//     // Validate email format
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         echo "Invalid email format";
//         return;
//     }

//     // If all validations pass, print the name and email
//     echo "Name: " . $name . "<br>";
//     echo "Email: " . $email;
// }


// main code

       
    //    echo $_GET['name'];

    //    echo $_GET['email'];
    //    echo $_GET['password'];
      
    




//     if (empty($name) || empty($email) || empty($pass)) {
//         echo "Please fill all fields";
//         return;
//     }
 
//     if (strlen($pass) < 6) {
//         echo"Please enter password greater than 6 characters";
//     }
 
//    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//        echo "Invalid email format";
//     }
 

//     echo "$name </br>" . "$email </br>" ."$pass . </br>"

    // $carr = array("brand"=>"Ford", 0  =>"Mustang" );
    // print_r($carr[0]) ;
    //
    // $a1 = array("hasan","minhad");
    // $a2 = array("shams","faizanbhai","hamza bhai");
    // $a3 = $a1 + $a2;
    // print_r($a3) ;


// $a1 = array(1, 2, 3, 4);
// $a2 = array(5, 6, 7, 8);

// $result = array();

// for ($i = 0; $i < count($a1); $i++) {
//     $result[] = $a1[$i] * $a2[$i];
// }

// print_r($result);

// /2//

// $a2 = array(5, 6, 7, 8);

// $result = array_map(function ($x) {
//     return $x * 3;
// }, $a1);
// $a1 = array(1, 2, 3, 4);
// $a2 = 5;
// $a3 = $a1 * $a2;

// print_r($a3);

// $a1 = array(1, 2, 3, 4);
// $a2 = 5;

// $a3 = array_map(function ($value) use ($a2) {
//     return $value * $a2;
// }, $a1);

// print_r($a3);


// $a1 = array(1, 2, 3, 4);
// $a2 = 5;

// $a3 = array_reduce($a1, function ($carry, $item) use ($a2) {
//     $carry[] = $item * $a2;
//     return $carry;
// }, array());

// print_r($a3);
<?php
session_start();
if (isset($_SERVER['counter'])) {
    $_SERVER['counter'] = 0;
}
if (isset($_POST['clear1'])) {
    $_SESSION['counter'] = 0;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <div class="card1">
            <h1>i am card 1</h1>
            <button type="submit" name="icrement1">click</button>
            <button type="submit" name="clear1">clear</button>
        </div>

        <div class="card2">
            <h1>i am card 2</h1>
            <button type="submit" name="icrement2">click</button>
            <button type="submit" name="clear2">clear</button>
        </div>

        <div class="card3">
            <h1>i am card 3</h1>
            <button type="submit" name="icrement3">click</button>
            <button type="submit" name="clear3">clear</button>
        </div>

        <div class="card4">
            <h1>i am card 4</h1>
            <button type="submit" name="icrement4">click</button>
            <button type="submit" name="clear4">clear</button>
        </div>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['icrement1'])) {
            $_SESSION['counter']++;
            ;
            echo 'i am  card 1';
        }
    }
    echo "<div><p>Counter: " . $_SESSION['counter'] . "</p></div>"
        ?>
</body>
</html>







?>


222222

<?php
session_start();

// Initialize counters if not already set
if (!isset($_SESSION['counter1'])) {
    $_SESSION['counter1'] = 0;
}
if (!isset($_SESSION['counter2'])) {
    $_SESSION['counter2'] = 0;
}
if (!isset($_SESSION['counter3'])) {
    $_SESSION['counter3'] = 0;
}
if (!isset($_SESSION['counter4'])) {
    $_SESSION['counter4'] = 0;
}

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['icrement1'])) {
        $_SESSION['counter1']++;
    }
    if (isset($_POST['clear1'])) {
        $_SESSION['counter1'] = 0;
    }
    if (isset($_POST['icrement2'])) {
        $_SESSION['counter2']++;
    }
    if (isset($_POST['clear2'])) {
        $_SESSION['counter2'] = 0;
    }
    if (isset($_POST['icrement3'])) {
        $_SESSION['counter3']++;
    }
    if (isset($_POST['clear3'])) {
        $_SESSION['counter3'] = 0;
    }
    if (isset($_POST['icrement4'])) {
        $_SESSION['counter4']++;
    }
    if (isset($_POST['clear4'])) {
        $_SESSION['counter4'] = 0;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <div class="card1">
            <h1>I am card 1</h1>
            <button type="submit" name="icrement1">Click</button>
            <button type="submit" name="clear1">Clear</button>
            <p>Counter: <?php echo $_SESSION['counter1']; ?></p>
        </div>

        <div class="card2">
            <h1>I am card 2</h1>
            <button type="submit" name="icrement2">Click</button>
            <button type="submit" name="clear2">Clear</button>
            <p>Counter: <?php echo $_SESSION['counter2']; ?></p>
        </div>

        <div class="card3">
            <h1>I am card 3</h1>
            <button type="submit" name="icrement3">Click</button>
            <button type="submit" name="clear3">Clear</button>
            <p>Counter: <?php echo $_SESSION['counter3']; ?></p>
        </div>

        <div class="card4">
            <h1>I am card 4</h1>
            <button type="submit" name="icrement4">Click</button>
            <button type="submit" name="clear4">Clear</button>
            <p>Counter: <?php echo $_SESSION['counter4']; ?></p>
        </div>
    </form>
</body>

</html>

 
    card --dynamic
      <!-- <form action="" method="post">
            <!-- <?php foreach ($_SESSION['arr'] as $card => $counter): ?> -->
                <!-- <div class="<?php echo $card; ?>" style="background-color: <?php echo random_color(); ?>;">
                    <h1>I am <?php echo $card; ?></h1>
                    <button type="submit" name="increment<?php echo $card; ?>">Click</button>
                    <button type="submit" name="clear<?php echo $card; ?>">Clear</button>
                    <p>Counter: <?php echo $counter; ?></p> -->
                </div> -->

                // fuction 
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
    function display()
    {
        echo "<pre>";
        print_r($_REQUEST);
        print_r($_SERVER);
        echo $_SERVER["SERVER_SOFTWARE"];
        echo "<br>";
        echo $_SERVER["SERVER_NAME"];
        echo "<br>";
        echo $_SERVER["SERVER_PORT"];
        echo "<br>";
        echo $_SERVER["REQUEST_SCHEME"];
        echo "<br>";
        echo $_SERVER["TMP"];
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        display();
    }
    ?>

    <div class="card2">
        <h3>banana</h3>
        <h3>apple</h3>
        <h3>mango</h3>
        <h3>orange</h3>
    </div>

    <div class="card2">
        <form action="" method="post">
            <input id="banana" type="text" name="product" value="banana" style="display:none">
            <input id="banana" type="text" name="qnty" value="1">
            <input type="submit" value="banana">
        </form>

        <form action="" method="post">
            <input id="apple" type="text" name="product" value="apple" style="display:none">
            <input id="apple" type="text" name="qnty" value="2">
            <input type="submit" value="apple">
        </form>

        <form action="" method="post">
            <input id="mango" type="text" name="product" value="mango" style="display:none">
            <input id="mango" type="text" name="qnty" value="3">
            <input type="submit" value="mango">
        </form>

        <form action="" method="post">
            <input id="orange" type="text" name="product" value="orange" style="display:none">
            <input id="orange" type="text" name="qnty" value="4">
            <input type="submit" value="orange">
        </form>
    </div>
</body>

</html>
// unset($_SESSION["Array"]);
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
    // if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['product']))