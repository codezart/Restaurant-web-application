<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Offers</title>
    <?php include("styles.php") ?>
</head>

<body id="page-top">
    <div id="wrapper">
        <?php include("nav.php") ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
            <?php include("header.php") ?>
                <div class="container-fluid" style="padding-right: 50px;padding-left: 50px;">
                    <h3 class="text-dark mb-4">Offers</h3>
                    <!---------------------Start new offer box-------------------------->
                    <div class="card shadow" style="margin: 0px;margin-bottom: 30px;">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">New Offer</p>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="add_offer.php">
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="category"><strong>Category</strong></label>
                                            <select class="form-control" name="category" required>
                                                <option value="-1" disabled selected> Select food category</otion>
                                                <optgroup>
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
                                        <div class="col">
                                            <div class="form-group"><label for="food-item"><strong>Food Item</strong><br></label>
                                            <select class="form-control" name="food-item" required>
                                                <optgroup>
                                                </optgroup>
                                            </select>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="old-price"><strong>Old Price</strong></label><input class="form-control" type="text" name="old-price" readonly="readonly" required></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="new-price"><strong>New Price</strong></label><input class="form-control" type="text" placeholder="Enter new price" name="new-price"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group"><button class="btn btn-primary btn-sm"  type="submit" name="add_offer">Add Offer</button></div>
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
                    <!---------------------/End new offer box-------------------------->

                    <!---------------------Start offer list box--------------------------->
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Offers</p>
                        </div>
                            <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm"><option value="10" selected="">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>&nbsp;</label></div>
                                </div>
                                <div class="col-md-4">
                                <!--Start edit branches message-->
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
                                <!--/End edit branch message-->
                                </div>
                                <div class="col-md-4">
                                    <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div>
                            </div>
                                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                    <table class="table dataTable my-0" id="dataTable">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Old Price</th>
                                                <th>New Price</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                    <!--Start populating offers from database-->
                                    <?php
                                            include("database_connection.php");
                                            $query = "SELECT o.id, f.name, o.oldPrice, o.newPrice FROM offer o JOIN fooditem f ON o.foodItemID = f.id";
                                            $query_result = mysqli_query($connection, $query);
                                            if($query_result && mysqli_num_rows($query_result) > 0){
                                                while($row = mysqli_fetch_assoc($query_result)){
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row["name"] ?></td>
                                                        <td><?php echo $row["oldPrice"] ?></td>
                                                        <td><?php echo $row["newPrice"] ?></td>
                                                        <td>
                                                            <form method="POST" action="edit_offer.php">
                                                                <input name="id" type="hidden" value="<?php echo $row["id"] ?>">
                                                                <input name="name" type="hidden" value="<?php echo $row["name"] ?>">
                                                                <input name="old-price" type="hidden" value="<?php echo $row["oldPrice"] ?>">
                                                                <input name="new-price" type="hidden" value="<?php echo $row["newPrice"] ?>">
                                                                <button class="btn btn-primary" type="submit" name="edit_offer">Edit</button>
                                                            </form>

                                                        </td>
                                                     </tr>
                                                    <?php
                                                }
                                            }
                                        ?>
                                    <!--End populating offers from database-->
                                        </tbody>
                                    </table>

                                </div>
                                <div class="row">
                                    <div class="col-md-6 align-self-center">
                                        <p class="dataTables_info" role="status" aria-live="polite" style="font-size: 16px; font-weight:bold"></p>
                                    </div>

                                </div>
                            </div>
                    </div>
                    <!---------------------/End offer list box--------------------------->
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © 2019</span></div>
                </div>
            </footer>
        </div><a class="boffer rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="script.js"></script>
</body>

</html>
