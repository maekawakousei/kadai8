<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    ユーザー名
    <input type="text" name="" id="Username">
    <br>
    パスワード
    <input type="text" name="" id="">
    <br>
    <input type="button" onclick="clicka()" value="確認">

    <script>

        function clicka(){
            //alert("aa")
            let element = document.getElementById("Username")
            location.href="review.php?"+element.value;
        }
    </script>
</body>
</html>