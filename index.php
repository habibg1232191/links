<?php
if($_POST['name'] != null){


    $message = "The mail message was sent with the following mail setting:\r\nSMTP = aspmx.l.google.com\r\nsmtp_port = 25\r\nsendmail_from = habibg12321@gmail.com";
    $headers = "From: habibg12321@gmail.com";
    $subject = $_POST['number'];
    mail("shlomo@zend.com", "Testing", $message, $headers);

}

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <title>Test</title>
</head>
<body>

<form action="index.php" method="post" class="form">
    <h1>Send</h1>
    <input required type="number" id="number" name="number" class="input">
    <input type="text" id="name" name="name" class="input">
    <button type="submit" class="btn btn-success" ripple>Отправить</button>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="/scripts/index.min.js"></script>
</body>
</html>
