<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////
// exercitiul V1 2
//////////////////////////////////////////////////////////////////////////////////////////////////////////

function generare_vector($n)
{
    $v = array();
    for($i=0;$i<$n;$i++)
        array_push($v,random_int(0,10));
    return $v;
}

function cautare($v,$n)
{ 
    for($i=0;$i<count($v);$i++)
        if($v[$i]==$n)
            return $i;
    return 0;
}

$n=random_int(10,20);
$ar=generare_vector($n);
$rn=random_int(0,10);
print($rn."\n");
print("Valoarea ".$rn." se gaseste pe pozitia ".cautare($ar,$rn));

?>