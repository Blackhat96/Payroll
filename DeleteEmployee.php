<html>
<head>
<title>Delete Employee </title>
</head>
    <body bgcolor="#E6E6FA">
 <h3 align="right"><a href="HomePage.php">Home</a></h3> 
 <div align="center"> 
        <form action="" method="post">
<fieldset style="width:60%;">
<legend><h1 style="color:blue;">Delete an Employee account</h1></legend>
    <br>
    <b> Enter the Employee Id to be deleted.</b>
 <Input type="number" align="center" name="Id" ></Input><br>
    <br>
 <Input type="submit" style="width:60;height:40;" name="submit" value="Delete" ></Input>
    </fieldset>
</form>
        </div>
  <div style="font-size:30px; color:#cc0000; margin-top:10px">

<?php
$id="";
      $error="";
      if(isset($_REQUEST["submit"]))
{
 @ $db=new mysqli("localhost","root","","payroll");
     
          $conn=mysqli_connect("localhost", "root", "","payroll") or die("could not connect server");
  
        if(!$conn ) {
               die('Could not connect: ' . mysql_error());
            }
				
            $id= $_POST['Id'];
           // echo $id;
          $sql = "DELETE FROM employee WHERE id = $id";
        $result=$db->query($sql);    
            if(! $result ) {
                die('Could not delete data: ' .mysql_error());
            }
          if ($db->affected_rows!=0)
echo 'Employee with Id '.$id.' deleted successfully';
          else
                die('Employee id not found.' .mysql_error());
           $db->close();
              }
      ?>
      </body>
</html>