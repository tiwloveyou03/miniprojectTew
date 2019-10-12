<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hungry Bear</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bai+Jamjuree&display=swap" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<style>
    body{
        font-family: 'Bai Jamjuree', sans-serif;
    }
</style>
<?php
$sql2 = "SELECT MAX(orderid) AS orderid FROM orderfence";
$query = mysqli_query($conn,$sql2);
// $row = mysqli_num_rows($query);
$rs = mysqli_fetch_array($query);
// echo $row;
if($rs['orderid'] !=""){
    $sub = substr($rs['orderbuy'],2)+1;
    $orderbuy = sprintf('OB%003.0f', $sub);
    // $courseId = "c".$sub;
}else{
    $orderbuy = "OB001";
}
?>
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <div class="sidebar-brand-icon " >
                <img style="width: 75px;height: 75px;" src="photo/bearicon.png">
            </div>
            <div class="sidebar-brand-text mx-3">Hungry Bear</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="index.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Main menu
        </div>
        <li class="nav-item ">
            <a class="nav-link" href="creatorder.php">
                <i class="fas fa-handshake"></i>
                <span>Creat Order</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="confirmorder.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Confirm Order</span></a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="statusorder.php">
                <i class="far fa-calendar-check"></i>
                <span>Status Order</span></a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="finnishorder.php">
                <i class="far fa-check-circle"></i>
                <span>Finnish Order</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Others
        </div>

        <!--  Nav item - request order  -->
        <li class="nav-item">
            <a class="nav-link" href="tablerequestorder.php">
                <i class="fas fa-id-card"></i>
                <span>Tables Request Order</span></a>
        </li>
        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="tableforcus.php">
                <i class="fas fa-fw fa-table"></i>
                <span>TABLE for customer</span></a>
        </li>
        <!-- Nav Item - report -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsereport" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-file-upload"></i>
                <span>Report</span>
            </a>
            <div id="collapsereport" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">ALL REPORT</h6>
                    <a class="collapse-item" href="report.php">Report order</a>
                    <a class="collapse-item" href="ReportRFC.php">Report RFC</a>
                    <a class="collapse-item" href="tablerefund.php">Report Refund</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow-right">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Nawattakron Somboonma</span>
                            <img class="img-profile rounded-circle" src="photo/profile.jpg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Content Row -->
                <div class="row">
                    <div class="col">
                        <!--                        blank ไว้-->
                    </div>
                    <div class="col">
                        <h1>สร้างรายการออเดอร์สินค้า</h1><hr>
                        <form action="orderbuy.php" method="POST" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">ORDERBUY</label>
                                    <input type="text"  name="orderbuy" id="orderbuy" class="form-control" value= "<?php echo $orderbuy; ?>" disabled="disabled" >
                                    <input type="hidden" class="form-control" id="orderbuy"  name="orderbuy" value= "<?php echo $orderbuy; ?>"  >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="orderstatus">สถานะ</label>
                                    <input type="text" class="form-control" name="orderstatus" value="ยืนยันการซื้อสินค้า" disabled>
                                    <input type="hidden" class="form-control" id="orderstatus"  name="orderstatus" value= "ยืนยันการซื้อสินค้า">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ordernamecus">ชื่อลูกค้า</label>
                                <input type="text" class="form-control" name="ordernamecus" >
                            </div>
                            <div class="form-group">
                                <label for="ordercontact">Line Facebook Tel.</label>
                                <input type="text" class="form-control" name="ordercontact" >
                            </div>
                            <div class="form-group">
                                <label for="orderaddress">ที่อยู่</label>
                                <textarea class="form-control" name="orderaddress" rows="3" ></textarea>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputState">ประเภทสินค้า</label>
                                    <?php
                                    $sql2 = "SELECT * FROM typeproduct";
                                    $result2 =mysqli_query($conn,$sql2);
                                    echo"<select  class='form-control'style='width: 250px;' name='typepd'>";
                                    while($array2=mysqli_fetch_array($result2))
                                    {
                                        echo "<option value='".$array2['typepd']."'>"
                                            .$array2['typepd']."</option>";
                                    }//end whil $array2
                                    echo "</select>"
                                    ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputAddress2">ชื่อสินค้า</label>
                                    <input type="text" class="form-control" name="ordernameproduct" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="orderpieceproduct">จำนวนชิ้น</label>
                                    <select class="form-control" name="orderpieceproduct">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="orderdetailproduct">รายละเอียดสินค้า</label>
                                <textarea class="form-control" name="orderdetailproduct" rows="3" ></textarea>
                            </div>
                            <div class="form-group">
                                <label for="orderservicecharge">ค่าบริการ</label>
                                <input type="text" class="form-control" name="orderservicecharge" >
                            </div>
                            <div class="form-group">
                                <label for="ordertotalprice">ราคาสินค้า(รวมทั้งหมด)</label>
                                <input type="text" class="form-control" name="ordertotalprice" >
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="orderdatebuy">วันที่จะไปซื้อให้</label>
                                    <input type="date" class="form-control"  name="orderdatebuy" >
                                </div>
                                <button type="submit" class="btn btn-primary" name="save" onClick="window.location.reload();">บันทึกรายการสินค้า</button>
                                <button type="reset" class="btn btn-danger">รีค่า</button>
                        </form>
                    </div>
                </div>
                    <div class="col">
                        <!--        จัดกึ่งกลาง              -->
                    </div>
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Hungry Bear  Website 2019</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <a class="btn btn-primary" href="login.html">Logout</a>
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

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>
        <!-- Datatables -->
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>

</body>

</html>