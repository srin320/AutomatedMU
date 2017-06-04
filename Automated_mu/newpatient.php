
<html>



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial scale=1.0">
    <title>PATIENT REGISTRATION</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <script src="validate.js"></script>

</head>
<style type="text/css">
body{
  background-image: url("m1.jpg");
}
</style>
<div class="row outterWrapper">
        <div class="columns large-18" style="background-image: url('head1.png'); 
        background-size: 1366px 370px;
            background-color: #215179;">
            <div class="row header-row" style="padding-bottom: 10px; padding-left:40px;">
                <img id="imgheaderBG" src="12.jpg" height="100" width="100"/>
                
            </div>
            
        </div>
	

	<body>
    <a href="medical.php"><img src="21.jpg" height="100" width="100"></a>
		
		<center>
			
			 <form name="register" method="POST" action="newpatient2.php" onsubmit="return Validate()">
		<center>
      <table align="top" width="50%" border="3" border color="goldenrod">
			<tr>
        <td align="center"><h3><font color="red">Patient Registration  </font></h3></td></tr>
			<p>
				
					<tr><td align="center"><p><b><font color="red">Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="name1" name="name" placeholder="Enter your name" onblur="allLetter(document.register.name)" /></p></font></b></p>
            <div id="div1" style="color:red"></div>
          </td></tr>
										<tr><td align="center"><p><b><font color="red">Username : <input type="text" id="username1" name="username" placeholder="Enter a username"/></p></font></b></p>
                      <div id="div2" style="color:red"></div>
                    </td></tr>
					<tr><td align="center"><p><b><font color="red">Password :&nbsp; <input id="password1" type="password" name="password" placeholder="Enter a password"/></p></font></b></p>
            <div id="div7" style="color:red"></div>
          </td></tr>
					<tr><td align="center"><p><b><font color="red">Mobile No : <input type="text" id="mobile1" name="mobile" onblur="allNumber(document.register.mobile)" placeholder="91_ _ _ _ _ _ _ _ _ _" /></p></font></b></p>
            <div id="div6" style="color:red"></div>
          </td></tr>
					<tr><td align="center"><p><b><font color="red">Address :&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="address1" name="address" placeholder="Enter your address"/></p></font></b></p>
            <div id="div12" style="color:red"></div>
          </td></tr>
										<tr><td align="center"><p><input type="submit" name="submit" value="Register" /></p></td></tr>
				
			</p>
      </table>
			<p>
				
    
		</center>
    <marquee ><font color="red" size="8">Please Co-operate with us for better services.</font></marquee>
</form>

		

	</body>
</html>