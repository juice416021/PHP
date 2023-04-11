<?php
$a=[0,1,2,3,4,5,6,7,8,9];
$count=count($a);

$odd=0;
$even=0;
for($i=0;$i<$count;$i++)
{
	if($a[$i]%2==0)
	{
		$odd=$odd+$a[$i];
	}
	else
	{
		$even=$even+$a[$i];
	}
	
}

echo "奇數總和:".$even."\n"."偶數總和:".$odd."\n";

$a=[0,1,2,3,4,5,6,7,8,9];
$count=count($a);

$odd=[];
$even=[];
for($i=0;$i<$count;$i++)
{
	if($a[$i]%2==0)
	{
		$odd[]=$a[$i];
	}
	else
	{
		$even[]=$a[$i];
	}
}

echo "偶數陣列:";
foreach($odd as $value)
{	
	echo $value;
}
echo "\n"."奇數陣列:";
foreach($even as $value)
{	
	echo $value;
}

?>
