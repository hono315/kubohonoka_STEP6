<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h2>お問い合わせフォーム</h2>
    </header>

    <main>
        <sidebar>
            <ul>
                <li><a href="#">トップページ</a></li>
                <li><a href="#">人気投稿</a></li>
                <li><a href="#">エンジニアおすすめ商品</a></li>
                <li><a href="#">エンジニアおすすめ記事</a></li>
                <li><a href="#">投稿ページ</a></li>
            </ul>
        </sidebar>

        <form id="contactForm" action="confirm.php" method="post">
            <table>
                <tr>
                    <th><label for="name">お名前</label></th>
                    <td><input type="text" id="name" name="name" size="40"></td>
                </tr>
                <tr>
                    <th><label for="companyName">会社名</label></th>
                    <td><input type="text" id="companyName" name="companyName" size="40"></td>
                </tr>
                <tr>
                    <th><label for="email">メールアドレス</label></th>
                    <td><input type="email" id="email" name="email" size="40"></td>
                </tr>
                <tr>
                    <th><label for="age">年齢</label></th>
                    <td><input type="number" id="age" name="age" size="40"></td>
                </tr>
                <tr>
                    <th><label for="message">お問い合わせ内容</label></th>
                    <td><textarea name="message" id="message"></textarea></td>
                </tr>
            </table>
            <input type="submit" value="送信" class="submit-btn">
        </form>
    </main>

    <footer id="footer">
        <p>横のボタンを押すとfooterの背景色が変わります。</p>
        <button id="colorButton">押してみてね！</button>
    </footer>
    <script src="style.js"></script>
</body>


</html>