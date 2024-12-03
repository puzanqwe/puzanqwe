<?
    require_once './config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="./add2.php">
        <label for="">ввидите хидер</label>
        <input type="text" name="hider">
        <label for="">ввидите txt</label>
        <input type="text" name="txt">
        <button type="submit">Отправить</button>
    </form>
</body>
</html>