
<html>
<head>
	<title>view</title>
<style type="text/css">
table{
	width: 1345px;
	border: 1px;
	border-radius: 2px;
	
}
th{
	height: 40px;
	background: #003366;
	font-size: 20px;
	color: #fff;
}
td{
	text-align: center;
	height: 40px;
	background: #fff;
	font-size: 20px;
	color: #003366;
}

</style>
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
</head>
	<body>
<?php
session_start();
mysql_connect('localhost','root','');
			mysql_select_db('mu_demo');


$sql="select * from appointment";
$result = mysql_query( $sql );

      
      
?>
<table  style="font-size : 12px" class="gridtable">
	<tr>
		<th>patient_name</th>
		<th>doctor_name</th>
		<th>appointment_date</th>
		<th>queue_no</th>
		
		</tr>
		<?php

		while ($row = mysql_fetch_array($result)) 
		{
			echo "<tr>
            <td>$row[patient_name]</td>
            <td>$row[doctor_name]</td>
            <td>$row[appointment_date]</td>
            <td>$row[queue_no]</td>
            
            </tr>";
		
		}
		
		?>

</table>
</body>
</html>

