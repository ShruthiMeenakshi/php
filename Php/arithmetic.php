<?php
/**Arithmetic Operators */

$x=90;
$y=30; 
$sum = $x+ $y;//Arithmetic operator
$x =+$y;//assignment operator
$compare = ($x == $y);//comparison operator
$logical_result = ($x>0) && ($y<0);//Logical operator
echo $sum;

?>

<?php 

$num = 40;
if($num>50) {
    echo "Greater than 50";
}
elseif($num == 50){
    echo "equal to 50";

}
else{
    echo "lesser than 50";
}
?>