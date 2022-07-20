<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title></title>
    </head>
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
	<br>
      <div class="container-fluid m-1">
            <div class="row">
                <div class="col-md-12">
                    <h1>Customer Information</h1><hr>
                </div>

            </div>
            <div class="row p-3">
                <div class="col-md-8">
                    <div class="p-3 card shadow text-center">

                        <div class="form-row">
                            <div class="col-md-4 ">
                                <img src="./images/logo.jpg" style="width: 100px;height: 100px;" class="img-fluid rounded-circle border border-green" />

                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Skyzer Account No.</label>
                                <input type="text" class="form-control" placeholder="Skyzer Account No." required />

                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Registration No.</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Registration No." required/>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label>Customer name</label>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Group Name</label>
                                <input type="text" class="form-control" placeholder="Group Name" required />

                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Company Legal Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Company Legal Name" required/>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label>Trading Name</label>
                                <input type="text" class="form-control" placeholder="Trading Name" required>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Industry Name</label>
                                <input type="text" class="form-control" placeholder="Industry Name" required>

                            </div>
                        </div>
                    </div>
                    <div class="p-3 card shadow text-center">
                        <h5>Contact Details</h5>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label>Contact</label>
                                <input type="text" class="form-control" placeholder="Contact" required />

                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Position</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Position" required/>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Phone</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Phone" required/>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label>Email</label>
                                <input type="text" class="form-control" placeholder="Email" required />

                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Website</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Website" required/>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label>Postal Address</label>
                                <textarea class="form-control" rows="3" required >Postal Address</textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label>Physical Address</label>
                                <textarea class="form-control" rows="1" required >Physical Address</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 card shadow text-center">
                        <h5>Essentials</h5>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label>Requirements</label>
                                <input type="text" class="form-control" placeholder="Requirements" required />

                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Contactless</label>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input " checked="true">
                                    <label class="form-check-label">Enabled</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label>Merchant Refund Card</label>
                                <input type="text" class="form-control" placeholder="Merchant Refund Card" required />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label>Acquirer</label>
                                <input type="text" class="form-control" placeholder="Acquirer" required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 card shadow text-center">
                        <h5>Terminal Status</h5>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label>Lanes Qts</label>
                                <input type="text" class="form-control" placeholder="Lanes Qts" required>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label>SIM Qts</label>
                                <input type="text" class="form-control" placeholder="SIM Qts" required>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label>Lanes Cost</label>
                                <input type="text" class="form-control" placeholder="Lanes Cost" required>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label>SIM Cost</label>
                                <input type="text" class="form-control" placeholder="SIM Cost" required>
                            </div>
                        </div>

                    </div>
                    <div class="p-3 card shadow text-center">
                        <h5>Terms</h5>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label>Commecement Date</label>
                                <input type="text" class="form-control" placeholder="Commecement Date" required>
                            </div>   
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label>Rental Terms</label>
                                <input type="text" class="form-control" placeholder="Rental Terms" required>
                            </div>   
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label>Date of First Payment</label>
                                <input type="text" class="form-control" placeholder="Date of First Payment" required>
                            </div>   
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label>Date of Last Payment</label>
                                <input type="text" class="form-control" placeholder="Date of Last Payment" required>
                            </div>   
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label>Terminal Hardware</label>
                                <input type="text" class="form-control" placeholder="Terminal Hardware" required>
                            </div>   
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label>Service Level Agreement</label>
                                <input type="text" class="form-control" placeholder="Service Level Agreement" required>
                            </div>   
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label>Point of Sale Solution</label>
                                <input type="text" class="form-control" placeholder="Point of Sale Solution" required>
                            </div>   
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label>Data Center Access</label>
                                <input type="text" class="form-control" placeholder="Data Center Access" required>
                            </div>   
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label>Cost Involved for Data Access</label>
                                <input type="text" class="form-control" placeholder="Cost Involved for Data Access" required>
                            </div>   
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label>Payment Method</label>
                                <input type="text" class="form-control" placeholder="Payment Method" required>
                            </div>   
                        </div>
                        <button class="btn btn-primary col-md-4" type="submit">Add Info</button>
                    </div>
                </div>
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
	
	
	
        

    </div>
</div>
</body>
</html>
