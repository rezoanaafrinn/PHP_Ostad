<?php

ini_set('display_errors',0);

if( isset( $_REQUEST['calculate'] ))

{

$operator=$_REQUEST['operator'];

if($operator=="+")

{

$add1 = $_REQUEST['fvalue'];

$add2 = $_REQUEST['lvalue'];

$res= $add1+$add2;

}

if($operator=="-")

{

$add1 = $_REQUEST['fvalue'];

$add2 = $_REQUEST['lvalue'];

$res= $add1-$add2;

}

if($operator=="*")

{

$add1 = $_REQUEST['fvalue'];

$add2 = $_REQUEST['lvalue'];

$res =$add1*$add2;

}

if($operator=="/")

{

$add1 = $_REQUEST['fvalue'];

$add2 = $_REQUEST['lvalue'];

$res= $add1/$add2;

}

if($_REQUEST['fvalue']==NULL && $_REQUEST['lvalue']==NULL)

{

echo "<script language=javascript> alert(\"Please Enter values.\");</script>";

}

else if($_REQUEST['fvalue']==NULL)

{

echo "<script language=javascript> alert(\"Please Enter First value.\");</script>";

}

else if($_REQUEST['lvalue']==NULL)

{

echo "<script language=javascript> alert(\"Please Enter second value.\");</script>";

}

}

?>

<form>

<table>

            <tr>

                <td>Enter First Number</td>

                <td colspan="1">

               

                    <input name="fvalue" type="text"/></td>

            <tr>

                <td>Select Operator</td>

                <td>

                    <select name="operator" style="width: 63px">

<option>+</option>

<option>-</option>

<option>*</option>

<option>/</option>

</select></td>

               </tr>

            <tr>

                <td>Enter First Number</td>

                <td class="auto-style5">

                    <input name="lvalue" type="text"/></td>

               

            </tr>

            <tr>

                <td></td>

                <td><input type="submit" name="calculate" value="Calculate"/></td>

               

            </tr>

            <tr>

                <td>Result = </td>

                <td style="color:darkblue"><?php echo $res;?></td>

               

            </tr>

       </table>

 </form>