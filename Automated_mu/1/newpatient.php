<<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial scale=1.0">
    <title>DOCTOR LOGIN</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

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
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
      <li>
      	<a href="#" >CONTACT US</a>
      	      </li>
        <LI>
        	<a href="#" >ABOUT US</a>
        </LI>
       <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LOGIN <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Student.php">STUDENT</a></li>-->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  </div>
</nav>
</nav>
	

	<body>
    <a href="home.php"><img src="21.jpg" height="100" width="100"></a>
		
		<center>
			
			 <form method="POST">
		<center>
      <table align="top" width="50%" border="3" border color="goldenrod">
			<tr>
        <td align="center"><h3><font color="red">Patient Registration  </font></h3></td></tr>
			<p>
				
					<tr><td align="center"><p><b><font color="red">Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" placeholder="Enter your name" /></p></font></b></p></td></tr>
										<tr><td align="center"><p><b><font color="red">Username : <input type="text" name="username" placeholder="Enter a username"/></p></font></b></p></td></tr>
					<tr><td align="center"><p><b><font color="red">Password :&nbsp; <input type="password" name="password" placeholder="Enter a password"/></p></font></b></p></td></tr>
					<tr><td align="center"><p><b><font color="red">Mobile No : <input type="text" name="mobile" placeholder="Enter your mobile number"/></p></font></b></p></td></tr>
					<tr><td align="center"><p><b><font color="red">Address :&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="address" placeholder="Enter your address"/></p></font></b></p></td></tr>
										<tr><td align="center"><p><input type="submit" name="submit" value="Register" /></p></td></tr>
				
			</p>
      </table>
			<p>
				
    
		</center>
    <marquee ><font color="red" size="8">Please Co-operate with us for better services.</font></marquee>
</form>

		<?php
			mysql_connect('localhost','root','123');
			mysql_select_db('mu_demo');

			if(isset($_POST['submit']))
			{
				$name=$_POST['name'];
				$username=$_POST['username'];
				$password=$_POST['password'];
				$mobile=$_POST['mobile'];
				$address=$_POST['address'];

				$userid=rand(1000,10000);

				$query1=mysql_query("select id from patient where id='$userid'");
				if(mysql_num_rows($query1)>0)
				{
					$useid=rand(1000,10000);
				}
				else
				{
					$query=mysql_query("select * from patient where username='$username'");
					if(mysql_num_rows($query)>0)
					{
						echo "<script>alert('Username exists! Try another username.')</script>";
					}
					else
					{
						$sql=(mysql_query("insert into patient(id,name,username,password,phone,address) values('$userid','$name','$username','$password','$mobile','$address')"));
						echo "<script>alert('Successfully registered! & your reference number is: $userid')</script>";
					}
				}
			}

			mysql_close();
		?>

	</body>
</html>