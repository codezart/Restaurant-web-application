<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>New Order</title>
    <?php include("styles.php") ?>
</head>

<body id="page-top">
    <div id="wrapper">
        <?php include("nav.php") ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
            <?php include("header.php") ?>
                <div class="container-fluid" style="padding-right: 50px;padding-left: 50px;">
                    <h3 class="text-dark mb-4">New Local Order</h3>
                    <!---------------------Start new local order box-------------------------->
                    <div class="card shadow" style="margin: 0px;margin-bottom: 30px;">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">New Local Order</p>
                        </div>
                        <div class="card-body">
                            <form>
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
                                            <div class="form-group"><label for="price"><strong>Price</strong></label><input class="form-control" type="text" name="price" disabled required></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="quantity"><strong>Quantity</strong></label><input class="form-control" type="number" min="1" value="1" name="quantity"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group"><button class="btn btn-primary btn-sm"  type="button" name="add_to_order">Add To Order</button></div>
                            </form>
                        </div>
                    </div>
                    <!---------------------/End new local order box-------------------------->

                    <!---------------------Start order summery box--------------------------->
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Order Summery</p>
                        </div>
                            <div class="card-body">
                                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                    <table class="table dataTable my-0" id="dataTable">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Remove</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>

                                </div>
                                <div class="row">
                                    <div class="col-md-6 align-self-center">
                                        <p class="dataTables_info" role="status" aria-live="polite" style="font-size: 16px; font-weight:bold">Total Price: <span id="total_price">0</span> SR</p>
                                    </div>
                                    <div class="col-md-6 d-xl-flex justify-content-xl-end"><button class="btn btn-primary" id="checkout" type="button">Checkout</button></div>
                                </div>
                            </div>
                    </div>
                    <!---------------------/End order summery box--------------------------->
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
