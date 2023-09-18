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
$num=10;
$user=isDivisibleBy5And11($num);
echo $user;
// if (isDivisibleBy5And11($num)) {
//     echo"oh";
// } else {
//    echo"no";
// }

function isDivisibleBy5And11($num){
    if ($num%5==0 && $num%11==0) {
        return "true";
    } else {
        return "false";
    }
    
}

<?php
// Function to check if a character is a vowel
function isVowel($char) {
    $lowercaseChar = strtolower($char);
    if ($lowercaseChar == 'a' || $lowercaseChar == 'e' || $lowercaseChar == 'i' || $lowercaseChar == 'o' || $lowercaseChar == 'u') {
        return true;
    } else {
        return false;
    }
}

// Input alphabet
$alphabet = 'E'; // You can change this alphabet to test different cases

// Check if the alphabet is a vowel
if (ctype_alpha($alphabet) && strlen($alphabet) === 1) {
    if (isVowel($alphabet)) {
        echo "$alphabet is a vowel.";
    } else {
        echo "$alphabet is a consonant.";
    }
} else {
    echo "Please enter a valid single alphabet character.";
}


?>
