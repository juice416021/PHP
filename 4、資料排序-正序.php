<?php
$a=[77,5,5,22,13,55,97,4,796,1,0,9];

for($i=0;$i<count($a)-1;$i++)
{
	for($j=0;$j<count($a)-$i-1;$j++)
	{
		if($a[$j]>$a[$j+1])
		{
			$temp=$a[$j+1];
			$a[$j+1]=$a[$j];
			$a[$j]=$temp;
		}
	}
}

foreach($a as $value)
{
	echo $value." ";
}

?>
