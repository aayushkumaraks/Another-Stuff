<?php
session_start();
include_once "../dbcon.php";
if(empty($_SESSION['login'])){
    die("Nikal lo betta!");
}
else{
    $fetch_news = mysqli_query($conn, "SELECT * FROM `ldc_news` ORDER BY `ldc_news`.`id` DESC");
    if(isset($_POST['update'])){

            $target_dir = "../../files/";
            $fileo = basename($_FILES["fileToUpload"]["name"]);
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            $title = $_POST['title'];
            $mass = $_POST['mass'];
            $upquery = "INSERT INTO `ldc_news` (`title`, `body`, `file`) VALUES('$title', '$mass', '$fileo')";
// Check if file already exists
        if(!$fileo){
            $fileo = NULL;
            if(!empty(mysqli_query($conn, $upquery))){
                echo "The file ". $fileo. " has been uploaded.";
                header("Refresh:0");
            }
        }
        else{
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
            if($imageFileType != "pdf" && $imageFileType != "doc" && $imageFileType != "docx"
                && $imageFileType != "pptx" ) {
                echo "Sorry, only pdf, doc, docx & pptx files are allowed.";
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
    }

    if(isset($_POST['del'])){
        $del = $_POST['pict'];
        $fill = $_POST['fill'];
        $delq = "DELETE FROM `ldc_news` WHERE `ldc_news`.`id` = '$del'";
        if(!empty(mysqli_query($conn, $delq))){
            unlink(realpath('/project/files'.DIRECTORY_SEPARATOR.$fill));
            echo "FIELD DELETED";
            header("Refresh:0");
        }
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

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">News</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Post updates
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" method="post" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input class="form-control" placeholder="Title of the News" name="title" id="title" />
                                    </div>
                                    <div class="form-group">
                                        <label>Any file?</label>
                                        <input type="file" name="fileToUpload" id="fileToUpload" />
                                    </div>
                                    <div class="form-group">
                                        <label>Something about news</label>
                                        <textarea class="form-control" rows="3" name="mass" id="mass"></textarea>
                                    </div>
                                    <button type="submit" id="update" name="update" class="btn btn-default">Update</button>
                                </form>
                            </div>
                            <!-- /.col-lg-6 (nested) -->

                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Gallery
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>title</th>
                                <th>Body</th>
                                <th>File</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            while($feedo = mysqli_fetch_assoc($fetch_news)){
                                ?>
                                <tr class="odd">
                                    <td><?php echo $feedo['id']; ?></td>
                                    <td><?php echo $feedo['title']; ?></td>
                                    <td><?php echo $feedo['body']; ?></td>
                                    <td class="center"><a href="../../files/<?php echo $feedo['file']; ?>"><?php echo $feedo['file']; ?></a></td>
                                    <td class="text-center">
                                        <form action="" method="post">
                                            <input type="hidden" name="pict" id="pict" value="<?php echo $feedo['id']; ?>" />
                                            <input type="hidden" name="fill" id="fill" value="<?php echo $feedo['file']; ?>" />
                                            <input type="submit" name="del" id="del" value="Delete"  class="btn btn-danger" />
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
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

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
