<?php
session_start();
if(empty($_SESSION['login'])){
    die("Nikal lo betta!");
}
else{
    echo "Please wait while you are being redirected!";
}

?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="refresh" content="0;url=pages/index.php">
        <title>SB Admin 2</title>
        <script language="javascript">
            window.location.href = "pages/index.php"
        </script>
    </head>
    <body>
    Go to <a href="pages/index.php">/pages/index.php</a>
    </body>
    </html>
