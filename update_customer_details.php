<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php include_once 'header.php'; ?>
    <?php 
        require_once 'connection.php';
        //fetch record to update
	if (isset($_GET['edit'])) {
		$Customer_id = $_GET['edit'];
		
		$rec = mysqli_query($conn, "SELECT * FROM tbl_customer_info WHERE Customer_id=$Customer_id");
                $row=mysqli_fetch_array($rec);
	}
    ?>
        <?php if (isset($_SESSION['msg'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['msg']; 
			unset($_SESSION['msg']);
		?>
	</div>
        <?php endif ?>
        <br/>
        <div class="container border border-info"><br/>
            <div class="row justify-content-center">
                            <div class="col-md-4 col-md-offset-4">
                                <h1>Update Details</h1><hr/>
                                  <form method="post" action="update_user_details_database.php">
                                      <input type="hidden" name="rid" value="<?php echo $rid; ?>">
                                      <div class="form-group">
                                          <label for="email">Site Name</label>
                                          <input type="text" name="username" value="<?php echo $row['Site_name'] ;?>" class="form-control" placeholder="Site Name">
                                      </div>
                                      <div class="form-group">
                                          <label for="password">Address</label>
                                          <input type="text" name="Address" value="<?php echo $row['Address'] ;?>" class="form-control" placeholder="Address">
                                      </div>
                                      <div class="form-group">
                                          <label for="password">No. of Terms</label>
                                          <input type="text" name="No_of_terms" value="<?php echo $row['No_of_terms'] ;?>" class="form-control" placeholder="No. of Terms">
                                      </div>
                                      <div class="form-group">
                                          <label for="password">Sim Card Quantity</label>
                                          <input type="text" name="Sim_card_qty" value="<?php echo $row['Sim_card_qty'] ;?>" class="form-control" placeholder="Sim Card Quantity">
                                      </div>
                                      <div class="form-group">
                                          <label for="password">Merchant No.</label>
                                          <input type="text" name="Merchant_no" value="<?php echo $row['Merchant_no'] ;?>" class="form-control" placeholder="Merchant No.">
                                      </div>
                                      <div class="form-group">
                                          <label for="password">Terminal Id</label>
                                          <input type="text" name="Terminal_id" value="<?php echo $row['Terminal_id'] ;?>" class="form-control" placeholder="Terminal Id">
                                      </div>
                                      <div class="form-group">
                                          <label for="password">Serial No.</label>
                                          <input type="text" name="Serial_no" value="<?php echo $row['Serial_no'] ;?>" class="form-control" placeholder="Serial No.">
                                      </div>
                                      <div class="form-group">
                                          <label for="password">Sim Card Serial</label>
                                          <input type="text" name="Sim_card_serial" value="<?php echo $row['Sim_card_serial'] ;?>" class="form-control" placeholder="Sim Card Serial">
                                      </div>
                                      <div class="form-group">
                                          <label for="password">Terminal Pricing</label>
                                          <input type="text" name="Terminal_pricing" value="<?php echo $row['Terminal_pricing'] ;?>" class="form-control" placeholder="Terminal Pricing">
                                      </div>
                                      <div class="form-group">
                                          <label for="password">Terminal GST</label>
                                          <input type="text" name="Terminal_gst" value="<?php echo $row['Terminal_gst'] ;?>" class="form-control" placeholder="Terminal GST">
                                      </div>
                                      <div class="form-group">
                                          <label for="password">Sim Card Pricing</label>
                                          <input type="text" name="Sim_card_pricing" value="<?php echo $row['Sim_card_pricing'] ;?>" class="form-control" placeholder="Sim Card Pricing">
                                      </div>
                                      <div class="form-group">
                                          <label for="password">Sim Card GST</label>
                                          <input type="text" name="Sim_card_gst" value="<?php echo $row['Sim_card_gst'] ;?>" class="form-control" placeholder="Sim Card GST">
                                      </div>
                                      <div class="form-group">
                                          <label for="password">Total</label>
                                          <input type="text" name="Total" value="<?php echo $row['Total'] ;?>" class="form-control" placeholder="Total">
                                      </div>
                                      <input type="submit" name="submit" value="Update" class="btn float-right login_btn btn-primary">
                                  </form>

                            </div>
                          </div>
            <br/>
            
	</div>
</div>
</body>
</html>
