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
                <div class="col-lg-12 center-block"  style="padding-top: 10pt">
                    <a href="#camp" class="list-group-item active text-center" data-toggle="collapse"><b><i class="fa fa-university"></i> THE INSTITUTE <i class="fa fa-university"></i></b></a>
                    <table class="table table-responsive table-striped text-justify collapse in fade" id="camp">
                        <tr><td class="txtsmall">
                                <?php echo $fmain['p_welcome']; ?><br /><br /><?php echo $fmain['s_welcome']; ?>
                        </tr></td>

                    </table>
                </div>
                <div class="col-lg-12" style="padding-top: 20pt">
                    <img src="img/offer_ldc.jpg" class="img-responsive img-rounded center-block" />
                </div>
                <div class="col-lg-12" style="padding-top: 10pt;padding-bottom: 10pt">
                    <a href="#off" class="list-group-item active text-center" data-toggle="collapse"><i class="fa fa-star"></i> <b>Distinctive Developmental Design</b> <i class="fa fa-star"></i></a>
                    <table class="table table-responsive table-striped collapse in fade" id="off">
                        <tr><td><br/>
                                <b>Intellectual Capital</b><br/><br/>
                                <p class="txtsmall">
                                    The academic and professional excellence of an educational institute is primarily rooted in its human resource. The process of acquisition and assimilation of knowledge has to be coupled with the ability to apropriately transfer knowledge and create innovation.<br /><br/>
                                    In accordance with this thesis, LDC Institute has been successful in building up a highly competent team of faculty. We take legitimate pride in our faculty that is a judicious blend of rich experience and modern knowledge. Senior, several withinternational experience, and highly qualified, over 30% with Ph.D., faculty provide expert guidance and purposeful learning.
                                </p>
                        </tr></td>
                        <tr><td>
                                <br/>
                                <b>Academic Ambience</b><br/><br/>
                                <p class="txtsmall">
                                    The Institute has implemented teaching-learning process which is student-centric and promotes learning by students through efficacious pedagogy and modern teaching tools like power point presentation, interactive problem solving sessions, use of intranet for assignments and continuous evaluation. Spread over a vast plush green wi-fi campus of 30 acres , the institute provides an absolutely conducive ambience for experimental and fun filled learning.<br/><br/>
                                    In addition to academic and professional pursuit of knowledge and skills, value addition programmes have been designed aimed at holistic personality development which is an essential prerequisite for building up career for transnational and multinational corporations (MNCs).
                                </p>
                        </tr></td>
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

