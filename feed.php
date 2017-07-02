<?php
if(isset($_POST["submit"])){
    $name = mysqli_real_escape_string($conn, trim(strip_tags($_POST['name'])));
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['tel']);
    $msg = mysqli_real_escape_string($conn, trim(strip_tags($_POST['message'])));
    $bot = intval($_POST['bot']);
    $hide = intval($_POST['hide']);
    $info = $_SERVER['REMOTE_ADDR'] ." on ". date('Y-m-d H:i:s');


    if(!$name){
        $namefault = "Please enter a valid name";

    }
    elseif(!$email || !filter_var($email) || !strpos($email,'@')){
        $mailfault = "Please enter a valid email";

    }
    elseif(!$phone || !ctype_digit($phone) || strlen($phone)!=10){
    $numbfault = "Please enter a valid number";

    }
    elseif(!$msg || strlen($phone)>400){
        $msgfault = "Message should Not contain more than 300 characters";

    }
    elseif($bot !== $hide){
        $botfault = "Wrong answer!! Do the Maths carefully";

    }
    else{
        $feed ="INSERT INTO `feeds_ldc` (name, mail, phone, query, info) VALUES ('$name', '$email', $phone, '$msg', '$info')";
        if(mysqli_query($conn, $feed))
        {
            ?>
            <script>
                alert("Thanks for contacting us!");
            </script>
            <?php
        }
        else{
            ?>
            <script>
                alert("Unexpected Error!");
            </script>
            <?php
        }
    }
}
$a = intval(rand(0,10));
$b = intval(rand(0,5));
?>
<div class="container bgwhite" style="padding-top: 15pt; padding-bottom: 40pt">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center page-header"><b>Send Your Queries</b><br/> <img src="img/seprate_black.png" width="200pt" class="img-responsive center-block"></h2>
        </div>
    </div>
    <form class="form-horizontal" role="form" method="post" action="">
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-xs-12" style="padding: 10pt 50pt 10pt 50pt">
                <div class="form-group form-group-sm">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" aria-autocomplete="inline" aria-required="true" required/>
                    <p class="text-danger"><?php echo $namefault; ?></p>
                </div>
                <div class="form-group form-group-sm">
                    <input type="text" class="form-control" id="email" name="email" placeholder="YourEmail@email.com" aria-autocomplete="inline" aria-required="true" required/>
                    <p class="text-danger"><?php echo $mailfault; ?></p>
                </div>
                <div class="form-group form-group-sm">
                    <input type="number" class="form-control" id="tel" name="tel" placeholder="Phone Number" aria-autocomplete="inline" aria-required="true" required/>
                    <p class="text-danger"><?php echo $numbfault; ?></p>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12" style="padding: 10pt 50pt 10pt 50pt">
                <div class="form-group form-group-sm">
                    <textarea class="form-control" id="message" name="message" style="min-height: 57pt" placeholder="Your Query... less than 400 characters" aria-autocomplete="none" aria-required="true" required></textarea>
                    <p class="text-danger"><?php echo $msgfault; ?></p>
                </div>
                <div class="form-group form-group-sm">
                    <input type="number" class="form-control" id="bot" name="bot" placeholder="What is <?php echo ($a .'+'. $b); ?>" aria-autocomplete="inline" aria-required="true" required/>
                    <p class="text-danger"><?php echo $botfault; ?></p>
                    <input type="hidden" id="hide" name="hide" value="<?php echo $a+$b; ?>" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-xs-12" style="padding: 0pt 40pt 0pt 40pt">
                <div class="form-group-sm">
                    <input type="submit" class="form-control btn btn-success" id="sumbit" name="submit" value="Send!" />
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12" style="padding: 0pt 40pt 0pt 40pt">
                <div class="form-group-sm">
                    <input type="reset" class="form-control btn btn-danger" id="reset" name="reset" value="Reset!" />
                </div>
            </div>
        </div>
    </form>
</div>
