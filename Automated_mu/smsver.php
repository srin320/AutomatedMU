<?php
	
	$sender = $_POST['from']; // This is who the message appears to be from.
	$numbers = $_POST['number']; // A single number or a comma-seperated list of numbers
	$message = $_POST['message'];
	
	require 'class-Clockwork.php';

try
{
    // Create a Clockwork object using your API key
    $clockwork = new Clockwork( '0e20cd2bb454ba56c2acb88699bba3dfa21da9a4' );

    // Setup and send a message
    $message = array( 'to' => '&numbers', '&message' => 'This is a test!' );
    $result = $clockwork->send( $message );

    // Check if the send was successful
    if($result['success']) {
        echo 'Message sent - ID: ' . $result['id'];
    } else {
        echo 'Message failed - Error: ' . $result['error_message'];
    }
}
catch (ClockworkException $e)
{
    echo 'Exception sending SMS: ' . $e->getMessage();
}
?>
<html>
<title>SMS</title>
<head>
<body>
<form action="smsver.php" method="POST">

	Number:<br/>
	 <input type="text" name="number">
	<br/><br/>
	 Sender:<br/>
	 <input type="text" name="from">
	 <br/><br/>

	 Message:<br/> <br/>
	 <textarea name="message"></textarea><br/>
	 <input type="hidden" name="submitted" value="send">
	 <input type="submit" name="submit" value="send">



</form>



</body>


</head>
</html>