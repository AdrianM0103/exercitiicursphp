<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////
// exercitiul V1 4
//////////////////////////////////////////////////////////////////////////////////////////////////////////

function generareVector($n)
{
    $v = array();
    for($i=0;$i<$n;$i++)
        array_push($v,random_int(0,10));
    return $v;
}

function bubbleSort($v)
{
    for($i=0;$i<sizeof($v);$i++)
        for($j=0;$j<sizeof($v)-$i-1;$j++)
            if($v[$j]>$v[$j+1]){
                $aux=$v[$j];
                $v[$j]=$v[$j+1];
                $v[$j+1]=$aux;
            }
    $v1=$v;
    return $v1;
}

$n=random_int(10,20);
$v=generareVector($n);
for($i=0;$i<$n;$i++)
    print($v[$i]." ");
print("\n");
$v1=bubbleSort($v);
for($i=0;$i<$n;$i++)
    print($v1[$i]." ");
?>