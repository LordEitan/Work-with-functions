 <?php

function DayOfTheWeek($dayNumber) {
    $arrayDays = [1=>'Понедельник', 2=>'Вторник', 3=>'Среда', 4=>'Четверг', 5=>'Пятница', 6=>'Суббота', 7=>'Воскресенье'];
    return $arrayDays[$dayNumber];
}
echo DayOfTheWeek(2); // task # 1 in which it was necessary to create a function that takes a number as a parameter and displays a value for the day of the week in Russian
echo "<br>";
echo "<br>";



$arrayNumbers = [1, -2, 3, -4, 5, -6, 7, -8, 9, -10,];
$positiveNumbers = [];
$negativeNumbers = [];

function isPositive($certainNumber){
    if ($certainNumber > 0) {
        return true;
    }
    else {
        return false;
    }
}
function isNegative($certainNumber){
    if ($certainNumber < 0) {
        return true;
    }
    else {
        return false;
    }
}
foreach ($arrayNumbers as  $pn) {
    if (isPositive($pn))
        $positiveNumbers[] = $pn;
}
foreach ($arrayNumbers as  $np) {
    if (isNegative($np))
        $negativeNumbers[] = $np;
}
var_dump($positiveNumbers);
var_dump($negativeNumbers);
// task number 2 in which it was necessary to create an array with arbitrary numbers then, thanks to the isPositive and IsNegative function, output purely positive numbers and negative to a new array while applying true and false
echo "<br>";



function getDigitsSum($sumNumbers){
    return array_sum(str_split($sumNumbers));

}

echo getDigitsSum(555); // task # 3 in which it was necessary to create a function getDigitsSum which takes a number as a parameter and displays the sum of its digits

