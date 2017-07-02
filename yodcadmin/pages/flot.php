<?php
session_start();
include_once "../dbcon.php";
if(empty($_SESSION['login'])){
    die("Nikal lo betta!");
}
else{
    $fetch_galery = mysqli_query($conn, "SELECT * FROM `gallery`");
    if(isset($_POST['upload'])){
$target_dir = "../../gall/";
$fileo = basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$album = $_POST['album'];
$caption = $_POST['caption'];
$upquery = "INSERT INTO `gallery` (`photo`, `album`, `caption`) VALUES('$fileo', '$album', '$caption')";
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        if(!empty(mysqli_query($conn, $upquery))){
        echo "The file ". $fileo. " has been uploaded.";
        header("Refresh:0");
        }

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}

    if(isset($_POST['del'])){
        $picto = $_POST['pict'];
        mysqli_query($conn, "DELETE FROM `gallery` WHERE `gallery`.`photo` = '$picto'");
        unlink(realpath('/project/gall/'.DIRECTORY_SEPARATOR.$filename));
        header("Refresh:0");
    }
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

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

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

    <div id="wrapper">

        <!-- Navigation -->
        <?php
        include_once "nav.php";
        ?>

        <div id="page-wrapper" style="padding-top: 40pt">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Upload Images</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Upload here
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="" enctype="multipart/form-data" method="post" >
                                        <div class="form-group">
                                            <label>Albumn</label>
                                            <input class="form-control" type="text" id="album" name="album" />
                                            <p class="help-block">Add an Album Name Like : Yantra 2k17</p>
                                        </div>
                                        <div class="form-group">
                                            <label>File input</label>
                                            <input type="file" name="fileToUpload" id="fileToUpload">
                                        </div>
                                        <div class="form-group">
                                            <label>Caption</label>
                                            <textarea class="form-control" id="caption" name="caption" rows="3"></textarea>
                                        </div>
                                        <button type="submit" id="upload" name="upload" class="btn btn-default">Upload</button>

                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->

                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->

                <!-- /.col-lg-6 -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Gallery
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <?php
                            while($pic = mysqli_fetch_assoc($fetch_galery)){
                                ?>
                                <div class="col-lg-3">
                                    <img class="img-rounded img-responsive img-thumbnail" src="../../gall/<?php echo $pic['photo']; ?>">
                                    <div class="caption">
                                        <h4><?php echo $pic['album'];?></h4>
                                        <p><?php echo $pic['caption'];?></p>
                                        <form action="" method="post">
                                        <input type="hidden" id="pict" name="pict" value="<?php echo $pic['photo']; ?>" />
                                        <input type="submit" id="del" name="del" value="Delete" class="btn btn-danger center-block" />
                                        </form>
                                    </div>
                                </div>
                                <?php
                            }

                            ?>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
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

    <!-- Flot Charts JavaScript -->
    <script src="../vendor/flot/excanvas.min.js"></script>
    <script src="../vendor/flot/jquery.flot.js"></script>
    <script src="../vendor/flot/jquery.flot.pie.js"></script>
    <script src="../vendor/flot/jquery.flot.resize.js"></script>
    <script src="../vendor/flot/jquery.flot.time.js"></script>
    <script src="../vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
    <script src="../data/flot-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
