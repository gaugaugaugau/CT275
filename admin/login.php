<?php 
    include("../config/config.php");
    ob_start();
    session_start();
    if(isset($_POST["login"])){
            // echo "<pre>";
            // print_r($_POST);
            // die;
           
        $username = $_POST['Uname'];
        $password = $_POST['Pass'];
        $sql = "SELECT * from login where UserName ='$username' and PassWord ='$password' ";
        $result = mysqli_query($connect,$sql);
        $row = mysqli_fetch_array($result);
        if (!empty($row) && count($row)){
            $_SESSION["login"] = $row;
            header("location:trang_admin.php");
        }
        else header("location:trang_admin.php");
    }
?>
<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" type="text/css" href="css/style.css">    
</head>    
<body>    
    <h2>Login Page</h2><br>    
    <div class="login">    
    <form id="login" method="post">    
        <label><b>User Name     
        </b>    
        </label>    
        <input type="text" name="Uname" id="Uname" placeholder="Username">    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" name="Pass" id="Pass" placeholder="Password">    
        <br><br>    
        <input type="submit" name="login" id="log" value="Login">       
        <br><br>       
    </form>     
</div>    
</body>    
</html>     
<style type="text/css">
body  
{  
    margin: 0;  
    padding: 0;  
    background-color:#6abadeba;  
    font-family: 'Arial';  
}  
.login{  
        width: 382px;  
        overflow: hidden;  
        margin: auto;  
        margin: 20 0 0 450px;  
        padding: 80px;  
        background: #23463f;  
        border-radius: 15px ;  
          
} 
.login input{
   outline: none;
} 
h2{  
    text-align: center;  
    color: #277582;  
    padding: 20px;  
}  
label{  
    color: #08ffd1;  
    font-size: 17px;  
}  
#Uname{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
}  
#Pass{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
      
}  
#log{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;  
    color: blue;  
  
  
}  
span{  
    color: white;  
    font-size: 17px;  
}  
a{  
    float: right;  
    background-color: grey;  
</style>