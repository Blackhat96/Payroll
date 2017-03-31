<html>
<head>
<title>Display Employee Details</title>
</head>  <body bgcolor="#E6E6FA">
 <h3 align="right"><a href="HomePage.php">Home</a></h3> 
    
    <?php
$connstr=  mysqli_connect("localhost", "root", "","payroll") or die("could not connect server");
$sql="select * from  employee";    
$result=mysqli_query($connstr,$sql) or die(mysql_error($link));
    if(!$result || $result=='0')
{
die(mysql_error($connstr));
}
else{
    echo "<div align=\"center\">";
echo "<fieldset style=\"width:65%\">";
echo "<legend>"."<h1 style=color:blue;>Employee Details</h1>"."</legend>";
echo "<table  cellspacing=\"0\" cellpadding=\"0\" border=\"2\">";
echo "<tr>";
echo "<td>"."<h2 style=\"color:darkmagenta;\">Emp_id</h2>"."</td>";
echo "<td>"."<h2 style=\"color:darkmagenta;\">Name</h2>"."</td>";
echo "<td>"."<h2 style=\"color:darkmagenta;\">DOB</h2>"."</td>";
echo "<td>"."<h2 style=\"color:darkmagenta;\">Contact</h2>"."</td>";
echo "<td>"."<h2 style=\"color:darkmagenta;\">Email</h2>"."</td>";
echo "<td>"."<h2 style=\"color:darkmagenta;\">No. of Days worked</h2>"."</td>";
echo "<td>"."<h2 style=\"color:darkmagenta;\">Salary</h2>"."</td>";
echo "</tr>";
while($row=mysqli_fetch_array($result,MYSQLI_BOTH))
{
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['dob']."</td>";
echo "<td>".$row['contact']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['no_of_days_worked']."</td>";
$sal=$row['no_of_days_worked']*700;
echo "<td>".$sal."</td>";   
    echo "</tr>";
}
}
?>
</html>