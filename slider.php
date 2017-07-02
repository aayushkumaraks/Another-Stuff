<?php
/**
 * Created by PhpStorm.
 * User: wolverine
 * Date: 23/2/17
 * Time: 9:52 PM
 */
session_start();
include_once "../dbcon.php";
$fetch_slides = mysqli_query($conn, "SELECT * FROM `slides`");
?>

<div class="container-fluid" style="padding: 0px;margin-top: -18px;">
    <div id = "myCarousel" class = "carousel slide" style="padding: 0px;">

        <!-- Carousel indicators
        <ol class = "carousel-indicators">
            <li data-target = "#myCarousel" data-slide-to = "0" class = "active"></li>
            <li data-target = "#myCarousel" data-slide-to = "1"></li>
            <li data-target = "#myCarousel" data-slide-to = "2"></li>
        </ol>--->

        <!-- Carousel items -->
        <div class = "carousel-inner">
            <?php
            $pact = 1;
            while($pic = mysqli_fetch_assoc($fetch_slides)) {
                if($pact==1){
                    $stic='active';
                }
                else{
                    $stic = NULL;
                }
                ?>
                <div class="item <?php echo $stic; ?>">
                    <img src="slides/<?php echo $pic['photo']; ?>" class="img-responsive" width="100%">
                </div>

                <?php
                $pact++;
            }
            ?>
        </div>

        <!-- Carousel nav -->
        <a class = "carousel-control left" href = "#myCarousel" data-slide = "prev">&lsaquo;</a>
        <a class = "carousel-control right" href = "#myCarousel" data-slide = "next">&rsaquo;</a>

    </div>

    <script>
//        $(function() {
//            $('#myCarousel').on('slide.bs.carousel', function () {
//                interval: 1200
//            });
//        });
//        $(document).ready(function() {
//            $('#myCarousel').carousel({s
//                interval: 200
//            })
//        });
$('#myCarousel').carousel({
    interval: 3000
});

var $ = jQuery.noConflict();
$(document).ready(function() {
    $('#myCarousel').carousel({ interval: 3000, cycle: true });
});
    </script>
</div>
