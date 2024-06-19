<?php
    require_once "./autoload.php";
    require_once "./config/app.php";

    //valida url como router
    if(isset($_GET['url'])){
        $url=explode("/", $_GET['url']);
    }else{
        $url=["login"];
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once "./app/views/inc/head.php"; ?>
</head>
<body>
    <?php echo $_GET['url']?>
    <?php require_once "./app/views/inc/script.php";?>
</body>
</html>