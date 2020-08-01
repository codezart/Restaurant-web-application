<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Edit Food Categories</title>
    <?php include("styles.php") ?>
</head>

<body id="page-top">
    <div id="wrapper">
        <?php include("nav.php"); ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
            <?php include("header.php"); ?>
                <div class="container-fluid" style="padding-right: 50px;padding-left: 50px;">
                    <h3 class="text-dark mb-4">Edit Food Category</h3>
                    <!------------------------------------Start update category box-------------------------------------->
                    <div class="card shadow" style="margin: 0px;margin-bottom: 30px;">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Edit Category</p>
                        </div>
                        <div class="card-body">
                        <?php
                            if(isset($_POST["edit_category"])){
                        ?>
                            <form method="POST" action="update_category.php">
                            <input class="form-control" type="hidden" name="id" value="<?php echo $_POST["id"]; ?>">
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="city"><strong>Name</strong></label><input class="form-control" type="text" placeholder="Enter category name" name="name" value="<?php echo $_POST["name"] ?>">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="country"><strong>Status</strong></label>
                                                <select class="form-control" name="status">
                                                    <optgroup label="Select category status">
                                                        <!--Start populate category status-->
                                                        <?php
                                                            include("database_connection.php");
                                                            $query = "SELECT * FROM status WHERE statusTypeID IN(SELECT id FROM statustype where name='Food Category')";
                                                            $query_result = mysqli_query($connection, $query);
                                                            if(mysqli_num_rows($query_result) > 0){
                                                                while($row = mysqli_fetch_assoc($query_result)){
                                                                    if($_POST["status"] == $row["name"]){
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
                                                        <!--/End populate category status-->
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div><label for="address"><strong>Description</strong></label><textarea class="form-control" rows="4" name="desc" style="height: 100px;"><?php echo $_POST["desc"] ?></textarea></div>
                                <div class="form-group"><button class="btn btn-primary btn-sm" type="submit" name="update_category">Update Category</button> <button class="btn btn-danger btn-sm" type="submit" name="delete_category">Delete Category</button></div>
                            </form>
                        <?php
                            }
                        ?>
                        </div>
                    </div>
                    <!--------------------------------/End update category box-------------------------------->
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
