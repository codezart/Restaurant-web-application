<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Coupons</title>
    <?php include("styles.php") ?>
</head>
<body id="page-top">
    <div id="wrapper">
    <?php include("nav.php"); ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
            <?php include("header.php"); ?>
                <div class="container-fluid" style="padding-right: 50px;padding-left: 50px;">
                    <h3 class="text-dark mb-4">Coupons</h3>
                    <div class="card shadow" style="margin: 0px;margin-bottom: 30px;">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Add New Coupon</p>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="add_coupon.php">
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="city"><strong>Coupon</strong><br></label>
                                            <input class="form-control" type="text" name="coupon" placeholder="Enter coupon" required> 
                                        </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="country"><strong>From</strong></label><input class="form-control" type="date" name="start_date" required></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="country"><strong>To</strong></label><input class="form-control" type="date" name="end_date" required></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group"><button class="btn btn-primary btn-sm" type="submit" name="add_coupon">Generate</button></div>
                            </form>
                            
                            <!--Error and success message-->
                            <?php
                                if(isset($_SESSION["success"])){
                            ?>
                                <div class="alert alert-success ">
                                            <strong>Success!</strong> <?php echo $_SESSION["success"]; unset($_SESSION["success"]);?>
                                        </div>
                            <?php
                                } 
                                if(isset($_SESSION["error"])){
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Warning!</strong> <?php echo $_SESSION["error"]; unset($_SESSION["error"]); ?>
                                </div>
                            <?php
                                }
                            ?>
                            <!--/ End error and success message-->

                        </div>
                    </div>
                    <!------------------------Start coupon list box--------------------------------------->
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Coupons</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm"><option value="10" selected="">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>&nbsp;</label></div>
                                </div>
                                
                                <div class="col-md-4">
                                <!--Start edit coupon message-->
                                <?php 
                                    if(isset($_SESSION["updated"])){
                                ?>
                                        <div class="alert alert-success">
                                            <strong>Success!</strong> <?php echo $_SESSION["updated"]; unset($_SESSION["updated"]);?>
                                        </div>
                                <?php
                                    } else if(isset($_SESSION["deleted"])){
                                        ?>
                                        <div class="alert alert-danger">
                                            <strong>Success!</strong> <?php echo $_SESSION["deleted"]; unset($_SESSION["deleted"]); ?>
                                        </div>
                                <?php
                                    }
                                ?>
                                <!--/End edit coupon message-->
                                </div>
                                <div class="col-md-4">
                                    <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table dataTable my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th style="width: 388px;">Coupon</th>
                                            <th>From</th>
                                            <th>To</to>
                                            <th>Edit</ht>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    <!--Start populating coupon from database-->
                                    <?php 
                                            include("database_connection.php");
                                            $query = "SELECT * FROM coupon";
                                            $query_result = mysqli_query($connection, $query);
                                            if($query_result && mysqli_num_rows($query_result) > 0){
                                                while($row = mysqli_fetch_assoc($query_result)){
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row["coupon"] ?></td>
                                                        <td><?php echo $row["startDate"] ?></td>
                                                        <td><?php echo $row["endDate"] ?></td>
                                                        <td>
                                                            <form method="POST" action="edit_coupon.php"> 
                                                                <input name="id" type="hidden" value="<?php echo $row["id"] ?>">
                                                                <input name="coupon" type="hidden" value="<?php echo $row["coupon"] ?>">
                                                                <input name="start_date" type="hidden" value="<?php echo $row["startDate"] ?>">
                                                                <input name="end_date" type="hidden" value="<?php echo $row["endDate"] ?>">
                                                                <button class="btn btn-primary" type="submit" name="edit_coupon">Edit</button>
                                                            </form>
                                                        
                                                        </td>
                                                     </tr>
                                                    <?php
                                                }
                                            }
                                        ?>
                                    <!--End populating coupon from database-->
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!------------------------/End coupon list box--------------------------------------->
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © 2019</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="script.js"></script>
</body>

</html>