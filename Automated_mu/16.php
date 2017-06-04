<html><head>
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$ (document).ready(function() {
 $('#feedback').load('ch1.php').show();
 $('#username_input').keyup(function() {
   $.post('ch1.php', { username: form1.username.value }, function(result) {
    $('#feedback').html(result).show();
   });
 });
});

</script>
<meta charset=utf-8 />

<script type="text/javascript">
function con(){
      var Phone= document.getElementById("Phone").value;
              var re = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/;
      if (re.test(Phone));
      else {
        alert("Contact No. has not been entered correctly")
        form1.Phone.focus()
        }   
        }

</script>
        <script>

            function validation()
            {
                /*if(document.form1.txtName.value==""||document.for.txtRoll.value==""||document.form1.txtMobile.value==""||document.form1.txtEmail.value==""||document.form1.txtPass.value==""||document.form1.txtDob.value==""||document.form1.txtAge.value==""||document.form1.txtAdd.value==""||document.form1.txtTen.value==""||document.form1.txtTwelve.value==""||document.form1.txtProg.value==""||document.form1.txtDept.value==""||document.form1.txtSem.value=="")
                    {
                        alert("Please complete the whole form");
                        return false;
                    }*/
                if(document.form1.FName.value=="")
                {
                    alert("Please enter your first name");
                    document.form1.FName.focus();
                    return false;
                }
                if(document.form1.LName.value=="")
                {
                    alert("Please enter your last name");
                    document.form1.LName.focus();
                    return false;
                }
                if(document.form1.DOB.value=="")
                {
                    alert("Please enter your Date of birth");
                    document.form1.DOB.focus();
                    return false;
                }
                if(document.form1.Age.value=="")
                {
                    alert("Please enter your age");
                    document.form1.Age.focus();
                    return false;
                }
                if(document.form1.Address.value=="")
                {
                    alert("Please enter your address");
                    document.form1.Address.focus();
                    return false;
                }
                if(document.form1.Phone.value=="")
                {
                    alert("Please enter your mobile number");
                    document.form1.Phone.focus();
                    return false;
                }
                if(document.form1.email.value=="")
                {
                    alert("Please enter your email id");
                    document.form1.email.focus();
                    return false;
                }
                if(document.form1.username.value=="")
                {
                    alert("Please enter a username");
                    document.form1.username.focus();
                    return false;
                }
                if(document.form1.password.value=="")
                {
                    alert("Please enter a password");
                    document.form1.password.focus();
                    return false;
                }
                
                if(document.form1.Department.value=="")
                {
                    alert("Please enter your department");
                    document.form1.Department.focus();
                    return false;
                }
                if(document.form1.Roll.value=="")
                {
                    alert("Please enter your roll");
                    document.form1.Roll.focus();
                    return false;
                }
                if(document.form1.Nationality.value=="")
                {
                    alert("Please enter your Nationality");
                    document.form1.Nationality.focus();
                    return false;
                }

                if(document.form1.Gender.value=="")
                {
                    alert("Please select gender");
                    document.form1.Gender.focus();
                    return false;
                } 
                /*if(document.form1.txtDay.value=="")
                {
                    alert("Please enter your birthdate");
                    document.form1.txtDay.focus();
                    return false;
                }
                if(document.form1.txtMonth.value=="")
                {
                    alert("Please enter your birth-month");
                    document.form1.txtMonth.focus();
                    return false;
                }
                if(document.form1.txtYear.value=="")
                {
                    alert("Please enter your birthyear");
                    document.form1.txtYear.focus();
                    return false;
                }*/
                
                if(document.form1.image.value=="")
                {
                    alert("Please enter your image");
                    document.form1.image.focus();
                    return false;
                }
                if(document.form1.JoiningNIT.value=="")
                {
                    alert("Please enter your admission");
                    document.form1.JoiningNIT.focus();
                    return false;
                }

               

            }

        </script>

        <script type="text/javascript"> 

 

function generateAge(){
    var x=document.forms["form1"]["DOB"].value;
    var date1=new Date(x);
    var date=new Date();
    var y=date.getFullYear()-date1.getFullYear();
    var m=date.getMonth()-date1.getMonth();
    var d=date.getDay()-date1.getDay();
    y=y.toString();
    m=m.toString();
    d=d.toString();
    document.forms["form1"]["Age"].value=y.concat("Y").concat(m).concat("M").concat(d).concat("D");
}

function showMessage() {
if (document.getElementById("dob").value != "") {
alert ("Invalid date format or impossible year/month/day of birth - please re-enter as nowyearYY-MM-DD");
document.getElementById("dob").value = "";
document.getElementById("dob").focus();
}
}

function daysInMonth(month,year) {  // months are 1-12
var dd = new Date(year, month, 0);
return dd.getDate();
} 
</script>
<script type="text/javascript">
function inroll(){
        var year=document.getElementById("j_year").value;
        var dept=document.getElementById("dept").value
        document.getElementById("roll").value=year.concat("/",dept,"/");
        }
</script>
<script type="text/javascript">


    function emailValidation()
    {
        var emailID = document.getElementById("email").value;
                    atpos = emailID.indexOf("@");
                    dotpos = emailID.lastIndexOf(".");
                    var flag=false;
                    if (atpos < 1 || ( dotpos - atpos < 2 )) 
                    {
                        alert("Please enter correct email ID")
                        document.getElementById("email").focus() ;
                        return flag;
                    }
    }

</script>
<script type="text/javascript">
    function validateusername(){
        if(document.form1.username.value=="")
                {
                    alert("Please enter a username");
                    document.form1.username.focus();
                    return false;
                }
    }
</script>
<script type="text/javascript">
    function validatepassword(){
        if(document.form1.password.value=="")
                {
                    alert("Please enter a password");
                    document.form1.password.focus();
                    return false;
                }
    }
</script>
<script type="text/javascript">
    function validateFName() {
        if(document.form1.FName.value=="")
                {
                    alert("Please enter your first name");
                    document.form1.FName.focus();
                    return false;
                }
    }
</script>
<script type="text/javascript">
    function validateLName() {
        if(document.form1.LName.value=="")
                {
                    alert("Please enter your last name");
                    document.form1.LName.focus();
                    return false;
                }
    }
</script>
<script type="text/javascript">
    function validateDOB(){
        if(document.form1.DOB.value=="")
                {
                    alert("Please enter your date of birth");
                    document.form1.DOB.focus();
                    return false;
                }
    }
</script>
<script type="text/javascript">
    function validateGender(){
        if(document.form1.Gender.value=="")
                {
                    alert("Please select gender");
                    document.form1.txtGender.focus();
                    return false;
                }  
    }
</script>
<script type="text/javascript">
    function validateNationality(){
        if(document.form1.Nationality.value=="")
                {
                    alert("Please enter your Nationality");
                    document.form1.Nationality.focus();
                    return false;
                }
    }
</script>

</script>
<script type="text/javascript">
    function validateAddress(){
        if(document.form1.Address.value=="")
                {
                    alert("Please enter your Address");
                    document.form1.Address.focus();
                    return false;
                }
    }
</script>

<script type="text/javascript">
    function validatePhone(){
        if(document.form1.Phone.value=="")
                {
                    alert("Please enter your Phone no.");
                    document.form1.Phone.focus();
                    return false;
                }
    }
</script>

<script type="text/javascript">
    function validateemail(){
        if(document.form1.email.value=="")
                {
                    alert("Please enter your Email id");
                    document.form1.email.focus();
                    return false;
                }
    }
</script>
<script type="text/javascript">
    function validateimage(){
        if(document.form1.image.value=="")
                {
                    alert("Please enter your image");
                    document.form1.image.focus();
                    return false;
                }
    }

<script type="text/javascript">
    function validateJoiningNIT(){
        if(document.form1.JoiningNIT.value=="")
                {
                    alert("Please enter your admission");
                    document.form1.JoiningNIT.focus();
                    return false;
                }
    }
</script>
<script type="text/javascript">
    function validateDepartment(){
        if(document.form1.Department.value=="")
                {
                    alert("Please enter your Department");
                    document.form1.Department.focus();
                    return false;
                }
    }
</script>
<script type="text/javascript">
    function validateRoll(){
        if(document.form1.Roll.value=="")
                {
                    alert("Please enter your Department");
                    document.form1.Roll.focus();
                    return false;
                }
    }
</script>
<script type="text/javascript">
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(150);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<script type="text/javascript">
function emailValidation()
    {
        var emailID = document.getElementById("email").value;
                    atpos = emailID.indexOf("@");
                    dotpos = emailID.lastIndexOf(".");
                    var flag=false;
                    if (atpos < 1 || ( dotpos - atpos < 2 )) 
                    {
                        alert("Please enter correct email ID")
                        document.getElementById("email").focus() ;
                        return flag;
                    }
    }
</script>
<script type="text/javascript">
function con(){
      var Phone= document.getElementById("Phone").value;
              var re = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/;
      if (re.test(Phone));
      else {
        alert("Contact No. has not been entered correctly")
        register.Phone.focus()
        }   
        }

</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script language="javascript" type="text/javascript">
            function dynamicdropdown(listindex)
            {
                document.getElementById("subcategory").length = 0;
                switch (listindex)
                {
                    case "India" :
                        document.getElementById("subcategory").options[0]=new Option("Please select State","");
                        document.getElementById("subcategory").options[1]=new Option("Westbengal","Westbengal");
                        document.getElementById("subcategory").options[2]=new Option("UttarPradesh","UttarPradesh");
                        document.getElementById("subcategory").options[3]=new Option("Madhya Pradesh","Madhya Pradesh");
                        document.getElementById("subcategory").options[4]=new Option("Andhra Pradesh","Andhra Pradesh");
                        document.getElementById("subcategory").options[5]=new Option("Assam","Assam");
                        document.getElementById("subcategory").options[6]=new Option("Hariyana","Hariyana");
                        document.getElementById("subcategory").options[7]=new Option("Odissa","Odisa");
                        document.getElementById("subcategory").options[8]=new Option("Gujrat","Gujrat");
                        document.getElementById("subcategory").options[9]=new Option("Bihar","Bihar");
                        document.getElementById("subcategory").options[10]=new Option("Punjab","Punjab");
                        document.getElementById("subcategory").options[11]=new Option("Maharashtra","Maharashtra");
                        document.getElementById("subcategory").options[12]=new Option("Kerala","Kerala");
                        document.getElementById("subcategory").options[13]=new Option("J&K","J&K");
                        document.getElementById("subcategory").options[14]=new Option("Himachal Pradesh","Himachal Pradesh");
                        document.getElementById("subcategory").options[15]=new Option("Jharkhand","Jharkhand");
                        document.getElementById("subcategory").options[16]=new Option("Tamil Nadu","Tamil Nadu");
                        document.getElementById("subcategory").options[17]=new Option("Karnataka","Karnataka");
                        document.getElementById("subcategory").options[18]=new Option("Rajasthan","Rajasthan");
                        document.getElementById("subcategory").options[19]=new Option("Arunachal Pradesh","Arunachal Pradesh");
                        break;
                    
                    case "London" :
                        document.getElementById("subcategory").options[0]=new Option("Please select State","");
                        document.getElementById("subcategory").options[1]=new Option("Manchester","Manchester");
                        document.getElementById("subcategory").options[2]=new Option("Edgebaston","Edgbaston");
                        break;
                    case "America" :
                        document.getElementById("subcategory").options[0]=new Option("Please select State","");
                        document.getElementById("subcategory").options[1]=new Option("Washington-DC","Washington-DC");
                        document.getElementById("subcategory").options[2]=new Option("New-York","New-York");
                        document.getElementById("subcategory").options[3]=new Option("Sanfrancisco","Sanfrancisco");
                        document.getElementById("subcategory").options[4]=new Option("Los-Angelis","Los-Angelis");
                        document.getElementById("subcategory").options[5]=new Option("Chicago","Chicago");
                        break;
                    case "Japan" :
                        document.getElementById("subcategory").options[0]=new Option("Please select State","");
                        document.getElementById("subcategory").options[1]=new Option("Tokyo","Tokyo");
                        break;
                }
                return true;
            }
       </script>
<style>
body {
    background-image: url("view1.jpg");
}
</style>
<style type="text/css">
#feedback{
    line-height: 0px;
}
</style>

</head>
<body bgcolor="white" link="black" alink="black">
<table cellpadding="10" bgcolor="transparent" align="center" width="80%" border="3" border color="goldenrod">
<tr>
<td>
<IMG SRC="NIT.jpg" align="left" width="100" height="100"/>
<IMG SRC="NIT.jpg" align="right" width="100" height="100"/>
<style type="text/css">
img{
border: 5px solid #00bfff;
border-radius: 10px;
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
}


</style>
<h1 align="middle"><b><font color="midnightblue">NATIONAL INSTITUTE OF TECHNOLOGY</font></h1>
<h2 align="middle"><b><font color="midnightblue">REGISTRATION FORM</font></h2>
<marquee ALIGN="CENTER" width=100% bgcolor="transparent"><font color="midnightblue">****NIT DURGAPUR WELCOMES YOU****</font></marquee>

</td>
</tr>
</table>

<table width="80%" bgcolor="#00bfff" align="center" bordercolor="white" border="3" cellpadding="10">
<tr>
<td>
<form name="form1" action ="process.php" onsubmit ="return validation()" method="post">
<fieldset width="80%">
<br/><br/>

<legend align="center"> Personal Details </legend></br>
</br>
<label for="Username"> Username  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :&nbsp&nbsp</ br>
<input id="username_input" name="username" size="18"   type="text"/></label></br>&nbsp <div id="feedback"></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</br></br></br>
<label for="student name"> Password &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :&nbsp&nbsp</ br>
<input id="nametext" name="password" size="18" min="6" max="18"  type="password" onclick="validateusername()"/></label></br></br></br>
<label for="student name"> First Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :&nbsp&nbsp</ br>
<input id="nametext" name="FName" size="18" pattern= "[a-z A-Z]*"  type="text" onclick="validatepassword()"/></label>&nbsp (Name should include only characters)</br></br></br>
<label for="student name"> Last Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :&nbsp&nbsp</ br>
<input id="nametext" name="LName" size="18" pattern= "[A-Z a-z]*"  type="text" onclick="validateFName()"/></label>&nbsp (Name should include only characters)</br></br></br>

<label>Date of Birth &nbsp&nbsp&nbsp&nbsp&nbsp  :&nbsp&nbsp&nbsp </ br>
<input id="dob" type="date" name="DOB" size="10" onBlur="generateAge()" onclick="validateLName()"/></label></br></br></br>

                <p>
                Age &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp
                
                <input id="age" type="text" name="Age" size="12" class="t1" readonly="readonly">
            </p><br/>
<label for="gender">Gender &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :&nbsp&nbsp</ br>
<input type="radio" name="Gender" value="Male" onclick="validateDOB()"/>Male <input type="radio" name="Gender" value="Male" />Female</label></br></br></br>



<div class="category_div" id="category_div">Nationality &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp
            <select name="Nationality" class="required-entry" id="category" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);">
                <option value="">Select Country</option>
                <option value="India">India</option>
                <option value="London">London</option>
                <option value="America">America</option>
                <option value="Japan">Japan</option>
            </select>
        </div>
    </br></br>
        <div class="sub_category_div" id="sub_category_div">State &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp
            <script type="text/javascript" language="JavaScript">
                document.write('<select name="subcategory" id="subcategory"><option value="">Select State</select>')
            </script>
            <noscript>
                <select name="subcategory" id="subcategory" >
                    <option value="">Select State</option>
                </select>
            </noscript>
        </div>
</br></br></br>
<label for="Nationality" onclick="validateNationality()"> Hobbies &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :&nbsp&nbsp
<input type="checkbox" name="Hobbies[]" value="Playing"> Playing
<input type="checkbox" name="Hobbies[]" value="Painting"> Painting
<input type="checkbox" name="Hobbies[]" value="Singing"> Singing
<input type="checkbox" name="Hobbies[]" value="Dancing"> Dancing
<input type="checkbox" name="Hobbies[]" value="Reading"> Reading
<input type="checkbox" name="Hobbies[]" value="Others"> Others
<br />
<div id="div1"></div>
</label><br /> <br />
<label>Curr. Address &nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp</ br>
    <textarea name="Address" rows="4" cols="50" ></textarea>
</label>

</br></br></br>




<label> Phone Number &nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp
<input id="Phone"  type="text" name="Phone" size ="10" min="10" max="10" pattern="[0-9]*" onBlur="con()" onclick="con()"/>
</label></br></br></br>
<label> Email Adress &nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp
<input id="email" type="text" name="email" size ="20" onBlur="emailValidation()"  onclick="validatePhone()"/></label></br></br></br>

<label>Upload photo &nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp </label>
<input type='file' name='image' onchange="readURL(this);" onclick="validateemail()" />
   
</label><div align="left"></br><img id="blah" src="img.jpeg" height="150" width="150" alt="your image" /></div> </br></br>

</fieldset></br>
</td>
</tr>
</table>

<table width="80%" bgcolor="#00bfff" align="center" cellpadding="10" bordercolor="white" border="3">
<tr>
<td>
<fieldset width="80%">
<legend align="center"> Institutional Details </legend></br>
<p>Year of Joining NIT &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp
<select name="JoiningNIT" id="j_year" onchange="inroll()" onclick="validateimage()">
        <option selected="selected" value="10">Select Year &nbsp&nbsp&nbsp&nbsp</option>
        <option value="11">2011</option>
        <option value="12">2012</option>
        <option value="13">2013</option>
        <option value="14">2014</option>
        <option value="15">2015</option>
</select>
<br><br>
</p>
<p>Department &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp
<select name="Department" id="dept" onchange="inroll()" onclick="validateJoiningNIT()" >
        <option selected="selected" value="IT">Select Department</option>
        <option value="IT">Information technology</option>
        <option value="BT">Biotechnology</option>
        <option value="CSE">Computer Science & Tech.</option>
        <option value="ME">Mechanical Engg.</option>
        <option value="MME">Metallurgical and Materials Engg.</option>
        <option value="CE">Civil Engg.</option>
        <option value="CHE">Chemical Engg.</option>
</select>
</p>
<br/>

<p>Roll No &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp
<input type="text" name="Roll" id="roll" onclick="validateDepartment()" value="yy/Dep/"/ ></p>
<br>




</fieldset>
</td>
</tr>
</table>
<table width="80%" bgcolor="#00bfff" align="center" cellpadding="5" border="4" bordercolor="white">
<tr>
<td>

<p align="center" fontcolor="blue"><input type="checkbox" name="check box" required="required" />I have agreed with all the terms and conditions and finally want to  submit my form.</p>
<p align="center"><input type="submit" name="Final Submit" value="Final Submit" size="8"bgcolor="blue" onClick="alertName();"style="font-size:12pt;color:white;background-color:midnightblue;border:2px solid #191970;padding:3px" /> 
<p align="center">Edited by Group 14</p></br>
</td>
</tr>
</form>

</body>
</html>
