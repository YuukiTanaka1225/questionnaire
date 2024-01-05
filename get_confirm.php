<?php

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}

$name = $_GET['name'];
$mail = $_GET['mail'];
$food = $_food['food'];
?>
<html>
<head>
    <meta charset="utf-8">
    <title>アンケート結果（受信）</title>
</head>

<body>
    <p>お名前：<?php echo $name; ?> </p>
    <p>Mail： <?php echo $email; ?></p>
    <p>好きな食べ物： <?php echo $food; ?></p>

    <ul>
        <li><a href="index.php">index.php</a></li>
    </ul>
</body>

</html>
