<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Edit Branch</title>
    <?php include("styles.php") ?>
</head>

<body id="page-top">
    <div id="wrapper">
        <?php include("nav.php"); ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content" style="margin: 0px;">
            <?php include("header.php"); ?>
                <div class="container-fluid" style="padding-right: 50px;padding-left: 50px;">
                    <h3 class="text-dark mb-4">Edit Branch</h3>
                    <div class="card shadow" style="margin: 0px;margin-bottom: 30px;">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Edit Branch</p>
                        </div>
                        <div class="card-body">
                            <!--Start populating branch values from branch table-->
                            <?php 
                                if(isset($_POST["edit_branch"])){
                            ?>        
                                    <!--Start branch update form-->
                                    <form method="POST" action="update_branch.php">
                                        <div class="form-group">
                                        <input class="form-control" type="hidden" name="id" value="<?php echo $_POST["id"]; ?>">
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="name"><strong>Name</strong></label><input class="form-control" type="text" placeholder="Enter name" name="name" required value="<?php echo $_POST["name"]; ?>" ></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="location"><strong>Location</strong><br></label><input class="form-control" type="text" placeholder="Enter location" name="location" required  value="<?php echo $_POST["location"]; ?>" ></div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="desc"><strong>Description</strong><br></label><textarea class="form-control" style="height: 100px;" name="desc"><?php echo $_POST["desc"]; ?></textarea></div>
                                        </div>
                                    </div>
                                        </div>
                                        <div class="form-group"><button class="btn btn-primary btn-sm" type="submit" name="update_branch">Update Branch</button> <button class="btn btn-danger btn-sm" type="submit" name="delete_branch">Delete Branch</button></div>
                                    </form>
                                    <!--End branch update form-->
                            <?php
                                }
                            ?>
                            <!--End populating branch values from branch table-->
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