<?php 
    $connstr=  mysqli_connect("localhost", "root", "","payroll") or die("could not connect server");
    session_start();
    $error="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $myusername=mysqli_real_escape_string($connstr,$_POST['txtusername']);
        $mypassword=mysqli_real_escape_string($connstr,$_POST['txtpwd']);
        //prepare sql statements
        $sql="select id from admin where name='$myusername' and password='$mypassword'";
        $result=mysqli_query($connstr,$sql);

        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count=mysqli_num_rows($result);

        if($count==1)
        {
            header("location:Homepage.php");
        }
        else
        {
                $error="Your Login name or Password is invalid";       

         }
    }

    ?>
    <html>
        <head> 
            <title>Login Page</title>
        </head>
        <body bgcolor="#E6E6FA">
            <div align="center">
            <div style="width:300px;border:solid 1px #333333;" align="left">
                <div style="padding:4px;"><b>Login</b></div>
                <div style="margin:30px">
                <form action="" method="POST">
                    <label>UserName:</label>
                    <input type="text" name="txtusername" required="1"/><br></br>
                    <label>Password:</label>
                    <input type="password" name="txtpwd" required="1"/><br></br>
                    <input type="Submit" name="btnlogin" value="LOGIN"/><br></br>              
                </form>
                <div style="font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error;?></div>
            </div>
        </div>
            </div>
        </body>
    </html>