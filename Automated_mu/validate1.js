function Validate()
{
    result=true;
    if(document.getElementById("name1").value.length==0)
    {
        result=false;
        document.getElementById("div1").innerHTML="Cannot be blank!";
        //document.getElementById("name").style="background-color:red";
    }
    else
    {
        document.getElementById("name1").style="background-color:lightgreen";
        document.getElementById("div1").innerHTML="";
    }

    if(document.getElementById("field1").value.length==0)
    {
        result=false;
        document.getElementById("div3").innerHTML="Cannot be blank!";
        //document.getElementById("name").style="background-color:red";
    }
    else
    {
        document.getElementById("field1").style="background-color:lightgreen";
        document.getElementById("div3").innerHTML="";
    }

    if(document.getElementById("username1").value.length==0)
    {
        result=false;
        document.getElementById("div2").innerHTML="Cannot be blank!";
        //document.getElementById("username").style="background-color:red";
    }
    else
    {
        document.getElementById("username1").style="background-color:lightgreen";
        document.getElementById("div2").innerHTML="";
    }
    
    if(document.getElementById("password1").value.length==0)
    {
        result=false;
        document.getElementById("div7").innerHTML="Cannot be blank!";
        //document.getElementById("name").style="background-color:red";
    }
    else
    {
        document.getElementById("password1").style="background-color:lightgreen";
        document.getElementById("div7").innerHTML="";
    }

    if(document.getElementById("mobile1").value.length==0)
    {
        result=false;
        document.getElementById("div6").innerHTML="Cannot be blank!";
        //document.getElementById("name").style="background-color:red";
    }
    else
    {
        document.getElementById("mobile1").style="background-color:lightgreen";
        document.getElementById("div6").innerHTML="";
    }
    
    
    if(document.getElementById("address1").value.length==0)
    {
        result=false;
        document.getElementById("div12").innerHTML="Cannot be blank!";
        //document.getElementById("name").style="background-color:red";
    }
    else
    {
        document.getElementById("address1").style="background-color:lightgreen";
        document.getElementById("div12").innerHTML="";
    }
    return result;
}

/*------------------Email validation----------------*/

/*function emailValidation()
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
}*/

/*----------Existing email checking-----------*/

/*function CheckEmail(str)
            {
                obj = new XMLHttpRequest();
                obj.open("get","checkemail.php?eid="+str,true);
                obj.send();
                obj.onreadystatechange=function()
                {
                    if(obj.readyState==4&&obj.status==200)
                    {
                        document.getElementById("eml").innerHTML=obj.responseText;
                    }
                }
            }

*/
/*---------All letter--------------*/

function allLetter(inputtxt)
    {
        var letters = /^[A-Za-z ]+$/;
        if(inputtxt.value.match(letters)){
            return true;
        }
        else{
            alert('Please input alphabet characters only');
            document.getElementById("name1").focus();
            return false;
        }
    }

/*------------------All Number--------------------*/

function allNumber(inputtxt)
    {
        var letters = /^[0-9]+$/;
        if(inputtxt.value.match(letters)){
            return true;
        }
        else{
            alert('Please input numbers only');
            document.getElementById("mobile1").focus();
            return false;
        }
    }

/*-------------------Password validation-------------------*/

/*function checkPassword()
{
    if(document.getElementById("password").value!=document.getElementById("confirmpassword").value)
                {
                    alert("Your passwords do not match please try again");
                    document.getElementById("confrimpassword").focus();
                    return false;
                    
                }
}


*/