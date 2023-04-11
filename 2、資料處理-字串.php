<?php
$a="人易科技:上 機 測 驗 - 演算法";
$a1 = str_replace(":", "：", $a);
echo $a1."\n";

$a2 = '';
for ($i = 0; $i < strlen($a1); $i++) {
    $char = substr($a1,$i,1);
    if ($char ===' '&& substr($a1,$i-1,1)!=='-'&& substr($a1,$i+1,1)!=='-') {
        continue;
    }
    $a2 = $a2.$char;
}
echo $a2."\n";

$a2="人易科技:上 機 測 驗 - 演算法";
$a2 = str_replace("：", ":", $a2);

for($i=0;$i<strlen($a2);$i++)
{
    $char=substr($a2,$i,1);
    if($char===':')
    {
        $b1=$i+1;
    }
    else if($char==='-')
    {
        $b2=$i;
    }
}

$b3=$b2-$b1;
$a3=substr($a2,$b1,$b3);

echo $a3;

?>
