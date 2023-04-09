<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$x=3;
switch ($x) {
  case $x%5==0:
    echo "Hello"."<br>";
    break;
  case $x%5==1:
    echo "How are you"."<br>";
    break;
  case $x%5==2:
    echo "I'm doing well, thank you"."<br>";
    break;
  case $x%5==3:
    echo "See you later"."<br>";
    break;
  default:
       echo "Good-bye"."<br>";

}

    ?>
</body>
</html>