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
   ?>
   <?php
   $num_oranges = 4;
   $num_bananas = 36;
   if (($num_oranges > 25) && ($num_bananas > 30)) {
       echo "25% Discount<br>";
   } elseif (($num_oranges > 30) || ($num_bananas > 35)) {
       echo "15% Discount<br>";
   } elseif (!(($num_oranges < 5)) || (!($num_bananas < 5))) {
       echo "5% Discount<br>";
   } else {
       echo "No Discount<br>";
   }
   ?>
   <?php
    $request = "Coke";
    switch ($request) {
      case "Coke":
        echo "here is your Coke<br>";
        break;
      case "Pepsi":
        echo "Here is your Pepsi<br>";
        break;
      default:
        echo "here is your Water<br>";
        break;
    }
   ?>
   <?php
    $age = 12;
    $can_vote = ($age >=18) ? "can vote" : "Can't vote";
    echo "vote? : $can_vote<br>";
   ?>
   <?php
   $rand_str = "     Random String    ";
   printf("Length : %d<br>", strlen($rand_str));
   printf("Lenght : %d<br>", strlen(ltrim($rand_str)));
   printf("Lenght : %d<br>", strlen(rtrim($rand_str)));
   // strtoupper
   // strtolower
   // ucfirst
   ?>
   <?php
   $friends = array('joy', 'willow', 'ivy');
   echo 'Wife: ' . $friends[0] . '<br>';
   $friends[3] = 'steve';
   foreach ($friends as $f) {
       printf("Friend : %s<br>", $f);
   }
   $me_info = array('Name' => 'megan', 'street' => '123 fake st');
    foreach ($me_info as $k => $v) {
        printf("%s : %s<br>", $k, $v);
    }
  //sort($friends);
  //rsort($friends);
  //asort($me_info);
  //krsort($me_info);

  // multidimentional array --> array within an array
   $customers = array(array('derek', '123 main'), array('sally', '122 main'));
   ?>

</body>
</html>