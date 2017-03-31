    <?php
      $id=$_GET["txtvar"];
$connstr=  mysqli_connect("localhost", "root", "","payroll") or die("could not connect server");
        $error="";
    $sql="select * from  employee where id=$id";    
$result=mysqli_query($connstr,$sql);
$row=mysqli_fetch_array($result,MYSQLI_BOTH);
    if($row['id']!=null)
    {
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
    else
  echo "Employee not found.";          
?>