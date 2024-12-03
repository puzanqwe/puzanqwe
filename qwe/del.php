<?
    require_once './config.php';
    $id = $_GET['id'];
    $del = $connect ->query("DELETE FROM `messages` WHERE `id`= '$id'");
    header("Location: ./index.php")
?>