<?php

function toEven($start,$end,$step){
    for ($i=$start; $i<=$end; $i+=$step){
  	  
        echo $i." ";
	}

}
 echo toEven(2,20,2);
?>