<?php 
	session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial scale=1.0">
    <title>DOCTOR LOGIN</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

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
    <form method="POST">
    <center>
      <table align="top" width="50%" border="3" border color="goldenrod">
      <tr>
        <td align="center"><h3><font color="red">Doctor Login </font></h3></td></tr>
      <p>
        
          <tr><td align="center"><p><b><font color="red">Username : <input type="text" name="username" /></font></b></p></td></tr>
          <tr><td align="center"><p><b><font color="red">Password : <input type="password" name="password" /></font></b></p></td></tr>
          <tr><td align="center"><p><input type="submit" name="submit" value=" Login" size="8" style="font-size:12pt;color:white;background-color:midnightblue;border:2px solid #191970;padding:3px" /></p></td></tr>
        
      </p>
      </table>
      <p>
        Not registered?</p>
        <p><a href="newdoctor.php"><input type="button" name="submit" value=" Register Here" size="8" style="font-size:12pt;color:white;background-color:midnightblue;border:2px solid #191970;padding:3px" /></a></p>
      
	

		<?php
			mysql_connect('localhost','root','');
			mysql_select_db('mu_demo');

			if(isset($_POST['submit'])) 
			{
				$username=$_POST['username'];
				$password=$_POST['password'];

				if($username!=''&&$password!='')
        		{
            		$query=mysql_query("select * from doctor where username='$username' and password='$password'");

            		if(mysql_num_rows($query)>0)
           			{
                		$_SESSION['username'] = $username;
                		while($res=mysql_fetch_array($query))
                		{
                    		$name=$res['name'];
                    		$username=$res['username'];
                    		$mobile=$res['mobile'];
                    		$address=$res['address'];
                    		$docid=$res['id'];
                		}              
                			$count=mysql_num_rows($query);
                			if($count==1)
                			{
                 
                  	 			$_SESSION['name']=$name;
                  	 			$_SESSION['username']=$username;
                  	 			$_SESSION['mobile']=$mobile;
                  	 			$_SESSION['address']=$address;
                  	 			$_SESSION['id']=$docid;

                 				echo "<script>window.open('welcomedoctor.php','_self');</script>";
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