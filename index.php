<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<?php
    $a=1;
    $b=2;
    $z=$a+$b;
    echo $z;
    // 
    for($k =0;$k<=10;$k++){
        echo $k."<br>";
    }
    $x=0;
    while($x<=10){
        echo $x;
        $x++;
    }
    $array = ["html","css","php"];
    // echo $array;
    print_r($array);
    foreach($array as $key=>$value){
        echo "<br>".$key;
        echo "<br>".$value;
    }
    ?>
</body>
</html>