<?php

function toEven($start,$end,$step){
$i=$start;
while ($i < $end) {
    
    $i += $step;
    echo $i. " ";
}
}
 echo toEven(0,20,2);
?>