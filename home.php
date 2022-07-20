<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

   

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <img src="./images/Skyzer.jpg" style="width: 30%";><br><br>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        
      </nav>
<br>
      <div class="container-fluid">
       <div class="container border border-info"><br/>
		
		
		

            <div class="row justify-content-center">
                            <div class="col-md-4 col-md-offset-4">
                                <center><h1>Sign In</h1><hr/></center>
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
                                      <input type="submit" name="submit" value="Sign In" class="btn float-right login_btn btn-primary" text="center">
									 </div>
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
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

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
                        header('Location:customer_view.php');
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

