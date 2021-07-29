<!DOCTYPE html>
<html>
<head>
<title>сайтик</title>
<meta charset="utf-8" />
</head>
<body>

<h3>Ответ</h3>

<form >
<?php
$matr = [[0,0,0],[0,0,0],[0,0,0]];
$matr = priem(...$matr);
vivod(...$matr);

$opred = 
$matr[0][0]*($matr[1][1]*$matr[2][2] - $matr[1][2]*$matr[2][1]) - 
$matr[0][1]*($matr[1][0]*$matr[2][2] - $matr[1][2]*$matr[2][0]) +
$matr[0][2]*($matr[1][0]*$matr[2][1] - $matr[1][1]*$matr[2][0]);

echo "Определитель матрицы = $opred";



function priem (...$x)
{
    $k = 0;
    $j = 0;
    for($i = 1; $i <=9; $i++){
        if(isset($_GET[$i])){

            $x[$k][$j] = $_GET[$i];
            if($j == 2){
               $j = 0;
                $k++;
            }
            else{
               $j++;
            }
        }
    }
    return $x;
}

function vivod (...$x)
{
    for($a = 0; $a < 3; $a++){
        for($s = 0; $s < 3; $s++){
            echo $x[$a][$s];
            echo " ";
        }
    ?> <br> <?php    
    }
}

?>
</form>
</body>
</html>