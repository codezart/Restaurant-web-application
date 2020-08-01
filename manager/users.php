<?php session_start(); 
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Users</title>
    <?php include("styles.php") ?>
</head>

<body id="page-top">
    <div id="wrapper">
        <?php include("nav.php") ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content" style="margin: 0px;">
            <?php include("header.php") ?>
                <div class="container-fluid" style="padding-right: 50px;padding-left: 50px;">
                    <h3 class="text-dark mb-4">Users</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Users</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm"><option value="10" selected="">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>&nbsp;</label></div>
                                </div>
                                <div class="col-md-4">
                                <!--Start edit user message-->
                                <?php
                                    if(isset($_SESSION["success"])){
                                ?>
                                        <div class="alert alert-success">
                                            <strong>Success!</strong> <?php echo $_SESSION["success"]; unset($_SESSION["success"]);?>
                                        </div>
                                <?php
                                    }
                                ?>
                                <!--/End edit user message-->
                                </div>
                                <div class="col-md-4">
                                    <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table dataTable my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <!--Start populating Users from database-->
                                        <?php
                                            include("database_connection.php");
                                            $query = "SELECT * FROM customer";
                                            $query_result = mysqli_query($connection, $query);
                                            if($query_result && mysqli_num_rows($query_result) > 0){
                                                while($row = mysqli_fetch_assoc($query_result)){
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row["username"] ?></td>
                                                        <td><?php echo $row["email"] ?></td>
                                                        <td><?php echo $row["phone"] ?></td>
                                                        <td><?php echo $row["fname"] ?></td>
                                                        <td><?php echo $row["lname"] ?></td>
                                                        <td>
                                                            <form method="POST" action="delete_user.php">
                                                                <input name="id" type="hidden" value="<?php echo $row["id"] ?>">
                                                                <button class="btn btn-primary" type="submit" name="delete_user">Delete</button>
                                                            </form>
                                                        </td>
                                                        <td>
                                                            <form method="POST" action="block_user.php">
                                                                <input name="id" type="hidden" value="<?php echo $row["id"] ?>">
                                                                <button class="btn btn-danger" type="submit" name="block_user">block</button>
                                                            </form>
                                                        </td>

                                                     </tr>
                                                    <?php
                                                }
                                            }
                                        ?>
                                    <!--End populating Users from database-->
                                    </tbody>
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
                    <!--End list of users-->
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
