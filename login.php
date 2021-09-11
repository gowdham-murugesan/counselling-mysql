<?php
include "config.php";

if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "SELECT count(*) as cntUser from users where email='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        $sql_query1 = "SELECT * from users where email='".$uname."' and password='".$password."'";
        $result1 = mysqli_query($con,$sql_query1);
        $row1 = mysqli_fetch_array($result1);
        $email = $row1['email'];
        $name = $row1['name'];

        if($count > 0 && $row1['roles'] == 'superadmin'){
            $_SESSION['super'] = $uname;
            $_SESSION['uname'] = $uname;
            header('Location: phpmailer-login.php?email='.$email.'&name='.$name);
        }
        else if($count > 0 && $row1['roles'] == 'admin'){
            $_SESSION['uname'] = $uname;
            header('Location: phpmailer-login.php?email='.$email.'&name='.$name);
        }
        else if($count > 0 && $row1['roles'] != 'admin'){
            echo "You are not admin, you will be shortly converted into admin";
        }
        else{
            echo "Invalid username and password";
        }

    }

}
?>
<html>
   
   <head>
      <title>Login Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
input[type=text], input[type=password], input[type=email], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div.container {
  text-align: center;
}

div#div_login {
  text-align: center;
  width: 50%;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin: 0 auto;
}

@media (max-width: 768px) {
    div#div_login {
        width: 75%;
    }
}
</style>
<body>
	
   <div class="container">
    <form method="post" action="">
        <div id="div_login">
            <h1>Login</h1>
                <input type="email" class="textbox" id="txt_uname" name="txt_uname" placeholder="Email" /> <br><br>
                <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/> <br><br>
                <input type="submit" value="Login" name="but_submit" id="but_submit" />
            <p>Not registered yet? <a href="signup.php" style="text-decoration: none;">Signup</a></p>
        </div>
    </form>
</div>

   </body>
</html>