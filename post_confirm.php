<?php
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}
$name = $_POST["name"];
$mail = $_POST["mail"];
$food = $_POST["food"];
?>
<html>

<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<body>
    <p>お名前：<?= h($name) ?> </p>
    <p>Mail：<?= h($mail) ?></p>
    <p>好きな食べ物：<?= h($food) ?></p>
    <ul>
        <li><a href="index.php">index.php</a></li>
    </ul>
</body>

</html>
