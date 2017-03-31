<!DOCTYPE html>
<html>
<head>
<title>Search an Employee</title>
</head> 
    <body bgcolor="#E6E6FA">
<script language="javascript" type="text/javascript">
function ReadTextValue()
{
var txtname=document.getElementById("txtname").value;
var xmlhttp=new XMLHttpRequest();
if(window.XMLHttpRequest)
{
xmlhttp=new XMLHttpRequest();
}
else
{
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if(xmlhttp.readyState==4 && xmlhttp.status==200)
document.getElementById("responsetxt").innerHTML=xmlhttp.responseText;
}
xmlhttp.open("GET","Search.php? txtvar="+txtname,true);
xmlhttp.send();
}
</script> 
        <h3 align="right"><a href="HomePage.php">Home</a></h3> 
 <div align="center"> 
<form>
    <fieldset style="width:60%;">
<legend><h1 style="color:blue;">Employee Details</h1></legend>
    <br>
       <b>Enter employee id be be searched:
           <input type="number" id="txtname"></b>
<input type="button" id="btnsubmit" value="click here" onClick="ReadTextValue();">
    </fieldset>
</form>
        </div>
<p  id="responsetxt"></p>

    </body>
</html>