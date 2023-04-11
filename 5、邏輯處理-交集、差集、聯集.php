<?php
$a=[77,5,5,22,13,55,97,4,796,1,0,9];
$b=[0,1,2,3,4,5,6,7,8,9];
$c=[];
$d=[];
$e=[];

foreach($a as $value1)
{
    foreach($b as $value2)
    {
        if($value1 == $value2)
        {
            $check = 0;
            foreach($c as $value3)
            {
                if($value3 == $value1)
                {
                    $check = 1;
                    break;
                }
            }
            if($check == 0)
            {
                $c[] = $value1;
            }
        }
    }
}
sort($c);
foreach($c as $valuec)
{
    echo $valuec . " ";
}

echo "\n";

foreach($a as $value1)
{
	$check=0;
    foreach($b as $value2)
    {
        if($value1 == $value2)
        {
            $check=1;
        }
    }
    if(!$check)
    {
    	$d[]=$value1;
    }
}
sort($d);
foreach($d as $valued)
{
    echo $valued . " ";
}

echo "\n";


foreach($a as $value1)
{
    foreach($b as $value2)
    {

        $check = 0;
        foreach($e as $value3)
        {
            if($value3 == $value1)
           {
                $check = 1;
                break;
            }
        }
        if($check == 0)
        {
            $e[] = $value1;
        }
    }
}

sort($e);
foreach($e as $valuee)
{
    echo $valuee. " ";
}

?>
