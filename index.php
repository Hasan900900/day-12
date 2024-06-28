<!-- // if (isset($_POST["clear$card"])) {
// $_SESSION['arr'][$card] = 0;
// } -->
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get" action="./actions.php">
        <input type="text" name="name" placeholder="Name" />
        <input type="text" name="email" placeholder="Email" />
        <input type="password" name="password" placeholder="Password" />
        
        <input type="submit" name="sumbit-btn" />
        
    </form>



</body>

</html> -->



<!-- 222 -->




<?php

// reference for shopping card start
// Here's where the shopping cart starts 
// <?php

// session_start();

// if(isset($_SESSION["cart"]) && count($_SESSION["cart"])> 0)

session_start();

if (!isset($_SESSION['arr'])) {
    $_SESSION['arr'] = array(
        'card1' => 0,
        'card2' => 0,
        'card3' => 0,
        'card4' => 0,
        'card5' => 0

    );
}
// array reference
// $languages['Python'] = array(
//     "first_release" => "1991",
//     "latest_release" => "3.8.0",
//     "designed_by" => "Guido van Rossum",
//     "description" => array(
//         "extension" => ".py",
//         "typing_discipline" => "Duck, dynamic, gradual",
//         "license" => "Python Software Foundation License"

//     )
// );


    foreach ($_SESSION['arr'] as $card => $value) {
        if (isset($_POST["increment$card"])) {
            $_SESSION['arr'][$card]++;
        }
        if (isset($_POST["clear$card"])) {
            $_SESSION['arr'][$card] = 0;
        }

    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COUNTER</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>

    <!-- refrence for foreach in array -->

    <!-- $members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
  echo "$x : $y <br>";
} -->
    <div class="container">
        <form action="" method="post">
            <?php foreach ($_SESSION['arr'] as $card => $counter): ?>
                <!-- inline php reference  -->
                <div class="<?php echo $card; ?>">
                    <h1>I am <?php echo $card; ?></h1>
                    <button type="submit" name="increment<?php echo $card; ?>">Click</button>
                    <button type="submit" name="clear<?php echo $card; ?>">Clear</button>
                    <p>Counter: <?php echo $counter; ?></p>
                </div>
            <?php endforeach; ?>
        </form>
    </div>
</body>
<!-- /* $card will be assigned the key of the current element.
        $counter will be assigned the value of the current element. -->

</html>