<!DOCTYPE html>
<html>
<meta charset="UTF-8">
    <title>Switch_Case</title>
<body>
    
<?php
echo "<h1>Number of units <br></h1>";
$y=145;
echo $y;
echo "<br>";
if($y>=0 && $y<=50)
{
    echo "<h1>Amount</h1>";
    echo "<br>";
    echo $x=$y * (3.50);
}
else
if($y>50 && $y<=150)
{
    echo "<h1>Amount</h1>";
    $w=50*(3.50);
    $e=$y-50;
    $k=$e*(4.00);
    echo $k+$w;
}
else 
if($y>150 && $y<=250)
{
   echo "<h1>Amount</h1>";
   $a=50*(3.50);
   $b=100 *(4.00);
   $c=$y-150;
   $d=($c*(5.20))+$b+$a; 
   echo "<br>";
   echo $d;
}
else
if($y>250)
{
    echo "<h1>Amount</h1>";
    $f=50*(3.50);
    $g=100* (4.00);
    $h=100* (5.20);
    $i=$y-250;
    echo $j=($i*(6.50))+$h+$g+$f;

}
else
    echo "<h1>You entered ivalid input</h1>"
// switch ($favcolor) {
//     case ">100":
//         echo "<h1>Monday</h1><br><h2>Qorma</h2>";
//         break;
//      case "<100":
//         echo "<h1>Tuesday</h1><br><h2>Daal</h2>";
//         break;
//     case "=100":
//         echo "<h1>Wednesday</h1><br><h2>Chiken</h2>";
//         break;
//     case "Thu":
//         echo "<h1>Thursday</h1><br><h2>Biryani</h2>";
//         break;
//      case "Fri":
//         echo "<h1>Friday</h1><br><h2>Pizza</h2>";
//         break;
//     case "Sat":
//         echo "<h1>Saturday</h1><br><h2>BBQ</h2>";
//         break;
//     default:
//         echo "<h1>Sunday</h1><br><h2>Pulav</h2>";
// }
?>
 
</body>
</html>