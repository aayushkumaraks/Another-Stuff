<?php
session_start();
include_once "../dbcon.php";
if(empty($_SESSION['login'])){
    die("Nikal lo betta!");
}
else{

    $fetch_social = mysqli_query($conn, "SELECT * FROM `social`");
    $fetch_college = mysqli_query($conn, "SELECT * FROM `college_info`");
    $fetch_user = mysqli_query($conn, "SELECT * FROM `users`");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LDC ADMIN PANEL</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper" style="padding-top: 40pt">

        <!-- Navigation -->
        <?php
        include_once "nav.php";
        ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $count_msgs; ?></div>
                                    <div>New Messages!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-image fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $count_photos; ?></div>
                                    <div>Add Photos</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $count_staffs; ?></div>
                                    <div>View Staffs</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-newspaper-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $count_updates; ?></div>
                                    <div>Add Updates</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-left">
                        <h3>College Info</h3>
                    </div>
                    <table class="table">
                        <?php
                        while($coll=mysqli_fetch_assoc($fetch_college)) {

                            ?>
                            <tr>
                                <th>Logo:</th>
                                <td colspan="2"><img src="../../img/banner%20LDC.png"
                                                     class="img-rounded img-responsive"/></td>
                            </tr>
                            <tr>
                                <th>Name:</th>
                                <td colspan="2"><?php echo $coll['clg_name']; ?></td>
                            </tr>
                            <tr>
                                <th>Website:</th>
                                <td colspan="2">http://<?php echo $coll['website']; ?></td>
                            </tr>
                            <tr>
                                <th>Emails:</th>
                                <td><?php echo $coll['p_email']; ?></td>
                                <td><?php echo $coll['s_email']; ?></td>
                            </tr>
                            <tr>
                                <th>Phones:</th>
                                <td>+91 <?php echo $coll['p_num']; ?></td>
                                <td>+91 <?php echo $coll['s_num']; ?></td>
                            </tr>
                            <tr>
                                <th>Address:</th>
                                <td><?php echo $coll['campus_addr']; ?></td>
                                <td><?php echo $coll['clg_addr']; ?></td>
                            </tr>
                            <tr>
                                <th>About:</th>
                                <td colspan="2"><?php echo $coll['p_welcome']; ?><br/><br/>
                                    <?php echo $coll['s_welcome']; ?>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                </div>
                <div class="col-lg-12">
                    <div class="text-left">
                        <h3>Social Links</h3>
                    </div>
                    <table class="table">
                        <?php
                        while($sol = mysqli_fetch_assoc($fetch_social)) {

                            ?>
                            <tr>
                                <th><?php echo $sol['social_name']; ?>:</th>
                                <td><a href="<?php echo $sol['link']; ?>" class="btn btn-link" target="_blank"><?php echo $sol['link']; ?></a></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
