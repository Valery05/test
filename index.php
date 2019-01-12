<?php
$m = range(100,1099,[1]);
$x = 898;
function binarySearch($m, $x)
{
    $s = 0;
    $f = count($m)-1;
    while ($s <= $f)
    {
        $q = floor(($s+$f)/2);
        if ($m[$q]==$x)
        {
            return $q;
        }
        elseif ($m[$q]>$x)
        {
            $f = $q-1;
        }
        else {
            $s = $q +1;
        }
    }
    return 'Not Found';
}

echo binarySearch($m,$x);
