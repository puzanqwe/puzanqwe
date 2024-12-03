<?
    require_once './config.php';
    $messages = $connect -> query("SELECT * FROM `messages`");
    $messages = mysqli_fetch_all($messages);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>hider</th>
            <th>txt</th>
            <th>time</th>
            <th>name</th>
        </tr>
        <?
        foreach ($messages as $item){
        ?>
        <div class="messages">
            <tr>
                <td><?=$item[1]?></td>
                <td><?=$item[2]?></td>
                <td><?=$item[3]?></td>
                <td><?=$item[4]?></td>
                <td><a href="./del.php?id=<?=$item[0]?>"><button>делита</button></a></td>
            </tr>
        </div>
        <?
        }
        ?>
    </table>
    <a href="./add.php"><button>добавит</button></a>
</body>
</html>