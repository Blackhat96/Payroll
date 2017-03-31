    <?php
    $error=""; 
    $name="";$dob="";$num="";$email="";$days_wrkd="";
    if(isset($_REQUEST["submit"]))
    {
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $num=$_POST['num'];
    $email=$_POST['email'];
    $days_wrkd=$_POST['days_worked'];
            if(!$name ||!$dob|| !$num|| !$email|| !$days_wrkd)
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
    $query="insert into employee values('".null."','".$name."','".$dob."','".$num."','".$email."','".$days_wrkd."','".null."')";
    $result=$db->query($query);
    if ($result)
    $error="Employee added successfully.";   
    $db->close();
    }
    }
    ?>

    <html>
    <head>
        <title>Add Employee</title>
    </head>
         <body bgcolor="#E6E6FA">
             <h3 align="right"><a href="HomePage.php">Home</a></h3>
             <div align="center"> 
             <form action="" method="post">
    <fieldset style="width:60%;">
    <legend><h1 style="color:blue;">Add an new Employee</h1></legend>
        <table border="3" cellspacing="5" cellpadding="5" bgcolor="E6E6FA">
    <tr>
    <td >
        <h2 style="color:darkmagenta;">Name:<Input type="text" name="name"></Input>
            </h2>
    </td>
    <tr>
    <td>
        <h2 style="color:darkmagenta;">DOB:<Input type="date" name="dob"></Input></h2>
    </td>
    <tr>
    <td>
        <h2 style="color:darkmagenta;">contact:<Input type="number" name="num"></Input></h2>
    </td>
    <tr>
    <td>
        <h2 style="color:darkmagenta;">Email:<Input type="text" name="email"></Input></h2>
    </td>
    <tr>
    <td>
    <h2 style="color:darkmagenta;">
        No. of Days worked:<Input type="number" name="days_worked"></Input></h2>
    </td>
    </table>
        <br>
        <b><Input type="submit" style="width:60;height:40;"  name="submit" value="Create" ></Input></b>
    </div>
        </fieldset>
             </form>
             <div style="font-size:30px; color:#cc0000; margin-top:10px">
    <?php echo $error; ?>
        </div>
        </body>
    </html>