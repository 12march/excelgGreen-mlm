<?php 

    include 'controllers/con_spooled_request.php'; 
    include 'header.php'; 

?>

        <!-- ALERT  -->
        <?php echo Message(); 
            echo SuccessMessage();
        ?>

    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">View Spooled Request</h4><br>

                            <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Transaction Amount</th>
                                    <th>Account Number</th>
                                    <th>Batch Number</th>
                                    <th>Spooled Date</th>
                                    <th>Spooled By</th>
                                    <th>Action</th>
                                </tr>
                                </thead>


                                <tbody>
                                    
                                    <?php
                                      $obj = new Con_spooled_request();
                                      echo  $obj->spooled_request();
                                   ?>

                                
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div><!-- container -->


    </div> <!-- Page content Wrapper -->

</div> <!-- content -->


        
<?php include('footer.php'); ?>