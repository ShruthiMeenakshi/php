<?php

/**the loop fun are for, while. foreach.
 * the loop syntax is exactly similar to c programming but the diff is its a bit combo of c and html and kotlin */

 $n=5;
 for($i=1; $i<=5; $i++){
    echo "$i Greetings \n";
 }
 //to iterate every number in a array we use foreach loop
//consider a online shopping app or a student list that contains repititive items.
//note: we can't use two variables at a time inside foreach.

$products = array("mobile","laptop","dress");
$i=0;
foreach($products as $prod){
    $i++;
    echo"product item no.$i: $prod \n";
}

?>