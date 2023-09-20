<?php

function toEven($start,$end,$step){
    $i=$start;
        do
            {
                echo $i." ";
                $i += $step;
            }
        while($i<=$end);
 }
 echo toEven(2,20,2);
?>