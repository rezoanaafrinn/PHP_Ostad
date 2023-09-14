<?php
$marks = 0;

if(($marks>=0) && ($marks<=30))
{
    $result = "Fail";
}
elseif(($marks>30) && ($marks<=50))
{
    $result = "C grade";
}
elseif(($marks>50) && ($marks<=70))
{
    $result = "B grade";
}
elseif(($marks>70) && ($marks<=90))
{
    $result = "A grade";
}
elseif(($marks>90) && ($marks<=100))
{
    $result = "A+";
}else{
    $result = "Invalid marks";
}

echo "student grade: $result";