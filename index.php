<?php
session_start();
$home='active';
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
<?php
include('slider.php');
?>
<?php
include('welcome.php');
?>
<?php
include('course.php');
?>
<?php
include('news.php');
?>
<?php
include('feed.php');
?>
<div class="container-fluid" style="padding: 20px;">
    <iframe style="width: 100%; min-height: 250pt; border: none" src="https://www.google.com/maps/embed/v1/place?q=LDC%20Institute%20Of%20Technical%20Studies
      &zoom=14
      &attribution_source=Google+Maps+Embed+API
      &attribution_web_url=https://developers.google.com/maps/documentation/embed/
      &key= AIzaSyDUkQmbhZBTSz-qLWJeG41k9gePswQ16J8 " allowfullscreen>
    </iframe>
</div>

<?php
include('footer.php')
?>

</body>

</html>
