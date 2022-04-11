<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////
// exercitiul V1 1
//////////////////////////////////////////////////////////////////////////////////////////////////////////

function numaraX($v,$n)
{
    $k=0;
    for($i=0;$i<count($v);$i++)
        if($v[$i]==$n)
            $k++;
    return $k;
}

function generareVector($n)
{
    $v = array();
    for($i=0;$i<$n;$i++)
        array_push($v,random_int(0,10));
    return $v;
}

$n=random_int(10,20);
$nr_cautate=random_int(0,10);
$v=generareVector($n);
for($i=0;$i<$n;$i++)
    print($v[$i]." ");
print("\n");
print("Numarul ".$nr_cautate." apare de ".numaraX($v,$nr_cautate)." ori in vector");

?>
