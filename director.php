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
$fetch_dir =  mysqli_query($conn, "SELECT * FROM `staff` WHERE `staff`.`position` = 'Director'");
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
            <?php
            while ($fet_dir = mysqli_fetch_assoc($fetch_dir)){
            ?>
            <div class="row">
                <div class="col-lg-12 page-header text-center">
                    <h2><u>Director's Desk</u></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img src="img/<?php echo $fet_dir['photo']; ?>" class="img-rounded img-responsive img-thumbnail" />
                </div>
                <div class="col-md-8">
                    <h3><?php echo $fet_dir['name']; ?></h3>
                    <p align="left">
                        <b>Qualifications:</b> <?php echo $fet_dir['quals']; ?> <br />
                        <b>Experience:</b> <?php echo $fet_dir['exp']; ?> <br />
                        <b>Phone:</b> <?php echo $fet_dir['phone']; ?> <br />
                        <b>Address:</b> <?php echo $fet_dir['addr']; ?> <br />
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3>
                        Director's Message
                    </h3>
                        <p class="text-justify">
                            Pyaare Baccho,<br/>
                            <?php echo $fet_dir['description']; ?> <br />
                        </p>
                        <p class="text-left">
                            By. <?php echo $fet_dir['name']; ?> <br />
                            <b><?php echo $fet_dir['quals']; ?> <br /></b>
                        </p>
                 <?php } ?>
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
