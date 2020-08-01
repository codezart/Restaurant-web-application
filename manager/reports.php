<!DOCTYPE html>
<html>

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Reports</title>
    <?php include("styles.php") ?>
</head>
<body id="page-top">
    <div id="wrapper">
    <?php include("nav.php"); ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
            <?php include("header.php"); ?>
                <div class="container-fluid" style="padding-right: 50px;padding-left: 50px;">
                    <h3 class="text-dark mb-4">Reports</h3>
                    <div class="card shadow" style="margin: 0px;margin-bottom: 30px;">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Generate Reports</p>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="city"><strong>Report</strong><br></label>
                                            <select class="form-control" name="report_type">
                                                <optgroup label="This is a group">
                                                    <option value="sales_food_item">Sales amount of each food item</option>
                                                    <option value="sales_food_category">Sales amount of each food category</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="country"><strong>From</strong></label><input class="form-control" type="date" name="start_date" required></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="country"><strong>To</strong></label><input class="form-control" type="date" name="end_date" required></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group"><button class="btn btn-primary btn-sm" type="submit" name="get_report">Generate</button></div>
                            </form>
                        </div>
                    </div>
                    <!------------------------Start report box--------------------------------------->
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Report</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm"><option value="10" selected="">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>&nbsp;</label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table dataTable my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th style="width: 388px;">Name</th>
                                            <th>Sales</th>
                                        </tr>
                                    </thead>
                                    <tbody>
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
                    <!------------------------/End report box--------------------------------------->
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