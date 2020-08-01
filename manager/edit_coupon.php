<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Edit Coupon</title>
    <?php include("styles.php") ?>
</head>

<body id="page-top">
    <div id="wrapper">
        <?php include("nav.php"); ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content" style="margin: 0px;">
            <?php include("header.php"); ?>
                <div class="container-fluid" style="padding-right: 50px;padding-left: 50px;">
                    <h3 class="text-dark mb-4">Edit Coupon</h3>
                    <div class="card shadow" style="margin: 0px;margin-bottom: 30px;">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Edit Coupon</p>
                        </div>
                        <div class="card-body">
                            <!--Start populating coupon values from coupon table-->
                            <?php 
                                if(isset($_POST["edit_coupon"])){
                            ?>        
                                    <!--Start coupon update form-->
                                    
                            <form method="POST" action="update_coupon.php">
                                <div class="form-group">
                                <input class="form-control" type="hidden" name="id" value="<?php echo $_POST["id"]; ?>">
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="city"><strong>Coupon</strong><br></label>
                                            <input class="form-control" type="text" name="coupon" placeholder="Enter coupon" required value="<?php echo $_POST["coupon"]; ?>"> 
                                        </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="start_date"><strong>From</strong></label><input class="form-control" type="date" name="start_date" required value="<?php echo $_POST["start_date"]; ?>"></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="end_date"><strong>To</strong></label><input class="form-control" type="date" name="end_date" required value="<?php echo $_POST["end_date"]; ?>"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group"><button class="btn btn-primary btn-sm" type="submit" name="update_coupon">Update Coupon</button> <button class="btn btn-danger btn-sm" type="submit" name="delete_coupon">Delete Coupon</button></div>
                            </form>
                                    <!--End coupon update form-->
                            <?php
                                }
                            ?>
                            <!--End populating coupon values from coupon table-->
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