<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Phone Verification via SMS by Twilio</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#enter_number").submit(function(e) {
				e.preventDefault();
				initiateSms();
			});
		});
		
		function initiateSms() {
			$.post("sms.php", { phone_number : $("#phone_number").val() }, 
					showVerifyForm, 
					"json");
		}
		
		function showVerifyForm() {
			$("#phone_number2").val($("#phone_number").val());
			$("#enter_number").fadeOut("fast");
			$("#verify_code").fadeIn();
		}
	</script>
</head>
<body>
	<form id="enter_number">
		<p>Enter your phone number:</p>
		<p><input type="text" name="phone_number" id="phone_number" onsubmit="initiateSms()" /></p>
		<p><input type="submit" name="submit" value="Verify" /></p>
	</form>
	
	<form id="verify_code" style="display: none;" action="status.php" method="post">
		<p>Sending you a text message with your verification code.</p>
		<p>Once received, enter it here:</p>
		<h1 id="verification_code"><input type="text" name="verification_code" maxlength="6" size="7" /></h1>
		<input type="hidden" value="" id="phone_number2" name="phone_number" />
		<p><input type="submit" value="Verify" /></p>
	</form>
</body>
</html>
