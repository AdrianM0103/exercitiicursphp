<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////
// exercitiul V2
//////////////////////////////////////////////////////////////////////////////////////////////////////////

function generareVector($n)
{
    $v = array();
    for($i=0;$i<$n;$i++)
        array_push($v,random_int(0,10));
    return $v;
}

function permutariCirculareLaStanga($v,$n,$nr_permutari)
{
    if($nr_permutari>0){
        $aux=$v[0];
        for($i=0;$i<$n-1;$i++)
            $v[$i]=$v[$i+1];
        $v[$n-1]=$aux;
        return permutariCirculareLaStanga($v,$n,$nr_permutari-1);
    }
    else
        return $v;
}

$n=random_int(10,20);
$v=generareVector($n);
for($i=0;$i<$n;$i++)
    print($v[$i]." ");
print("\n");
$nr_permutari=random_int(0,$n);
print("Dupa ".$nr_permutari." de permutari circulare la stanga, vectorul v-a fi:"."\n");
$v1=permutariCirculareLaStanga($v,$n,$nr_permutari);
for($i=0;$i<$n;$i++)
    print($v1[$i]." ");

?>