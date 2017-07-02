<?php
/**
 * Created by PhpStorm.
 * User: wolverine
 * Date: 4/3/17
 * Time: 9:36 AM
 */
$about = 'active';
include "yodcadmin/dbcon.php";
$fetch_social = mysqli_query($conn, "SELECT * FROM `social`");
$fetch_college = mysqli_query($conn, "SELECT * FROM `college_info`");
$fmain = mysqli_fetch_assoc($fetch_college);
$fsol = mysqli_fetch_assoc($fetch_social);
?>
<!DOCTYPE html>
<html>
<head>
    <?php
    include ('default.php');
    ?>
</head>
<body class="bgwhite" style="overflow-x:hidden;">
<?php
include('head.php');
?>
<div class="container-fluid backee" style="padding:0px;margin-top: -20px;">
    <div class="row">
        <div class="col-lg-1">

        </div>
        <div class="col-lg-10 bgwhite">
            <div class="row">
                <div class="col-lg-12" style="padding-top: 20pt">
                    <img src="img/campus.jpg" class="img-responsive img-rounded center-block" />
                </div>
                <div class="col-lg-12 center-block center-block"  style="padding-top: 10pt">
                    <a href="#camp" class="list-group-item active text-center" data-toggle="collapse"><b><i class="fa fa-university"></i> BOARD OF GOVERNANCE <i class="fa fa-university"></i></b></a>
                    <table class="table table-responsive table-striped text-justify collapse in fade" id="camp">

                            <tr><th>Name</th><th>Position</th><th>Qualification</th><th>Occupation</th><th>Official Address</th></tr>
                            <tr><td>Name</td><td>Position</td><td>Qualification</td><td>Occupation</td><td>Official Address</td></tr>

                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-1">

        </div>
    </div>
</div>
<?php
include('footer.php');
?>
</body>
</html>