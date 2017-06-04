<?php

	require("class-Clockwork.php");
	$apikey = "0e20cd2bb454ba56c2acb88699bba3dfa21da9a4";
	$clockwork = new Clockwork($apikey);

	$message = array('to'=>'9046962544','message'=>'Hi Srinath!');
	$done = $clockwork->send($message);

?>