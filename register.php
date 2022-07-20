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
    <?php include_once 'header.php'; ?>
    
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
                                      <div class="form-group">
                                          <label for="password">Re-enter Password</label>
                                          <input type="password" name="cpwd" class="form-control" placeholder="password">
                                      </div>
                                      <input type="submit" name="submit" value="Sign Up" class="btn float-right login_btn btn-primary">
                                  </form>

                            </div>
                          </div>
            <br/>
            <div class="row justify-content-center">
                            <div class="card-footer">
				<div class="d-flex justify-content-center links">
                                    Already have an account?<a href="login.php">Sign In</a>
				</div>
			</div>
	    </div><br/>
	</div>
</div>
</body>
</html>
<?php

if(isset($_REQUEST['submit']))
{
    $nameError ="";
    if(isset($_POST['username']) && isset($_POST['pwd']) && isset($_POST['cpwd']))
    {
        if($_POST['pwd']==$_POST['cpwd'])
        {
            require_once 'connection.php';

            $uname = $_POST['username'];
            $pwd = $_POST['pwd'];
            
            $sql = "insert into register(User_name,Password) values('$uname','$pwd')";

            if ($conn->query($sql) == TRUE) {
                        echo '<script type="text/javascript">';
                        echo 'alert("New record created successfully")';
                        echo'</script>';
                        header('location:login.php');
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        $conn->close();
        }
        else {
            echo '<script type="text/javascript">';
                echo 'alert("Password And Comfirm Password Are Not Match")';
                echo'</script>';
        }
    }
    else
    {
        echo '<script type="text/javascript">';
                echo 'alert("Empty Record")';
                echo'</script>';
    }
     ob_flush();
}
?>
   

