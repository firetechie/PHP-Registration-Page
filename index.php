<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title> Registration Page</title>
</head>

<script type="text/javascript">
  function validateForm()
  {
    var a=document.forms["reg"]["fname"].value;
    var b=document.forms["reg"]["lname"].value;
	var c=document.forms["reg"]["gender"].value;	
    var d=document.forms["reg"]["address"].value;
    var e=document.forms["reg"]["contact"].value;
	var regx=/[7-9]\d{9}/;
    var f=document.forms["reg"]["email"].value;
	var filter=/^\w+[\+\.\w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)$/i;
    var g=document.forms["reg"]["file"].value;
    var h=document.forms["reg"]["username"].value;
    var i=document.forms["reg"]["password"].value;
	var j=document.forms["reg"]["repassword"].value;
    if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f=="") && (g==null || g=="") && (h==null || h=="") && (i==null || i=="") && (j==null || j==""))
    {
      alert("All Field must be filled out");
      return false;
    }
    if (a==null || a=="")
    {
      alert("First name must be filled out");
      return false;
    }
    if (b==null || b=="")
    {
      alert("Last name must be filled out");
      return false;
    }
    if (c==null || c=="")
    {
      alert("Gender must be filled out");
      return false;
    }
    if (d==null || d=="")
    {
      alert("address must be filled out");
      return false;
    }
	 if (e==null || e=="")
    {
     alert("Contact Number must be filled out");
      return false;
    }
	else if(!regx.test(e)){
	alert("Invalid Contact Number, Please enter valid one"); 
	return false;  
	}  
    if (f==null || f=="")
    {
     alert("Email must be filled out");
      return false;
    }
	else if(!filter.test(f)){
	alert("Invalid Email Id, Please enter valid one"); 
	return false;
	}  
	
    if (g==null || g=="")
    {
      alert("file must be filled out");
      return false;
    }
   if (h==null || h=="")
    {
     alert("Username can't be blank");
      return false;
    }
    if (i==null || i=="" || i.length<5)
    {
      alert("Password must be filled out with  at least 5 characters long");
      return false;
    }
	if(j==i){  
    return true;  
	}
    else if (j==null || j=="")
    {
     alert("Re-Password can't be blank");
      return false;
    }
	else{  
	alert("password must be same!");  
	return false;  
	}  
  }
</script>

<body>
<form name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post">
  <table width="400" border="1" align="center" cellpadding="8" cellspacing="0">
    <tr>
      <td colspan="2">
        <div align="center">
          <?php 
          if (!isset($_GET['remarks']))
          {
            echo '<font size="10" color="red"><i><b>Register Here</b></i></font>';
          }
          if (isset($_GET['remarks']) && $_GET['remarks']=='success') 
	  {
            echo '<h1 style="color:green;">Registration Success</h1>';
          }
          ?>  
        </div></td>
      </tr>
      <tr>
        <td width="135"><div align="right"><font size="5" color="blue"><b>First Name:</b></div></td>
        <td width="191"><input type="text" size="25" placeholder="First Name" name="fname" /></td>
      </tr>  
      <tr>
        <td><div align="right"><font size="5" color="blue"><b>Last Name:</b></div></td>
        <td><input type="text" size="25" placeholder="Last Name" name="lname" /></td>
      </tr>
      <tr>
        <td><div align="right"><font size="5" color="blue"><b>Gender:</b></div></td>
        <td><input type="text" size="25" placeholder="Gender" name="gender" /></td>
      </tr>
      <tr>
        <td><div align="right"><font size="5" color="blue"><b>Address:</b></div></td>
        <td><input type="text" size="25" placeholder="Address" name="address" /></td>
      </tr>
      <tr>
        <td><div align="right"><font size="5" color="blue"><b>Contact No.:</b></div></td>
        <td><input type="text" size="25" placeholder="Contact Number" name="contact" /></td>
		<label id="lbltext" style="color:red;visibility:hidden">Invalid</label>
      </tr>
      <tr>
        <td><div align="right"><font size="5" color="blue"><b>Email Id:</b></div></td>
        <td><input type="text" size="25" placeholder="Email Id" name="email" /></td>
      </tr>
      <tr>
        <td><div align="right"><font size="5" color="blue"><b>File:</b></div></td>
	<td><input type="file" name="file"/></td>
      </tr>
      <tr>
        <td><div align="right"><font size="5" color="blue"><b>Username:</b></div></td>
        <td><input type="text" size="25" placeholder="Username" name="username" /></td>
      </tr>
      <tr>
        <td><div align="right"><font size="5" color="blue"><b>Password:</b></div></td>
        <td><input type="text" size="25" placeholder="Password" name="password" /></td>
      </tr>
	   <tr>
        <td><div align="right"><font size="5" color="blue"><b>Re-Password:</b></div></td>
        <td><input type="text" size="25" placeholder="Re-Password" name="repassword" /></td>
      </tr>
	  </table>
      <tr><center>
        <td><div align="center" style="margin:15px;"></div></td>
        <td><input name="submit" type="submit" value="Submit"/></td></center>
      </tr>
  </form>
</body>

</html>