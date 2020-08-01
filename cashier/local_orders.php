<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Local Orders</title>
    <?php include("styles.php") ?>
</head>

<body id="page-top">
    <div id="wrapper">
        <?php include("nav.php") ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
            <?php include("header.php"); ?>
                <div class="container-fluid" style="padding-right: 50px;padding-left: 50px;"><a href="new_order.php"><button class="btn btn-primary float-right" type="button" style="height: 31px;font-size: 14px;padding-top: 4px;padding-bottom: 4px;padding-right: 8px;padding-left: 8px;" href="new-order.php">New Local Order</button></a>
                    <h3 class="text-dark mb-4">Local Orders</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Local Orders</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm"><option value="10" selected="">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>&nbsp;</label></div>
                                </div>
                                <!--Start edit local order message-->
                                <div class="col-md-4">
                                <?php 
                                    if(isset($_SESSION["updated"])){
                                ?>
                                        <div class="alert alert-success ">
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
                                </div>
                                <!--/End edit local order message-->
                                <div class="col-md-4">
                                    <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table dataTable my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th style="width: 159px;">ID</th>
                                            <th style="width: 163px;">Date</th>
                                            <th style="width: 139px;">Total Price</th>
                                            <th style="width: 122px;">Status</th>
                                            <th style="width: 124px;">Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                    <!--Start populating local orders from database-->
                                    <?php 
                                            include("database_connection.php");
                                            $query = "SELECT t.id, t.date, t.totalPrice, s.name as statusName FROM transaction t JOIN status s ON s.id = t.statusID";
                                            $query_result = mysqli_query($connection, $query);
                                            if($query_result && mysqli_num_rows($query_result) > 0){
                                                while($row = mysqli_fetch_assoc($query_result)){
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row["id"] ?></td>
                                                        <td><?php echo $row["date"] ?></td>
                                                        <td><?php echo $row["totalPrice"] . " SR" ?></td>
                                                        <td><?php echo $row["statusName"] ?></td>
                                                        <td>
                                                            <form method="POST" action="edit_local_order.php"> 
                                                                <input name="id" type="hidden" value="<?php echo $row["id"] ?>">
                                                                <input name="date" type="hidden" value="<?php echo $row["date"] ?>">
                                                                <input name="totalPrice" type="hidden" value="<?php echo $row["totalPrice"] ?>">
                                                                <input name="statusName" type="hidden" value="<?php echo $row["statusName"] ?>">
                                                                <button class="btn btn-primary" type="submit" name="edit_local_order">Edit</button>
                                                            </form>
                                                        </td>
                                                     </tr>
                                                    <?php
                                                }
                                            }
                                        ?>
                                    <!--/End populating local orders from database-->
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
</body>

</html>