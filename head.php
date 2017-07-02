<?php
/**
 * Created by PhpStorm.
 * User: wolverine
 * Date: 23/2/17
 * Time: 8:23 PM
 */
if(isset($_POST['login'])){
    $user = mysqli_real_escape_string($conn, $_POST['username']);
    $passt = mysqli_real_escape_string($conn, $_POST['password']);

    if(!$user || !$passt) {
        $loginerror = 'Username/Password can\'t be empty';

    }
    $pass = md5($passt);
    $logcheck = "SELECT * FROM `users`";
    $result = mysqli_query($conn, $logcheck);
    $rows = mysqli_fetch_row($result);
    if($rows[1] == $user AND $rows[2] == $pass){
        $_SESSION['login'] = $user;
        header('Location: yodcadmin/index.php');
    }
    else{
        $loginerror = "Login faliure";

    }
}
?>

<header style="padding: 0px;" >
    <!---TOPBAR--->



    <div class="container-fluid" style="padding: 0px;">
        <div class="row">
            <div class="col-md-12 hidden-sm hidden-xs" style="max-height: 55px">
                <nav class="navbar navbar-inverse backee" style="border-radius: 0px">
                    <ul class="nav navbar-nav navbar-right">
                        <!--                <li><a href="#"><b class="white">Social Network: </b></a> </li>-->
                        <li><a href="#"><div class="ccc"><i class="fa fa-facebook-f black"></i></div></a> </li>
                        <li><a href="#"><div class="ccc"><i class="fa fa-linkedin-square black"></i></div> </a> </li>
                        <li style="padding-right:100px; "><a href="#"><div class="ccc"><i class="fa fa-twitter-square black"></i> </div></a> </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-left">
                        <li style="padding-left: 100px;"><a href="#"><div class="ccc"><i class="fa fa-envelope black"></i></div></a></li>
                        <li><a href="mailto:<?php echo $fmain['p_email']; ?>" style="padding-left: 0px;padding-top: 20px;"><span class="white"><?php echo $fmain['p_email']; ?></span></a> </li>
                        <li><a href="#"><div class="ccc"><i class="fa fa-link black"></i></div></a></li>
                        <li><a href="http://<?php echo $fmain['website']; ?>" style="padding-left: 0px;padding-top: 20px;"><span class="white"><?php echo $fmain['website']; ?></span></a> </li>
                        <li><a href="#"><div class="ccc"><i class="fa fa-phone black"></i></div></a></li>
                        <li><a href="tel:<?php echo $fmain['p_num']; ?>" style="padding-left: 0px;padding-top: 20px;"><span class="white">+91 <?php echo $fmain['p_num']; ?></span></a> </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!---TOPBAR--->

    <!---Beech wala--->

    <div class="container-fluid hidden-xs hidden-sm backee">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <img class="img-responsive center-block" src="img/<?php echo $fmain['logo']; ?>" width="45%" />
            </div>
        </div>
    </div>

    <!---Beech wala--->

    <!-- Navbar --->
    <nav class="navbar navbar-default navbar-static-top" style="padding: 0px 0px 0px 0px;">
        <div class="navbar-header backee" >
            <div class="navbar-btn">
                <button type="button" class="navbar-toggle bgwhite" data-toggle="collapse" data-target="#mainNav">
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                </button>
                <img src="img/LDC%20logo.png" class="navbar-brand img-responsive hidden-lg hidden-md" style="margin-top: -8px;padding: 0px;" />
                <a href="#" class="navbar-brand hidden-lg hidden-md" style="color: #ffffff; margin-top: -8px;padding-left: 4px;"><b class="text-uppercase"><?php echo $fmain['clg_name']; ?></b></a>
            </div>

        </div>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="nav navbar-nav ">
                <li class="<?php echo $home;?>" style="padding-left: 97px;"><a href="index.php">Home</a></li>
                <li class="dropdown <?php echo $about;?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="campus.php">Campus</a></li>
                        <li><a href="institute.php">The Institute</a></li>
                        <li><a href="govern.php">Board Of Governance</a></li>
                    </ul>
                </li>
                <li class="dropdown <?php echo $academics;?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Academics <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="director.php">Director</a></li>
                        <li><a href="admission.php">Admission</a></li>
                        <li><a href="courses.php">Courses</a></li>
                    </ul>

                </li>
                <li class="<?php echo $infra;?>"><a href="infra.php">Infrastructure</a></li>
                <li class="<?php echo $placement;?>"><a href="placement.php">Placement</a></li>
                <li class="<?php echo $cont;?>"><a href="contact.php">Contact Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li style="padding-right: 110px;" ><a href="#" data-toggle="modal" data-target="#SignIn"><span class="fa fa-sign-in"></span>Sign In</a></li>
            </ul>
        </div>
    </nav>
    <div class="modal fade" id="SignIn" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title text-center">Sign In</h3>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form" method="post" action="">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-xs-12" style="padding: 10pt 50pt 0pt 50pt">
                                <div class="form-group form-group-sm">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" aria-autocomplete="inline" aria-required="true" required/>
                                </div>
                                <div class="form-group form-group-sm">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" aria-autocomplete="inline" aria-required="true" required/>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-xs-12" style="padding: 0pt 40pt 0pt 40pt">
                                <div class="form-group-sm">
                                    <input type="submit" class="form-control btn btn-primary btn-lg btn-block" id="login" name="login" value="Log In!" />
<!--                                    <input type="reset" class="form-control btn btn-danger" id="reset" name="reset" value="Reset!" />-->
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <p class="text-danger"><?php echo $loginerror ?></p>
                </div>
            </div>

        </div>
    </div>
    <!-- Navbar --->
</header>

