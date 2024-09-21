<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP練習2</title>
</head>
<?php
    $db = new mysqli('localhost:8889', 'root', 'root', 'mydb');
    $records = $db->query('inset into memos(memo) values ("PHPからのmemoです")');

?>
<body>

    
</body>
</html>