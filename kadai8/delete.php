<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$name  = $_POST['name'];

//2.DB接続します
try {
    $pdo = new PDO('mysql:dbname=kadai8;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
    exit('DB Connection Error:' . $e->getMessage());
}


//3.削除SQLを作成
$stmt = $pdo->prepare('DELETE FROM review_tb WHERE user_id = :name');
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$status = $stmt->execute(); //実行


//４．データ登録処理後
if ($status === false) {
    //*** function化する！******\
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    //*** function化する！*****************
    header('Location: review.php');
    exit();
}
    ?>
</body>
</html>