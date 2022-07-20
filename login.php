<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
        
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        
</head>
<body>
    <?php include_once 'home.php'; ?>
    
        <br/>
        <div class="container border border-info"><br/>
		
		
		

            <div class="row justify-content-center">
                            <div class="col-md-4 col-md-offset-4">
                                <h1>Sign In</h1><hr/>
                                  <form action="" method="post">
                                      <div class="form-group">
                                          <label for="email">E-mail</label>
                                          <input type="text" name="username" class="form-control" placeholder="username">
                                      </div>
                                      <div class="form-group">
                                          <label for="password">Password</label>
                                          <input type="password" name="pwd" class="form-control" placeholder="password">
                                      </div>
                                      
                                      <input type="submit" name="submit" value="Sign In" class="btn float-right login_btn btn-primary">
                                  </form>

                            </div>
                          </div>
            <br/>
            <div class="row justify-content-center">
                            <div class="card-footer">
				<div class="d-flex justify-content-center links">
                                    Don't have an account?<a href="register.php">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
	    </div><br/>
	</div>
</body>

</html>
<?php 

include_once 'connection.php';
if(isset($_POST['submit'])){
    $uname=$_POST['username'];
    $pwd=$_POST['pwd'];
    
    if($uname!="" && $pwd!=""){
        require_once 'connection.php';
        $fetchdataquery="select User_name,Password from register";
        $result= mysqli_query($conn, $fetchdataquery);

        try{
            if(mysqli_num_rows($result)>0)
            {
                while($row = mysqli_fetch_array($result))
                {
                    if($uname==$row["User_name"] && $pwd==$row["Password"])
                    {
                        header('Location:after_login_home.php');
                        $_SESSION['uname']=$uname;
                        $_SESSION['pwd']=$pwd;
                        //exit();
                    }
                }
            }
            
        }
        catch(Exception $e)
        {
            ?>
            <script type="text/javascript">
                alert("Plase enter valid Credentials.");
            </script>
            <?php 
        }       
    }
    else{
        ?>
        <script type="text/javascript">
            alert("Please enter username and password.");
        </script>
        <?php 
    }
}

?>