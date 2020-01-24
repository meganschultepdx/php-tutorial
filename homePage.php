<?php
$f_name = "Megan";
$l_name = "Schulte";
$number = 4;
$other_num = 1.234;
$is_tired = true;
$address = array('street' => '123 Fake st', 'city' => 'springfield');
$state = null;
define('PI', 3.1415);
?>

<DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">

<title>PHP Tutorial</title>
</head>
<body>
  <p>Name  :  <?php echo $f_name . ' ' . $l_name ?>
  </p>  
   <form action="homePage.php" method="get">
   <label>Your State : </label>
   <input type="text" name="state"/><br>
   <label>Number 1 : </label>
   <input type="text" name="num-1"/><br>
   <label>Number 2 : </label>
   <input type="text" name="num-2"/><br>
   <input type="submit" value="Submit"/>
   </form>
   <?php
    if (isset($_GET) && array_key_exists('state', $_GET)) {
        $state = $_GET['state'];
        //verify states existance and that the value isn't empty
        if (isset($state) && !empty($state)) {
            echo 'you live in ' . $state . '<br>';
            echo "$f_name lives in $state<br>";
        }
        if (count($_GET) >= 3) {
            $num_1 = $_GET['num-1'];
            $num_2 = $_GET['num-2'];
            echo "$num_1 + $num_2 = " . ($num_1 + $num_2) . "<br>";
            echo "$num_1 - $num_2 = " . ($num_1 - $num_2) . "<br>";
            echo "$num_1 * $num_2 = " . ($num_1 * $num_2) . "<br>";
            echo "$num_1 / $num_2 = " . ($num_1 / $num_2) . "<br>";
            echo "$num_1 % $num_2 = " . ($num_1 % $num_2) . "<br>";
            echo "$num_1 / $num_2 = " . (intdiv($num_1, $num_2)) . "<br>";

            echo "Increment $num_1 = " . ($num_1++) . "<br>";
            echo "Decrement $num_1 = " . ($num_--) . "<br>";
            echo "abs(-5) = " . abs(-5) . "<br>";
        }
    }
    echo $number;
   ?>


</body>
</html>