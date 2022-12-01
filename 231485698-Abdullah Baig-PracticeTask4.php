<!DOCTYPE html>
<html>
<body>

<?php
$variable1 = 1;		# declare variable1

$variable2 = 2;     # declare variable2
echo "variable 1 is $variable1 <br>
	  variable 2 is $variable2 <br>";

$variable3 = $variable1 + $variable2;	# add and store values with assignment operator
echo "sum of variable1 and variable2 is $variable3 <br>";

$variable4 = $variable1 - $variable2;	# subtract and store values with assignment operator
echo "difference of variable1 and variable2 is $variable4<br>";

$variable5 = $variable1 * $variable2;	# multiply and store values with assignment operator
echo "product of variable1 and variable2 is $variable5<br>";

$variable6 = $variable1 / $variable2;	# divide and store values with assignment operator
echo "division of variable1 and variable2 gives $variable6<br>";

++$variable1;					# increment value
echo "increment of variable1 gives $variable1<br>";

--$variable1;					# decrement value
echo "decrement of variable1 gives $variable1<br>";

?>

<?php // use of if else
echo "<h3>If Else</h3> <br>";
if ($variable1 < 1) {
  echo "Less than 1!<br>";
} else {
  echo "Equal to or greater than 1!<br>";
}
?>

<?php // use of array
echo "<h3>Arrays: </h3> <br>";

$fruits = array("mango", "apple", "guava");
echo "I like " . $fruits[0] . ", " . $fruits[1] . " and " . $fruits[2] . ".<br>";
?>

<?php // while loop
$x = 1;
echo "<h3>While Loop</h3> <br>";
while($x <= 5) {
  echo "<br>The number is: $x <br>";
  $x++;
}
?>

<?php // do while loop
$x = 1;
echo "<h3>Do While Loop</h3> <br>";
do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
?>

<?php // for loop
echo "<h3>For Loop</h3> <br>";
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
?>



</body>
</html>
