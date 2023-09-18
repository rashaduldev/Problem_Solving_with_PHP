<?php
$num1=29;
$num2=94;
$num3=314;
if ($num1 > $num2) {
 echo"$num1 is lergest";
} else {
    echo"$num2 is lergest  <br>"; 
   

}

$echo= maxNumber($num1,$num2,$num3 );
echo"The maximum between $num1 and $num2 and $num3 is:$echo <br/>";
function maxNumber($num1,$num2,$num3){
    if ($num1>$num2 && $num1>$num3) {
       return $num1;
    } else if($num2>$num1 && $num2>$num3){
        return $num2;
    }
    else{
        return $num3;
    }
    
}

echo weatherCheck(-10);
function weatherCheck($number){
    if ($number>0) {
       return "Positive";
    } else if($number<0){
        return "Negative";
    }
    else{
        return "Zero";
    }
    
}
?>
