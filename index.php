<?php
// require_once("db.php");
require_once("config.php");
require_once("controllers/index.php");

$Controller = new Controller();
$Controller->global();
$Controller->index();

$request = $_GET['action'];
if(isset($request)):
    if(method_exists("Controller", $request)):
        $Controller->{$request}();
    endif;
else:
    $Controller->index();
endif;

require_once("views/layout/footer.php");

?>