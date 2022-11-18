<!DOCTYPE html>
<html lang="en">

<head >

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EMS-Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link  id="themeStyleSheet" href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" href="../logo-removebg.png" type="image/png" />
    <link rel="shortcut icon" href="../logo-removebg.png" type="image/png" />
</head>

<body onload="Loadtheme();User();" id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    <?php include "Sidebar.html"?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                
                <?php include "Topbar.html"?>

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        
                        <!-- Assignment -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-3">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Assignment/s
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                0
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Activities -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                ACTIVITIES</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            0
                                        </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Assesments or Exams -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Exam</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            0
                                        </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Graphs  -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Graph/s
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                        0
                                                    </div>
                                                </div>
                                                <div class="col">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-chart-area fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Deadline  -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Deadline/s</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                0
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-exclamation-triangle fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Progress</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Assignment<span
                                            class="float-right">100%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Activities <span
                                            class="float-right">100%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Exam <span
                                            class="float-right">100%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                            </div> 
                        </div>
                        <div class="col-lg-flex mb-4"> 
                            <div class="card shadow mb-4">    
                            <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Daily Reminder</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                               EXAMPLE ANOUNCEMENT</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                Example announcement for the announcement or bulletin board
                                            </div>
                                </div>
                                <div class="card-body">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                               EXAMPLE ANOUNCEMENT</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                Example announcement for the announcement or bulletin board
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <a href="#" id="reminder" class="btn btn-lg btn-success btn-icon-split ">
                                        <span class="icon text-white-50">
                                            <i class="fas fa">+</i>
                                        </span>
                                        <span class="text">Add New Reminder</span>
                                    </a>
                                        </div>
                                </div>
                            </div>
                        
                        </div>
                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">
                        <div class="card shadow mb-4" style="length:100%">
                            <!--Announcement-->
                                <div class="card-header py-4">
                                    <h6 class="m-0 font-weight-bold text-primary">Announcement</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                               EXAMPLE ANOUNCEMENT</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                Example announcement for the announcement or bulletin board
                                            </div>
                                </div>
                                <div class="card-body">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                               EXAMPLE ANOUNCEMENT</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                Example announcement for the announcement or bulletin board
                                            </div>
                                        </div>
                                <div class="card-body">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                               EXAMPLE ANOUNCEMENT</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                Example announcement for the announcement or bulletin board
                                            </div>
                                        </div>
                                <div class="card-body">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                               EXAMPLE ANOUNCEMENT</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                Example announcement for the announcement or bulletin board
                                            </div>
                                        </div>
                                <div class="card-body">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                               EXAMPLE ANOUNCEMENT</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                Example announcement for the announcement or bulletin board
                                            </div>
                                        </div>
                                <div class="card-body">
                                            <a href="#" id ="anouncement"class="btn btn-lg btn-info btn-icon-split drowpdown">
                                        <span class="icon text-white-50">
                                            <i class="fas fa">+</i>
                                        </span>
                                        <span class="text">Add New Anouncement</span>
                                    </a>
                                        </div>
                            <!--End of Announcement-->
                            </div>
                        </div>    
                </div>
            </div>



























    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../index.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/Loadtheme.js"></script>

</body>