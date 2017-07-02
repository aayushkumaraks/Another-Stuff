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
                    <a href="#camp" class="list-group-item active text-center" data-toggle="collapse"><b><i class="fa fa-caret-down"></i> LDC CAMPUS <i class="fa fa-caret-down"></i></b></a>
                    <table class="table table-responsive table-striped text-justify collapse in fade" id="camp">
                        <tr><td>
                        Shri Devi Chand Memorial Charitable Society embarked upon the noble cause of providing higher education in field of Engineering & Management and thus started LDC Institute of Technical Studies in the year 2007.<br /><br />
                        </tr></td>
                        <tr><td>
                        The institute features a perfect blend of four basic ingredients of contemporary education system viz. Infrastructure, Faculty, Students and Curriculum. The campus comprises of Hostels, Workshop, Academic Block and Administrative Block and well ventilated and aesthetically designed spacious class rooms with all the supportive technical aids.<br /><br />
                        </tr></td>
                        <tr><td>
                        LDC Institute of Technical Students has an impressive Wi-Fi campus situated in a self-owned 30 Acres collage area. The institute is located on Allahabad Pratapgarh Highway, 10 Km Prior to Allahabad. The Institute has not only succeeded in providing aspirants with professional education of the high standard but also placing them in reputed companies and organizations.<br/><br />
                        </tr></td>
                        <tr><td>
                        The Academic infrastructure embodies the mission of "Making Knowledge Work" which is achieved through experimental learning, national & international exposures, Latest audio-visual facilities, state-of-art Computer Centre, advanced multimedia training methodology & Co-curricular activities like educational club, cultural society and students' council. The academic infrastructure at LDC Institute of Technical Students strives to impart a strong, indigenous system of technical & management education which is holistic in nature, closer to our cultural heritage and relevant to our contemporary needs and national priorities.<br /><br />
                        </tr></td>
                    </table>
                </div>
                <div class="col-lg-12" style="padding-top: 20pt">
                    <img src="img/offer_ldc.jpg" class="img-responsive img-rounded center-block" />
                </div>
                <div class="col-lg-12" style="padding-top: 10pt;padding-bottom: 10pt">
                    <a href="#off" class="list-group-item active text-center" data-toggle="collapse"><i class="fa fa-caret-down"></i> <b>LDC OFFERS</b> <i class="fa fa-caret-down"></i></a>
                    <table class="table table-responsive table-striped collapse in fade" id="off">
                       <tr><td>
                        Well equipped computer labs with over 400 Core 2 Duo Pc's with LCD monitors in LAN with unlimited 4 Mbps Leased Line internet connectivity.
                       </tr></td>
                        <tr><td>
                        Aesthetically designed elegant campus with play fields.
                        </tr></td>
                        <tr><td>
                        An excellent collection of books in the central library spread over two floors accessible all day & night.
                        </tr></td>
                        <tr><td>
                        State of the art laboratories equipped with sophisticated and latest equipments.
                        </tr></td>
                        <tr><td>
                        An immense pool of knowledge, wisdom and experience in the form of eminent faculty drawn from the best institutes and industry.
                        </tr></td>
                        <tr><td>
                        Comfortable Hostel accommodation with homely environment.
                        </tr></td>
                        <tr><td>
                        Focus on personality development and English with a view to shape students knowledge, skill and attitude.
                        </tr></td>
                        <tr><td>
                        Encouragement to meritorious students by way of scholarships and freeships.
                        </tr></td>
                        <tr><td>
                        Provision for regular remedial classes for the benefit of weaker students.
                        </tr></td>
                        <tr><td>
                        Established industry linkage and patronage to achieve the ultimate-industrial training & placement in the prime organizations.
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
