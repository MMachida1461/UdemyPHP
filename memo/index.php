<?php
    require('dbconnect.php');
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
    <p>→<a href="index.html">新しいメモ</a></p>
    <?php while($memo = $memos->fetch_assoc()): ?>
    <div>
        <h2>
            <a href="#">
                <?php echo htmlspecialchars(mb_substr($memo['memo'], 0 ,50)) ?>
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