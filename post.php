<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #2FA6E9;
        }
    </style>
    <title>アンケート</title>
</head>

<body>
    <div class="menu">
        <h3>アンケート</h3>
        <ul>
            <li>フォームのアンケートに回答してください</li>
            <li><a href="index.php">index.php</a></li>
        </ul>
    </div>

    <form action="post_confirm.php" method="post">
        お名前: <input type="text" name="name" size="50">
        <br>
        MAIL: <input type="text" name="mail">
        <br>
        好きな食べ物: <input type="text" name="food">
        <br>
        <input type="submit" value="送信">
    </form>
</body>

</html>
