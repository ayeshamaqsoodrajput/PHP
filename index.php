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
    $x =1;
     while($x <=9){
        echo ": $x <br>";
        $x++;
     }
      $t  =date("H");
      if ($t <="20"){
        echo "Have a good day";
      }
  //  function Add($a,$b){
//echo gettype ($a)
//echo  $a- $b;
//Add (45- 67 );
   // } 
  $value = "";
  function add($a ,$b){
  $value =2+9;
  echo $value;   
   }
   add (34,5);
    ?>
</body>
</html>