<?php
/**
 * Created by PhpStorm.
 * User: wolverine
 * Date: 28/2/17
 * Time: 3:00 PM
 */
$fetch_news = mysqli_query($conn, "SELECT * FROM `ldc_news`");
$fetch_mod = mysqli_query($conn, "SELECT * FROM `ldc_news`");
?>

<div class="container-fluid backee hidden-xs hidden-sm" style="padding-top: 10pt;padding-bottom: 40pt">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header text-center"><h2 class="white"><b>Latest News</b></h2></div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        while($feeda = mysqli_fetch_assoc($fetch_mod)){
                            ?>
                            <div class="modal fade" id="<?php echo $feeda['title']; ?>" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h3 class="modal-title text-center">News</h3>
                                        </div>
                                        <div class="modal-body text-center">
                                           <b><u><h4><?php echo $feeda['title']; ?></h4></u></b>
                                            <p class="text-justify"><?php echo $feeda['body']; ?></p>
                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <div class="carousel slide multi-item-carousel" id="theCarousel">
                            <div class="carousel-inner">

<!--                                <div class="item active">-->
<!--                                    <div class="col-xs-4"><a href="#1"><img src="" class="img-responsive"></a>-->
<!--                                        <div class="carousel-caption patch">-->
<!--                                            <h4 class="patch"><b></b></h4>-->
<!--                                            <p class="text-justify"><b></b></p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->

                                <?php
                                $act = 1;
                                while($feedo = mysqli_fetch_assoc($fetch_news)){
                                    if($act==1){
                                        $tic='active';
                                    }
                                    else{
                                        $tic = NULL;
                                    }
                                    ?>

                                <div class="item <?php echo $tic; ?>">
                                    <div class="col-xs-4"><a href="#" data-toggle="modal" data-target="#<?php echo $feedo['title']; ?>"><img src="img/btech.jpg" class="img-responsive">
                                        <div class="carousel-caption patch">
                                            <h4 class="patch"><b><?php echo $feedo['title']; ?></b></h4>
                                            <p class="text-justify"><b><?php echo substr($feedo['body'], 0, 80); ?></b></p>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                    <?php
                                    $act++;
                                }
                                ?>

                                <!--  Example item end -->
                            </div>
                            <a class="left carousel-control tiny" href="#theCarousel" data-slide="prev"><i class="fa fa-arrow-circle-left"></i></a>
                            <a class="right carousel-control tiny" href="#theCarousel" data-slide="next"><i class="fa fa-arrow-circle-right"></i></a>
                            <script>
                                // Instantiate the Bootstrap carousel
                                $('.multi-item-carousel').carousel({
                                    interval: 5000
                                });

                                // for every slide in carousel, copy the next slide's item in the slide.
                                // Do the same for the next, next item.
                                $('.multi-item-carousel .item').each(function(){
                                    var next = $(this).next();
                                    if (!next.length) {
                                        next = $(this).siblings(':first');
                                    }
                                    next.children(':first-child').clone().appendTo($(this));

                                    if (next.next().length>0) {
                                        next.next().children(':first-child').clone().appendTo($(this));
                                    } else {
                                        $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
