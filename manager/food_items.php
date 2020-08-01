<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Food Items</title>
    <?php include("styles.php") ?>
</head>

<body id="page-top">
    <div id="wrapper">
    <?php include("nav.php"); ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
            <?php include("header.php"); ?>
                <div class="container-fluid" style="padding-right: 50px;padding-left: 50px;">
                    <h3 class="text-dark mb-4">Food Items</h3>
                    <!------------------Start add new food item box--------------------------->
                    <div class="card shadow" style="margin: 0px;margin-bottom: 30px;">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Add New Food Item</p>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="add_food_item.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="name"><strong>Name</strong><br></label><input class="form-control" type="text" placeholder="Enter food item name" name="name"></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="price"><strong>Price</strong></label><input class="form-control" type="text" placeholder="Enter food item price" name="price"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="status"><strong>Status</strong></label>
                                            <select class="form-control" name="status">
                                                <optgroup label="Select food item status">
                                                    <!--Start populate food item status-->
                                                    <?php
                                                        include("database_connection.php");
                                                        $query = "SELECT * FROM status WHERE statusTypeID IN(SELECT id FROM statustype where name='Food Item')";
                                                        $query_result = mysqli_query($connection, $query);
                                                        if(mysqli_num_rows($query_result) > 0){
                                                            while($row = mysqli_fetch_assoc($query_result)){
                                                                ?>
                                                                    <option value="<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></option>
                                                                <?php
                                                            }
                                                        }
                                                    ?>
                                                    <!--/End populate food item status-->
                                                </optgroup>
                                            </select
                                        ></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="category"><strong>Category</strong></label>
                                            <select class="form-control" name="category">
                                                <optgroup label="Select food item category">
                                                    <!--Start populate food item category-->
                                                    <?php
                                                        include("database_connection.php");
                                                        $query = "SELECT * FROM foodcategory";
                                                        $query_result = mysqli_query($connection, $query);
                                                        if(mysqli_num_rows($query_result) > 0){
                                                            while($row = mysqli_fetch_assoc($query_result)){
                                                                ?>
                                                                    <option value="<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></option>
                                                                <?php
                                                            }
                                                        }
                                                    ?>
                                                    <!--/End populate food item category-->
                                                </optgroup>
                                            </select>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="desc"><strong>Description</strong><br></label><textarea class="form-control" style="height: 100px;" name="desc"></textarea></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                         <div class="col">
                                            <div class="form-group"><label for="desc"><strong>Image</strong></label><br><input type="file" name="image" id="fileToUpload"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group"><button class="btn btn-primary btn-sm" type="submit" name="add_food_item">Add Food Item</button></div>
                            </form>
                                <!--Start add new category message-->
                                <?php
                                    if(isset($_SESSION["success"])){
                                ?>
                                        <div class="alert alert-success col-md-4">
                                            <strong>Success!</strong> <?php echo $_SESSION["success"]; unset($_SESSION["success"]);?>
                                        </div>
                                <?php
                                    } else if(isset($_SESSION["error"])){
                                        ?>
                                        <div class="alert alert-danger col-md-4">
                                            <strong>Success!</strong> <?php echo $_SESSION["error"]; unset($_SESSION["error"]); ?>
                                        </div>
                                <?php
                                    }
                                ?>
                                <!--/End add new category message-->
                        </div>
                    </div>
                    <!------------------/End add new food item box--------------------------->

                    <!------------------Start food items list box--------------------------->
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Food Items</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm"><option value="10" selected="">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>&nbsp;</label></div>
                                </div>
                                <!--Start edit category message-->
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
                                <!--/End edit category message-->
                                <div class="col-md-4">
                                    <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table dataTable my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th style="width: 191px;">Name</th>
                                            <th style="width: 163px;">Price</th>
                                            <th>Category</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <!--Start populating food items from database-->
                                    <?php
                                            include("database_connection.php");
                                            $query = "SELECT f.id, f.name, f.price, f.desc, c.name as categoryName, s.name as statusName FROM fooditem f JOIN foodcategory c ON f.foodCategoryID = c.id JOIN status s ON f.statusID = s.id";
                                            $query_result = mysqli_query($connection, $query);
                                            if($query_result && mysqli_num_rows($query_result) > 0){
                                                while($row = mysqli_fetch_assoc($query_result)){
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row["name"] ?></td>
                                                        <td><?php echo $row["price"] . " SR" ?></td>
                                                        <td><?php echo $row["categoryName"] ?></td>
                                                        <td><?php echo $row["desc"] ?></td>
                                                        <td><?php echo $row["statusName"] ?></td>
                                                        <td>
                                                            <form method="POST" action="edit_food_item.php">
                                                                <input name="id" type="hidden" value="<?php echo $row["id"] ?>">
                                                                <input name="name" type="hidden" value="<?php echo $row["name"] ?>">
                                                                <input name="price" type="hidden" value="<?php echo $row["price"] ?>">
                                                                <input name="category" type="hidden" value="<?php echo $row["categoryName"] ?>">
                                                                <input name="desc" type="hidden" value="<?php echo $row["desc"] ?>">
                                                                <input name="status" type="hidden" value="<?php echo $row["statusName"] ?>">
                                                                <button class="btn btn-primary" type="submit" name="edit_food_item">Edit</button>
                                                            </form>

                                                        </td>
                                                     </tr>
                                                    <?php
                                                }
                                            }
                                        ?>
                                    <!--/End populating food items from database-->
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
                    <!------------------/End food items list box--------------------------->
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
