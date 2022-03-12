<?php

include("config.php");
$no=0;
function sno()
{
   static $i=1;
   $i++;
   $no=$i;
}
echo sno();

if($_SERVER['REQUEST_METHOD']=="POST")
{
$n=$_POST['Name'];
$deg=$_POST['Designation'];
$dep=$_POST['Department'];
$mob=$_POST['mbno'];
$eid=$_POST['emailid'];
$macipad=$_POST['macipadn'];
$modipad=$_POST['modipadn'];
$maclap=$_POST['maclap'];
$modlap=$_POST['modlap'];
$macmob=$_POST['macmob'];
$modmob=$_POST['modmob'];
$macdesk=$_POST['macdesk'];
$moddesk=$_POST['moddesk'];
   $sql="insert into collectmac values(DEFAULT,'$n','$deg','$dep',$mob,'$eid','$macipad','$modipad','$maclap','$modlap','$macmob','$modmob','$macdesk','$moddesk')";
   
   $res=mysqli_query($con,$sql);
   
   if($res)
   {
       echo $res. "<script>alert('Record Inserted');</script>";
   }
   else
   {
    echo "record not inserted";
	mysqli_error($con);
   }
   
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Fill the MAC Address</title>
<link href="CSS/style.css" rel="stylesheet" type="text/css" /> 
<link rel="image/iite-logo.png" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="JS/hide.js"></script>

<style type="text/css">
<!--
body,td,th {
	color: #009999;
}
.style2 {font-size: 36px}
-->
</style></head>

<body>

<div class="head" >
<div class="imagehead">
<img src="image/iite-logo.png"  /> </div>
<div align="center" class="namehead style2"> 
 Indian Institute Of Teacher Education</div> 
</div>

<div class="container">

<div class="footer">
Fill MAC Address Form
</div>


<center>
<form method="post" action="#" id="frm" name="macform">
  Please Fill the Form 
<label> 
<div align="center">
  <table width="555" >
    <tr>
      <td width="122">Name * </td>
	  </tr><tr>
      <td colspan="2" ><label for="textfield"></label>
        <input pattern="[a-zA-z]*" oninvalid="setCustomValidity('Please enter only alphabates')"type="text" name="Name" id="t1"  required/></td>
    </tr>
    <tr>
      <td>Designation * </td>
	  </tr><tr>
      <td colspan="2"><input pattern="[a-zA-z]*" oninvalid="setCustomValidity('Please enter only alphabates')" type="text" name="Designation" id="t2" required/></td>
    </tr>
	
    <tr>
      <td>Department * </td></tr>
	  <tr>
      <td colspan="2"><input pattern="[a-zA-z]*" oninvalid="setCustomValidity('Please enter only alphabates')" type="text" name="Department" id="t3"/></td>
    </tr>
    <tr>
      <td>Mobile Number * </td></tr><tr>
      <td colspan="2"><input type="number" name="mbno" required id="t4" maxlength="10" /></td>
    </tr>
    <tr>
      <td>Email Id * </td></tr><tr>
      <td colspan="2"><input type="email" name="emailid" required id="t5"/></td>
    </tr>
    <tr>
      <td>Device Name </td>
      <td width="173" id="macadd">MAC Address   </td>
      <td width="238" id="modno">Model No </td>
    </tr>
    <tr>
      <td><label>
        <input type="checkbox" name="checkbox" value="ipad" id="checkipad"  />
        IPAD</label></td>
      <td><input type="text" id="macipad", name="macipadn"  / ></td>
      <td><input type="text" id="modipad", name="modipadn" /></td>
    </tr>
    <tr>
      <td><label>
        <input type="checkbox" id="checklaptop" value="laptop" />
        Laptop</label></td>
      <td><input type="text" id="maclaptop", name="maclap" /></td>
      <td><input type="text" id="modlaptop", name="modlap"/></td>
    </tr>
    <tr>
      <td><label>
        <input type="checkbox" id="checkmob" value="mobile" />
        Mobile</label></td>
      <td><input type="text" id="macmobile", name="macmob" /></td>
      <td><input type="text" id="modmobile" , name="modmob"/></td>
    </tr>
    <tr>
      <td><label>
        <input type="checkbox" id="checkdesktop" value="Desktop" />
        Desktop</label></td>
      <td><input type="text" id="macdesktop", name="macdesk"/></td>
      <td><input type="text" id="moddesktop", name="moddesk"/></td>
    </tr>
    <tr>
      <td colspan="3"><label>

          <div align="left">
            <input type="submit" name="Submit" value="Send" id="b1" />
          </div>
      </label></td></tr>
  </table>
</div>
</label>

</form>
</center>

<div class="footer">
Developed by IT Department
</div>
</div>
</body>
</html>
