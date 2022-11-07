<?php
include 'lib/globals/constants.php';
include 'lib/controllers/controller_login_head.php';
include 'lib/controllers/controller_login_tail.php';   
include 'lib/controllers/controller_login.php'; 
include 'lib/controllers/controller_login_banner.php'; 



$controllerLogindHead = new ControllerLogindHead();
$controllerLogindHead->populate();

$controllerLogin = new CollatorLogin();
$controllerLogin->populate();

$controllerLoginBanner = new CollatorLoginBanner();
$controllerLoginBanner->populate();

$controllerLoginTail = new ControllerLoginTail();
$controllerLoginTail->populate();


?>
<!doctype html>
<html lang="en">

    <head>
    <?php
    
    $controllerLogindHead->render();
    
    ?>
</head>

<body>

<?php
$controllerLogin->render();
$controllerLoginBanner->render();

$controllerLoginTail->render();

?>
</body>

</html>
