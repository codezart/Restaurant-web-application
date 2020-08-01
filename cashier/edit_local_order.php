<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Edit Local Order</title>
    <?php include("styles.php") ?>
</head>

<body id="page-top">
    <div id="wrapper">
    <?php include("nav.php"); ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <?php include("header.php") ?>
                <div class="container-fluid" style="padding-right: 50px;padding-left: 50px;">
                    <h3 class="text-dark mb-4">Edit Local Order</h3>
                    <!------------------Start update local order box--------------------------->
                    <div class="card shadow" style="margin: 0px;margin-bottom: 30px;">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Edit Local Order</p>
                        </div>
                        <div class="card-body">
                        <?php
                        if(isset($_POST["edit_local_order"])){
                        ?>
                            <form method="POST" action="update_local_order.php">
                                <div class="form-group">
                                    <div class="form-row">
                                        <input class="form-control" type="hidden" name="id" value="<?php echo $_POST["id"]; ?>">
                                        <div class="col">
                                            <div class="form-group"><label for="city"><strong>ID</strong><br></label><input class="form-control" type="text" value="<?php echo $_POST['id'] ?>" disabled></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="country"><strong>Date</strong></label><input class="form-control" type="text"  name="date" value="<?php echo $_POST['date'] ?>" disabled></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                    <div class="col">
                                            <div class="form-group"><label for="country"><strong>Total Price</strong></label><input class="form-control" type="text"  name="totalPrice" value="<?php echo $_POST['totalPrice'] ?>"></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="country"><strong>Status</strong></label>
                                            <select class="form-control" name="status">
                                                <optgroup label="Select local order status">
                                                    <!--Start populate local order status-->
                                                    <?php
                                                        include('database_connection.php');
                                                        $query = "SELECT * FROM status WHERE statusTypeID IN(SELECT id FROM statustype where name='Order')";
                                                        $query_result = mysqli_query($connection, $query);
                                                        if(mysqli_num_rows($query_result) > 0){
                                                            while($row = mysqli_fetch_assoc($query_result)){
                                                                if($_POST["statusName"] == $row["name"]){
                                                                    ?>
                                                                    <option value="<?php echo $row["id"]; ?>" selected><?php echo $row["name"]; ?></option>
                                                                    <?php
                                                                } else {
                                                                    ?>
                                                                    <option value="<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></option>
                                                                    <?php
                                                                }
                                                            }
                                                        }
                                                    ?>
                                                    <!--/End populate local order status-->
                                                </optgroup>
                                            </select>
                                        </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group"><button class="btn btn-primary btn-sm" type="submit" name="update_local_order">Update Local Order</button></div>
                            </form>
                        <?php
                        }
                        ?>

                        </div>
                    </div>
                    <!------------------/End update local order box--------------------------->
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
