<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style type="text/css">
    boby>div{
        width: 500px;
        heght: auto;
        margin:0 auto 50px;
    }
    h1{
        font-size: 25px;
        border-bottom: 1px #000 solid;
        margin-bottom: 50px;
    }
    h2{
        font-size:18px;
        background-color: #eee;
        text-indent:10px;
    }
    p{
        margin-bottom:30px;
    }
    p#submitBtn{
        text-align: center;
    }
    input[type="text"],
    input[type="email"]{
        font-size: 16px;
        width:300px;
        padding: 10px;
    }
    label{
        margin-right: 20px;
    }
    textarea{
        width:320px;
        height:100px;
        font-size:16px;
    }
    input[type="submit"]{
        width:200px;
        padding:10px;
        background-color: #DC143C;
        border:none;
        color:#fff;
        font-size: 16px;
    }
    </style>
</head>
<body>

    <div>
        <h1>お問い合わせフォーム</h1>

        <form action="sample8_thanks.php" method="POST">

            <h2>お名前</h2>
            <p><input type="text" name="onamae"></p>

            <h2>メールアドレス</h2>
            <p><input type="email" name="email"></p>

            <h2>性別</h2>
            <p>
                <label><input type="radio" name="gender" value="Man">Man</label>
                <label><input type="radio" name="gender" value="Woman">Woman</label>
            </p>

            <h2>お問い合わせ種別</h2>
            <p>
                <label><input type="checkbox" name="type[]" value="製品について">製品について</label>
                <label><input type="checkbox" name="type[]" value="サービスについて">サービスについて</label>
            </p>

            <h2>お問い合わせ内容</h2>
            <p>
                <textarea name="content"></textarea>
            </p>

            <p id="submitBtn">
                <input type="submit" value="上記内容で送信する">
            </p>
        </form>
    </div>


<?php




?>

</body>


</html>