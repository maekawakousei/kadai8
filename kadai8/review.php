<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<form method="post" action="insert.php">
    <div class="jumbotron">
        <fieldset>
            <legend>レビュー投稿</legend>
            <label>ユーザー名：<input type="text" name="name"></label><br>
            <label>評価：<input type="number" name="eva" id=""></label><br>
            <label>感想<textArea name="comment" rows="4" cols="40"></textArea></label><br>
            <input type="submit" value="送信">
        </fieldset>
    </div>
</form>
<form method="post" action="update.php">
    <div class="jumbotron">
        <fieldset>
            <legend>レビュー編集</legend>
            <label>ユーザー名：<input type="text" name="name1"></label><br>
            <label>評価：<input type="number" name="eva" id=""></label><br>
            <label>感想<textArea name="comment" rows="4" cols="40"></textArea></label><br>
            <input type="submit" value="更新">
        </fieldset>
    </div>
</form>
<form method="post" action="delete.php">
    <div class="jumbotron">
        <fieldset>
            <legend>レビュー削除</legend>
            <label>ユーザー名：<input type="text" name="name"></label><br>
            <input type="submit" value="削除">
        </fieldset>
    </div>
</form>


    <?php
try {
    $db_name = 'kadai8';    //データベース名
    $db_id   = 'root';      //アカウント名
    $db_pw   = '';      //パスワード：MAMPは'root'
    $db_host = 'localhost'; //DBホスト
    $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
} catch (PDOException $e) {
    exit('DB Connection Error:' . $e->getMessage());
}


    ?>
</body>
</html>