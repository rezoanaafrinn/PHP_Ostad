<?php
$weather = 260;

if($weather<=-1)
{
    $result = "It's Freezing!";
}
elseif(($weather>-1) && ($weather<=25))
{
    $result = "It's cool";
}
elseif(($weather>25) && ($weather<=70))
{
    $result = "It's hot";
}else{
    $result = "Weather is not good!!";
}

echo "Weather Report: $result";