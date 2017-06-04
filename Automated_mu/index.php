<html>
<head>
	<script type="text/javascript">
	function getState(countryId) { 
    var strURL="findState.php?country="+countryId;
  var req = getXMLHTTP();
  if (req) {
   req.onreadystatechange = function() {
    if (req.readyState == 4) {
     // only if "OK"
     if (req.status == 200) {      
      document.getElementById('statediv').innerHTML=req.responseText;
      document.getElementById('citydiv').innerHTML='<select name="city">'+
      '<option>Select City</option>'+'</select>';      
     } else {
      alert("Problem while using XMLHTTP:\n" + req.statusText);
     }
    }    
   }   
   req.open("GET", strURL, true);
   req.send(null);
  }  
 }
</script>
<script type="text/javascript">
function getCity(countryId,stateId) {  
  var strURL="findCity.php?country="+countryId+"&state="+stateId;
  var req = getXMLHTTP();
  
  if (req) {
   req.onreadystatechange = function() {
    if (req.readyState == 4) {
     // only if "OK"
     if (req.status == 200) {      
      document.getElementById('citydiv').innerHTML=req.responseText;      
     } else {
      alert("Problem while using XMLHTTP:\n" + req.statusText);
     }
    }    
   }   
   req.open("GET", strURL, true);
   req.send(null);
  }
    
 }
</script>
	<title>re</title>
</head>
<body>
<form method="post" action="" name="form1">
<center>
<table width="45%"  cellspacing="0" cellpadding="0">
  <tr>
      <td width="75">Country</td>
      <td width="50">:</td>
      <td  width="150">
   <select name="country" onChange="getState(this.value)">
   <option value="">Select Country</option>
   <?php while ($row=mysql_fetch_array($result)) { ?>
   <option value=<?php echo $row['id']?>><?php echo $row['country']?>                         </option>
   <?php } ?>
  </select>
      </td>
</tr>
<tr style="">
    <td>State</td>
    <td width="50">:</td>
    <td >
 <div id="statediv">
       <select name="state" >
  <option>Select State</option>
        </select>
 </div>
    </td>
</tr>
<tr>
    <td>City</td>
    <td width="50">:</td>
    <td>
 <div id="citydiv">
          <select name="city">
             <option>Select City</option>
           </select>
         </div>
    </td>
  </tr>
  </table>
</center>
</form>


</body>
</html>