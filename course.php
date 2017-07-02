<?php
/**
 * Created by PhpStorm.
 * User: wolverine
 * Date: 28/2/17
 * Time: 1:38 PM
 */
?>
<div class="container" style="padding-top: 15pt">
    <div class="row">
        <div class="col-lg-12">

            <h2 class="text-center page-header"><b>Courses Offered</b><br/> <img src="img/seprate_black.png" width="200pt" class="img-responsive center-block"></h2>

        </div>
    </div>
    <div class="row white" style="padding-top: 20pt;padding-bottom: 40pt;">
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12"><a href="#" data-toggle="modal" data-target="#btech">
                        <div class="thumbnail bgchange" style="">
                            <img src="img/btech.jpg" class="img-thumbnail" height="100%"/>
                            <div class="caption">
                                <h4 class="text-center white"><b>B.TECH</i></b></h4>
                            </div>
                        </div></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12"><a href="#" data-toggle="modal" data-target="#diploma">
                        <div class="thumbnail bgchange">
                            <img src="img/dip.jpg" class="img-thumbnail" />
                            <div class="caption">
                                <h4 class="text-center white"><b>DIPLOMA</b></h4>
                            </div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#" data-toggle="modal" data-target="#mba">
                            <div class="thumbnail bgchange">
                                <img src="img/mba.jpg" class="img-thumbnail" />
                                <div class="caption">
                                    <h4 class="text-center white"><b>M.B.A.</b></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#" data-toggle="modal" data-target="#mca">
                            <div class="thumbnail bgchange">
                                <img src="img/mca.jpg" class="img-thumbnail" />
                                <div class="caption">
                                    <h4 class="text-center white"><b>M.C.A</b></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--MOdals--->
<div class="modal fade" id="btech" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title text-center">B.Tech - Bachelor Of Technology</h3>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <table class="table table-striped">
                            <thead>
                            <tr><th>Courses</th><th>Seats</th></tr>
                            </thead>
                            <tbody>
                            <tr><td>Computer Science & Engineering</td> <td>60</td></tr>
                            <tr><td>Electrical & Electronics Engineering </td> <td>60</td></tr>
                            <tr><td>Electronics & Communication Engineering</td> <td>60</td></tr>
                            <tr><td>Mechanical Engineering </td> <td>120</td></tr>
                            <tr><td>Civil Engineering </td> <td>120</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">

            </div>
        </div>

    </div>
</div>
<div class="modal fade" id="diploma" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title text-center">Diploma</h3>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <table class="table table-striped">
                            <thead>
                            <tr><th>Courses</th><th>Seats</th></tr>
                            </thead>
                            <tbody>
                            <tr><td>Mechanical Engineering (Production)</td> <td>120</td></tr>
                            <tr><td>Electrical Engineering </td> <td>60</td></tr>
                            <tr><td>Civil Engineering </td> <td>120</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">

            </div>
        </div>

    </div>
</div>
<div class="modal fade" id="mba" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title text-center">MBA</h3>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <thead>
                    <tr><th>Courses</th><th>Seats</th></tr>
                    </thead>
                    <tbody>
                    <tr><td>Master of Business Administration</td> <td>60</td></tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">

            </div>
        </div>

    </div>
</div>
<div class="modal fade" id="mca" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title text-center">MCA</h3>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <thead>
                    <tr><th>Courses</th><th>Seats</th></tr>
                    </thead>
                    <tbody>
                    <tr><td>Master of Computer Application</td> <td>60</td></tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">

            </div>
        </div>

    </div>
</div>