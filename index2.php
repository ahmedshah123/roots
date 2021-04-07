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
    $age = 78;
    if ($age<23) {
        echo "my name is ahmed";
       
    }
    elseif ($age==7) {
        echo "my name is ali";
    }
    elseif ($age==7) {
        echo "my name is khawaja";
       
    }
    
    
    
    
    
    else {
       echo "my name is khan";
    }

$language = array("shahzaib","ahmed","ali","khan");
echo $language[1];


$a =0;
    while ($a <= 10) {
       echo $a;
       $a++;
       echo "<br>the value of a is";
    }
    $a =0;
    do {
        echo $a;
        $a++;
        echo "<br>the value of while loop is ";

    } while ($a <= 10);

    for ($a=0; $a < 10; $a++) { 
        echo $a;
        echo "<br>the value of a is ";
    }
    foreach ($language as $value) {
        echo $value;
        echo "<br>the value of language is ";

    }
    function print5(){
        echo "<br>five";




    }
    print5();


    function print_number($number){
    echo "<br>the number is ";
    echo $number;


}
print_number(45);





$str = "<br>my name is string";
echo $str;
$lenn = strlen($str);
echo "<br>the word lenght is ".str_word_count($str);
echo "<br> the reverse is ".strrev($str);
echo "<br> the find is ".strpos($str,"string");
echo "<br>the replace is ".str_replace("is","of",$str);




?>
</body>
</html>