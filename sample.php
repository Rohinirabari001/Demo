<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"></head>
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



            
       
              
                          
	
<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Customer <b>Details</b></h2></div>
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                    </div>
                </div>
            </div>
            
            
            <?php
                                    require_once 'connection.php';

                                    $sql = "SELECT * FROM tbl_customer_info";
                                    $result = $conn->query($sql);
                                    ?>
                                        
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Customer Serial No.</th>
                                                <th>Site Name</th>
                                                <th>Address</th>
                                                <th>No. of Terms</th>
                                                <th>Sim Card Quantity</th>
                                                <th>Merchant No.</th>
                                                <th>Terminal Id</th>
                                                <th>Serial No.</th>
                                                <th>Sim Card Serial</th>
                                                <th>Terminal Pricing</th>
                                                <th>Terminal GST</th>
                                                <th>Sim Card Pricing</th>
                                                <th>Sim Card GST</th>
                                                <th>Total</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead> 			
                                            <?php 
                                                if ($result->num_rows > 0) {
                                                    // output data of each row
                                                while($row = $result->fetch_assoc()) {?>
                                            <tbody>
                                                    <tr>
                                                        <td><?php echo $row['Customer_id'] ;?></td>
                                                         <td><?php echo $row['Site_name'] ;?></td>
                                                          <td><?php echo $row['Address'] ;?></td>
                                                          <td><?php echo $row['No_of_terms'] ;?></td>
                                                           <td><?php echo $row['Sim_card_qty'] ;?></td>
                                                           <td><?php echo $row['Merchant_no'] ;?></td>
                                                           <td><?php echo $row['Terminal_id'] ;?></td>
                                                           <td><?php echo $row['Serial_no'] ;?></td>
                                                           <td><?php echo $row['Sim_card_serial'] ;?></td>
                                                           <td><?php echo $row['Terminal_pricing'] ;?></td>
                                                           <td><?php echo $row['Terminal_gst'] ;?></td>
                                                           <td><?php echo $row['Sim_card_pricing'] ;?></td>
                                                           <td><?php echo $row['Sim_card_gst'] ;?></td>
                                                           <td><?php echo $row['Total'] ;?></td>
                                                           <td>
                                                                <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                                                <a class="edit" title="Edit" data-toggle="tooltip" href="update_customer_details.php?edit=<?php echo $row['Customer_id']; ?>"><i class="material-icons">&#xE254;</i></a>
                                                                <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                                            </td>
                                                    </tr>
                                                    </tbody>
                                               <?php 

                                                }
                                                } else {
                                                    echo "0 results";
                                                }
                                                $conn->close();
                                            ?>
                                        </table>
        </div>
    </div>
	</div>
	
	</div>
</div>
     
</body>
</html>