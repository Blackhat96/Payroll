<?php
$connstr=  mysqli_connect("localhost", "root", "","payroll") or die("could not connect server");
$error=""; 
$days_wrkd="";
if(isset($_REQUEST["submit"]))
{
$days_wrkd=$_POST['days_worked'];
    $id=$_POST['Id'];
        if(!$days_wrkd||!$id)
    {
         $error="You have not entered all the values.";
    }
    else
    {
      
@ $db=new mysqli("localhost","root","","payroll");
$connstr=mysqli_connect("localhost", "root", "","payroll") or die("could not connect server");

        if(mysqli_connect_errno())
{
    echo "Error:cannot connect to Database";
}   
  
if ($stmt = $db->prepare("UPDATE employee SET no_of_days_worked = ? WHERE id=?"))
{
$stmt->bind_param('ii',$days_wrkd,$id);
$stmt->execute();
$stmt->close();
}
if ($db->affected_rows!=0)
$error='Salary of employee '.$id.' updated Successfully';
else
    $error="Employee Id not found.";
        $db->close();        
}
}
?>

<html>
<head>
<title>Update salary of Employee</title>
</head>
      <body bgcolor="#E6E6FA">
         <h3 align="right"><a href="HomePage.php">Home</a></h3>
         <div align="center"> 
<form action="" method="post">
<fieldset style="width:60%;">
<legend><h1 style="color:blue;">Update Employee salary</h1></legend>
    <table border="1" cellspacing="5" cellpadding="5" bgcolor="E6E6FA">
<tr>
<td>
    <h2 style="color:darkmagenta;">
Enter the employee Id:<Input type="number" name="Id">
        </h2></Input>
</td>   
<tr>
<td> <h2 style="color:darkmagenta;">
    No. of Days worked:<Input type="number" name="days_worked"></Input></h2>
</td>
</table>
    <br>
<Input type="submit" align="center" name="submit" value="Update"></Input>
    </fieldset>

             </form>
  <div style="font-size:30px; color:#cc0000; margin-top:10px">
<?php echo $error; ?>
    </div>
</html>