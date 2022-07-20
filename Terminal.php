<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        <title></title>
    </head>
	
	
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <body>
	<div class="d-flex" id="wrapper">

    <?php include_once('sidebar.php'); ?>

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <img src="./images/Skyzer.jpg" style="width: 30%";><br><br>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      </nav>



            
         <div class="container-fluid m-1">
              
                          
           
		<div class="card-header"
			style="color: white; background-color:#b81b44;">
			<h5 style="color: white;">Terminal</h5>
		</div>
            <div class="row">   
			<div class="col-md-6">
                <label for="inputEmail4" class="form-label">Customer Name:</label>
                <select class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">Chemist warehouse</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
                </select></div>
            <div class="col-md-6">
                 <label for="inputEmail4" class="form-label">Site Name:</label>
                <select class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">Chemist warehouse Westgate</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
            </div>
            
            
            <div class="row g-3">
  <div class="col-sm">
     <label for="inputEmail4" class="form-label">Terminal Id:</label>
    <input type="text" class="form-control" placeholder="" aria-label="City">
  </div>
  <div class="col-sm">
      <label for="inputEmail4" class="form-label">Merchant Id:</label>
    <input type="text" class="form-control" placeholder="" aria-label="State">
  </div>
  <div class="col-sm">
      <label for="inputEmail4" class="form-label">TMS Check In</label>
    <input type="text" class="form-control" placeholder="" aria-label="Zip">
  </div>
</div>
            
            <div class="row g-3">
                <div class="col-sm">
                     <label for="inputEmail4" class="form-label">Keys</label>
    <input type="text" class="form-control" placeholder="" aria-label="State">
  </div>
  <div class="col-sm-7">
       <label for="inputEmail4" class="form-label">Software</label>
    <input type="text" class="form-control" placeholder="" aria-label="City">
  </div>
  
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Lease Corporate</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">

    <label for="inputEmail4" class="form-label">Number Of Terms</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  
  <button class="btn btn-primary col-md-4" type="submit" style="background-color:#b81b44;">Add Info</button>
</div>
            </div>
            
         </div>
		 </div>
	</div>
     

        <?php
        // put your code here
        
        ?>
    </body>
</html>
