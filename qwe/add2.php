<?
    require_once './config.php';
    $hider = $_POST['hider'];
    $txt = $_POST['txt'];
    $time = date('y-m-d');
    $add = $connect ->query("INSERT INTO `messages`(`id`, `message_header`, `message_txt`, `timestamp`, `name`) VALUES (NULL,'$hider','$txt','$time',NULL)");
?>