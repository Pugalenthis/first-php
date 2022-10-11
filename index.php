<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

// code prints color using for each loop


<?php  
$colors = ["red", "green", "blue", "yellow"];

foreach ($colors as $value) {
  echo "  <li>$value</li> ";
}
?> 


//code which print even numbers from 0 to 100

<?php
for ($x = 0; $x <= 100; $x++) {
  if($x%2 === 0){
    echo "The number is: $x <br>";
  }
}
?>
</body>
</html>