<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////
// exercitiul V1 3
//////////////////////////////////////////////////////////////////////////////////////////////////////////

function generareVector($n)
{
    $v = array();
    for($i=0;$i<$n;$i++)
        array_push($v,random_int(0,10));
    return $v;
}

function inversareVector($v,$n)
{
    $v1=array();
    for($i=$n-1;$i>=0;$i--)
        array_push($v1,$v[$i]);
    return $v1;
}

$n=random_int(10,20);
$v=generareVector($n);
for($i=0;$i<$n;$i++)
    print($v[$i]." ");
print("\n");
$v1=inversareVector($v,$n);
for($i=0;$i<$n;$i++)
    print($v1[$i]." ");
?>