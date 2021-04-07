<?php
$insert=  false;
if (isset($_POST['name'])) {
    

$server = "localhost";
$username = "root";
$password = "";

$con= mysqli_connect($server,$username,$password);


if (!$con) {
   die("failed to database server".mysqli_connect_error());
}
// echo "success in database";

$name = $_POST['name'];
$age = $_POST['age'];
$class = $_POST['class'];
$question = $_POST['question'];
$sql = "INSERT INTO `root`.`root` (`name`, `age`, `class`, `question`, `date`, `datetime`) VALUES ('$name', '$age', '$class', '$question', '2021-04-07', '2021-04-07 07:01:22.000000')";

// echo $sql;

if ($con->query($sql)==true) {
   $insert = true;
}
 "ERROR: $sql <br> $con->error";

$con->close();


}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img class="bg" src="school.jpg">
    <div class="container">
    <h1>Trip to mardan with roots school college</h1>
    <h3>submit form to join trip</h3>
    <?php
    if ($insert = true) {
        # code...
    
   echo "<p>success in submit</p>";
    }

    ?>
    </div>
     <form action="index4.php" method="post">
         <input type="text" placeholder="name" id="name" name="name">
         <input type="text" placeholder="age" id="age" name="age">
         <input type="text" placeholder="class" id="class" name="class">
         <input type="text" placeholder="Any question" id="question" name="question">
         <button class="btn">submit</button>









     </form>

    <style>
        .container{
            text-align: center;
            background-color: rgb(144, 248, 248);
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 23px;
        }
        h3{
            background-color: rgb(216, 166, 97);
        }
        .bg{
            z-index: -1;
            position: absolute;
            width: 100%;
        }
        body{
            overflow: hidden;
        }
        input{
            display: list-item;
            width: 50%;
           margin: 12px;
           height: 50px;
           font-size: 34px;
           border: 6px solid black;
           border-radius: 17px;
        }
        .btn{
            width: 50%;
            font-size: 45px;
            font-family: cursive;
            border-radius: 23px;
            background-color: burlywood;
        }
        
            




    </style>
</body>
</html>