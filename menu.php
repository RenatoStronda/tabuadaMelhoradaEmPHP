<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Menu - Atividade3 </title>
</head>
<body>
<?php session_start(); ?>
    <h3>Bem Vindo, <?php echo $_SESSION["user"]; ?></h3>
<form method="GET">
<label> Digite O Número Da Tabuada: </label>
    <input type="text" name="num1"><br>
  <label> Tabuada: </label>
  <select name="tabuada">
    <option value="for"> For </option>
    <option value="while"> While </option>
    <option value="dowhile"> Do While </option>
  </select>
  <br><br>
  <input type="submit" value="Exibir">
</form>
<br><br>
<?php
$num1 = $_GET["num1"];
$tabuada = $_GET["tabuada"];
switch ($tabuada){
    case "for":
    for($i = 1; $i <= 10; $i++ ){
        $tab = $num1 * $i;
        echo "$num1 * $i = $tab <br>";
    }
break;
case "dowhile":
    do{
        $i = $i +1;
        $tab = $num1 * $i;
        echo "$num1 * $i = $tab <br>";
    }while($i < 10);
break;
case "while":
    while($i < 10)
    {
        $i = $i +1;
        $tab = $num1 * $i;
        echo "$num1 * $i = $tab <br>";
    }
break;
}
?>
<br><br>
 <a href="index.php"> Logout </a>
</body>
</html>