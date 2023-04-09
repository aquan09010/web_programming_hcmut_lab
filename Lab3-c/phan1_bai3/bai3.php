<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="for">
        <h4>for</h4>
<?php
for ($x=0; $x <= 100; $x++) { 
    if($x%2==1){
        echo "$x <br>"; 
    }
}


?>
    </div>
    <div class="while">
        <h4>while</h4>
<?php
$x=0;
while($x<=100){
    if($x%2==1){
        echo "$x <br>"; 
    }
    $x++;
}

?>
    </div>
    
</body>
</html>