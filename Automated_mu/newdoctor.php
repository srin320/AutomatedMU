<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial scale=1.0">
    <title>NEW DOCTOR </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <script src="validate1.js"></script>

</head>
<body style="color:gold" background="img/az.jpg">
    <script src="js/jq1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <nav class="navbar navbar-inverse" >
    <nav class="navbar navbar-static-top ">
  <div class="container-fluid">
    <nav class="navbar">
  <div class="container-fluid" style="color:gold">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="navbar-brand" style="font-family:fantasy; font-size: 70px;padding-top:30px;">
       NITD MEDICAL UNIT 
       </div>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  </div>
</nav>
</nav>
	

	<body>
    <a href="medical.php"><img src="21.jpg" height="100" width="100"></a>
    <form name="register1" method="POST" onsubmit="return Validate()">
		<center>
      <table align="top" width="50%" border="3" border color="goldenrod">
			<tr>
        <td align="center"><h3><font color="red">Doctor Registration  </font></h3></td></tr>
			<p>
				
					<tr><td align="center"><p><b><font color="red">Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" id="name1" placeholder="Enter your name"  onblur="allLetter(document.register1.name)" /></p></font></b></p>
						<div id="div1" style="color:red"></div>
					</td></tr>
					<tr><td align="center"><p><b><font color="red">Field :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="field" id="field1" placeholder="Enter your field"  onblur="allLetter(document.register1.field)" /></p></font></b></p>
					<div id="div3" style="color:red"></div>
					</td></tr>
					<tr><td align="center"><p><b><font color="red">Username : <input type="text" name="username" id="username1" placeholder="Enter a username"/></p></font></b></p>
					<div id="div2" style="color:red"></div>
					</td></tr>
					<tr><td align="center"><p><b><font color="red">Password :&nbsp; <input type="password" name="password" id="password1" placeholder="Enter a password"/></p></font></b></p>
					<div id="div7" style="color:red"></div>
					</td></tr>
					<tr><td align="center"><p><b><font color="red">Mobile No : <input type="text" id="mobile1" name="mobile" placeholder="Enter youe mobile number"  onblur="allNumber(document.register1.mobile)"/></p></font></b></p>
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
		

		<?php
			mysql_connect('localhost','root','');
			mysql_select_db('mu_demo');

			if(isset($_POST['submit']))
			{
				$name=$_POST['name'];
				$field=$_POST['field'];
				$username=$_POST['username'];
				$password=$_POST['password'];
				$mobile=$_POST['mobile'];
				$address=$_POST['address'];


					$query=mysql_query("select * from doctor where username='$username'");
					if(mysql_num_rows($query)>0)
					{
						echo "<script>alert('Username exists! Try another username.')</script>";
					}
					else
					{
						$sql=(mysql_query("insert into doctor(id,name,field,username,password,mobile,address) values('','$name','$field','$username','$password','$mobile','$address')"));
						echo "<script>alert('Successfully registered!')</script>";
					}
				
			}

			mysql_close();
		?>

	</body>
</html>