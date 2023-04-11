function twoSum($nums,$target) {
    $a=array();
    for($i=0;$i<count($nums);$i++)
    {
        $needNumber=$target-$nums[$i];
        
        if(isset($a[$needNumber]))
        {
        	return [$a[$needNumber],$i];
        }
        $a[$nums[$i]] = $i;
    }
}
