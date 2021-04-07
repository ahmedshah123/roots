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
    define("ti",23);
    echo "my name is ahmed";





?>
<?php
echo "my name is ali";





?>
<?php
echo "<br>";
$variable1 = 34;
$variable2 = 12;
echo $variable1;
echo $variable2;
echo "<br>";
echo "the value of 1==4 is ";    //false
echo var_dump(1==4);
echo "<br>";
echo "the value of 1>=4 is ";       //false
echo var_dump(1>=4);
echo "<br>";
echo "the value of 1<=4 is ";        //true
echo var_dump(1<=4);
echo "<br>";
echo "the value of 1!=4 is ";         //true
echo var_dump(1!=4);
echo "<br>";

$newvar = (true and false);    //false
echo var_dump($newvar);
echo "<br>";

$newvar = (false or true);      //true
echo var_dump($newvar);
echo "<br>";

$newvar = (true xor false);    //true
echo var_dump($newvar);
echo"<br>";



$newvar = (true xor false);         //true
echo var_dump($newvar);
echo "<br>";



$newvar = (true and true);         //true
echo var_dump($newvar);
echo "<br>";



$newvar = (false and false);     //false
echo var_dump($newvar);
echo "<br>";



$newvar = (true and false);        //false
echo var_dump($newvar);
echo "<br>";






echo "the variable1 / variable2 is ";
echo $variable1 / $variable2;
echo "<br>";
echo "the varaible1 * variable2 is ";
echo $variable1 * $variable2;
echo "<br>";
echo "the varaible1 + variable 2 is ";
echo $variable1 + $variable2;
echo "<br>";
echo "the varaible1 - variable2 is ";
echo $variable1 - $variable2;
echo "<br>";

$str = 34.12;
echo var_dump($str);

echo "<br>";
echo ti;



?>
</body>
</html>