<?php 
	session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial scale=1.0">
    <title>RECEPTION LOGIN</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<style type="text/css">
body{
  background-image: url("m1.jpg");
}
</style>
<div class="row outterWrapper">
        <div class="columns large-18" style="background-image: url('head1.png');
            background-color: #215179;">
            <div class="row header-row" style="padding-bottom: 10px;">
                <img id="imgheaderBG" src="12.jpg" height="100" width="100"/>
                
            </div>
            
        </div>
<body >
   
  

	<body>
  
    <form method="POST">
		<center>
      <table align="top" width="50%" border="3" border color="goldenrod">
			<tr>
        <td align="center"><h3><font color="red">Reception Login Here :</font></h3></td></tr>
			<p>
				
					<tr><td align="center"><p><b><font color="red">Username : <input type="text" name="username" /></font></b></p></td></tr>
					<tr><td align="center"><p><b><font color="red">Password : <input type="password" name="password" /></font></b></p></td></tr>
					<tr><td align="center"><p><input type="submit" name="submit" value=" Please Login" size="8" style="font-size:12pt;color:white;background-color:midnightblue;border:2px solid #191970;padding:3px" /></p></td></tr>
				
			</p>
      </table>
			
			
    
		</center>
    <marquee ><font color="red" size="8">Please Co-operate with us for better services.</font></marquee>
</form>
		<?php
			mysql_connect('localhost','root','');
			mysql_select_db('mu_demo');

			if(isset($_POST['submit'])) 
			{
				$username=$_POST['username'];
				$password=$_POST['password'];

				if($username!=''&&$password!='')
        		{
            		$query=mysql_query("select * from admin where username='$username' and password='$password'");

            		if(mysql_num_rows($query)>0)
           			{
                		$_SESSION['username'] = $username;
                		while($res=mysql_fetch_array($query))
                		{
                    		
                    		$username=$res['username'];
                    		
                		}              
                			$count=mysql_num_rows($query);
                			if($count==1)
                			{
                 
                  	 			
                  	 			$_SESSION['username']=$username;
                  	 			

                 				echo "<script>window.open('sms1.php','_self');</script>";
                 			}
                 		}
            		else
            		{
                		echo "<script>alert('Incorrrect username or password!!!')</script>";
            		}
        		}
        		else
        		{
            		echo "<script>alert('Fill all the fields!!!!!')</script>";   
        		}
        	}
		?>

	</body>
</html>