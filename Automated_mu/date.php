<?php

	//$cuurentdate = date("Y-m-d");

	//susnatapaul1995
	//echo $cuurentdate;
	//$tomorrow = date("Y-m-d", strtotime("+ 0 day"));
	//echo $tomorrow;
	
	for($i=0; $i<10; $i++)
	{
		$today = date("Y-m-d", strtotime("+ $i day"));
		echo $today."....";
	}

	/*$condition = false;
	while($condition==false)
	{
		$i = 0;
		$today = date("Y-m-d", strtotime("+ $i day"));
		echo $today;
		if($i==9)
		{
			
			echo "Date found : ".$today;
			$condition=true;
		}
		$i++;
	}*/
?>
