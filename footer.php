<?php
/**
 * Created by PhpStorm.
 * User: wolverine
 * Date: 3/3/17
 * Time: 9:35 PM
 */
$fetch_new = mysqli_query($conn, "SELECT * FROM `ldc_news`");
$fetch_mo = mysqli_query($conn, "SELECT * FROM `ldc_news`");
$fetch_soci = mysqli_query($conn, "SELECT * FROM `social`");
?>
<footer>
    <div class="container-fluid backee" style="padding-top: 10pt;padding-bottom: 0pt">
        <div class="row" style="padding: 0pt">
            <p class="white">-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
        </div>
        <div class="row" style="padding-bottom: 0px;">
            <div class="col-lg-3 hidden-lg hidden-md" style="max-height: 100pt;overflow-y: hidden">

                <h4 class="white">News:</h4>
                <?php
                while($feeder = mysqli_fetch_assoc($fetch_mo)){
                    ?>
                    <div class="modal fade" id="<?php echo $feeder['title']; ?>" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h3 class="modal-title text-center">News</h3>
                                </div>
                                <div class="modal-body text-center">
                                    <b><u><h4><?php echo $feeder['title']; ?></h4></u></b>
                                    <p class="text-justify"><?php echo $feeder['body']; ?></p>
                                </div>
                                <div class="modal-footer">
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php
                }
                ?>
                <div class="media-body txtsmall white">
                    <marquee height="100" direction="up" onmouseover="stop()" onmouseout="start()" SCROLLAMOUNT=2>
                        <ul class="list-group">
                            <?php
                            $joke = 'New';
                            $cntt = 0;
                            while($feedas = mysqli_fetch_assoc($fetch_new))
                            {
                                if($cntt>1){
                                    $joke = NULL;
                                }
                                ?>
                                <a href="#" data-toggle="modal" data-target="#<?php echo $feedas['title']; ?>"><li class="list-group-item"><?php echo $feedas['title']; ?><span class="badge"><?php echo $joke; ?></span></li></a>
                                <?php
                                $cntt++;
                            }
                            ?>
                        </ul>
                    </marquee>
                </div>
            </div>
            <div class="col-lg-3">

                <h4 class="white">Important Links</h4>

                <div class="media-body">
                    <table class="table white txtsmall" border="0">
                        <tr><td>
                                Students
                            </td>
                            <td>
                                Faculty
                            </td></tr>
                        <tr><td>
                                Students
                            </td>
                            <td>
                                Faculty
                            </td></tr>
                        <tr><td>
                                Students
                            </td>
                            <td>
                                Faculty
                            </td></tr>
                        <tr><td>
                                Students
                            </td>
                            <td>
                                Faculty
                            </td></tr>
                    </table>
                </div>
            </div>
            <div class="col-lg-3">

                <h4 class="white">Contact Details</h4>

                <div class="media-body txtsmall">
                    <table class="table white txtsmall" border="0">
                        <tr><td rowspan="2"><B class="txtsmall">Phone :</B></td><td class="txtsmall"> <i class="fa fa-mobile-phone white"></i>&nbsp; +91 <?php echo $fmain['p_num']; ?> </td></tr>
                        <tr><td> <i class="fa fa-phone white"></i> +91 <?php echo $fmain['s_num']; ?></td></tr>
                        <tr><td rowspan="2"><B class="txtsmall">Email :</B></td><td class="txtsmall"> <?php echo $fmain['p_email']; ?></td></tr>
                        <tr><td><?php echo $fmain['s_email']; ?></td></tr>
                    </table>
                </div>
            </div>
            <div class="col-lg-3">

                <h4 class="white">Visit Us</h4>

                <div class="media-body txtsmall">
                    <table class="table white txtsmall" border="0">
                        <tr><td><B class="txtsmall">Campus:</B></td><td class="txtsmall"><?php echo $fmain['campus_addr']; ?></td></tr>

                        <tr><td><B>Office :</B></td><td><?php echo $fmain['clg_addr']; ?></td></tr>

                    </table>
                </div>
            </div>
            <div class="col-lg-3">

                <h4 class="white">Follow Us:</h4>

                <div class="media-body txtsmall" >
                    <table class="table white txtsmall text-center" >
                        <tr>
                            <td>
                                <?php
                                while ($fsoli = mysqli_fetch_assoc($fetch_soci))
                                {
                                    ?>
                                    <a href="http://<?php echo strtolower($fsoli['link']);?>" target="_blank"><i class="fa fa-<?php echo strtolower($fsoli['social_name']); ?>-square white fa-3x"></i></a>&nbsp;&nbsp;
                                    <?php
                                }
                                ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="row" style="padding: 0pt">
            <p class="white">------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
        </div>
        <div class="row" style="padding: 0pt">
            <div class="col-md-6 col-sm-12 txtsmall">
                <p align="center" class="white">Copyright © 2017 <a href="/index.php" class="links" ><?php echo $fmain['clg_name']; ?></a></p>
            </div>
            <div class="col-md-6 col-sm-12 txtsmall">
                <p align="center" class="white">Design & Developed By <a href="https://www.facebook.com/ayushksinha" class="links" target="_blank">Ayush K Sinha</a></p>
            </div>
        </div>
    </div>
</footer>
