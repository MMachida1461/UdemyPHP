<?php
    $db = new mysqli('localhost:8889', 'root', 'root', 'mydb');
    $memos = $db->query('select * from memos');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メモ帳</title>
</head>
<body>
    <h1>メモ帳</h1>
    <?php while($memo = $memos->fetch_assoc()): ?>
    <div>
        <h2>
            <a href="#">
                <?php echo $memo['memo'] ?>
            </a>
        </h2>
        <time datetime="">
            <?php echo $memo['created'] ?>
        </time>
    </div>
    <?php endwhile; ?>
    </div>
</body>
</html>