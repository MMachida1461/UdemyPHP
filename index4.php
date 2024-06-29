<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP練習4</title>
</head>
<?php
    $db = new mysqli('localhost:8889', 'root', 'root', 'mydb');
    $message = 'フォームからのメモです';
    $stmt = $db->prepare('inser into memos(memo) values (?)');
    if(!$stmt){
        die($db->error);
    }
    $stmt->bind_param('s', $message);
    $ret = $stmt->execute();
    if($ret){
        echo 'データを挿入しました';
    }else{
        echo 'データの挿入に失敗しました';
    }
?>
<body>

    
</body>
</html>