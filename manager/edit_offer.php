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
                    <!---------------------Start edit offer box-------------------------->
                    <div class="card shadow" style="margin: 0px;margin-bottom: 30px;">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">New Offer</p>
                        </div>
                        <div class="card-body">
                        <!--Start populating offer values from offer table-->
                        <?php 
                                if(isset($_POST["edit_offer"])){
                        ?>        
                            <!--Start offer update form-->
                            <form method="POST" action="update_offer.php">
                                <div class="form-group">
                                <input class="form-control" type="hidden" name="id" value="<?php echo $_POST["id"]; ?>">
                                    <div class="form-row">
                                    <div class="col">
                                            <div class="form-group"><label for="food-name"><strong>Food Name</strong></label><input class="form-control" type="text" name="food-name" readonly="readonly" required value="<?php echo $_POST["name"]?>"></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="old-price"><strong>Old Price</strong></label><input class="form-control" type="text" name="old-price" readonly="readonly" required value="<?php echo $_POST["old-price"]?>"></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="new-price"><strong>New Price</strong></label><input class="form-control" type="text" placeholder="Enter new price" name="new-price" value="<?php echo $_POST["new-price"]?>"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group"><button class="btn btn-primary btn-sm"  type="submit" name="update_offer">Update Offer</button> <button class="btn btn-danger btn-sm" type="submit" name="delete_offer">Delete Offer</button></div>
                            </form>
                            <!--End offer update form-->
                            <?php
                                }
                            ?>
                            <!--End populating offer values from offer table-->
                        </div>
                    </div>
                    <!---------------------/End edit offer box-------------------------->

            
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