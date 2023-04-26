<?php



    $onamae = $_POST['onamae'];
    $email  = $_POST['email'];
    $gender = $_POST['gender'];
    $type   = $_POST['type'];
    $content= $_POST['content'];

    $type_text;
    foreach($type as $value) {
        $type_text = $value.' ';
    }
    



    mb_language('japanese');
    mb_internal_encoding('UTF-8');


    $company_mail='nopposan0123@outlook.co.jp';


    $mail_subject = 'Webからのメールあるよ';


    $mail_body= <<<EOT
    お名前：$onamae
    メールアドレス：$email
    性別：$gender
    お問い合わせ種別：$type_text;
    お問い合わせ内容：$content);
    EOT;


    $mail_sender=$email;


    $mail_send = mb_send_mail(
        $company_mail,
        $mail_subject,
        $mail_body,
        'From:'.$mail_sender
    );


    var_dump($mail_send);

?>

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
        width:500px;
        font-size: 25px;
        border-bottom: 1px #000 solid;
        margin-bottom: 50px;
        text-align: center;
    }
    p {
        border:1px; #eee solid;
        padding:40px;
    }
    </style>
</head>
<body>

    <div>
        <h1>お問い合わせを送信しました</h1>
        <p>
        お問い合わせありがとうございます。
        </p>
    </div>


<?php




?>

</body>
</html>