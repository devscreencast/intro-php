<?php
#while loop
/*$i = 50;
while($i != 5) {
    echo "The current value of i is $i <br />";
    $i -= 5;
}*/
#do while loop
/*$total = 0;
$num = 10;
do{
   $total += $num;
   echo "Num is $num <br />";
   $num--;
}while($num != 5);

echo "Total is $total";*/
#for loop
/*for($i = 50; $i != 5; $i -= 5) {
    echo "The current value of i is $i <br />";
}*/
#break
/*$i = 1;
for(;;) {
    if ( $i > 5) break;
    echo "The current value of i is $i <br />";
    $i++;
}*/

#continue
for( $i = 1; $i < 15; $i++ ) {
    if( $i == 5 ) {
        echo "Skip number 5 <br />";
        continue;
    }
    echo "The current value of i is $i <br />";
}
require 'templates/index.tpl.php';

