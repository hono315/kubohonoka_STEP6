<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contact.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム-確認画面</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h2>お問い合わせフォーム-確認画面</h2>
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

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $name = $_POST['name'];
            $companyName = $_POST['companyName'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $message = $_POST['message'];

            $errors = [];

            if (empty($name)) {
                $errors[] = "お名前を入力してください。";
            };

            if (empty($companyName)) {
                $errors[] = "会社名を入力してください";
            };

            if (empty($email)) {
                $errors[] = "メールアドレスを入力してください";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "メールアドレスの形式が正しくありません。";
            };

            if (empty($age)) {
                $errors[] = "年齢を入力してください。";
            } elseif (!is_numeric($age) || $age < 0 || $age > 150) {
                $errors[] = "年齢は0〜150の間で入力してください。";
            };

            if (empty($message)) {
                $errors[] = "お問い合わせ内容を入力してください。";
            };
        } else {
            $errors[] = "データが送信されていません。";
        }
        ?>
        <?php if (!empty($errors)): ?>
            <?php foreach ($errors as $error): ?>
                <p><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></p>
            <?php endforeach; ?>
        <?php else: ?>

            <form action="send.php" method="post">
                <table>
                    <tr>
                        <th>お名前</th>
                        <td><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></td>
                    </tr>
                    <tr>
                        <th>会社名</th>
                        <td><?php echo htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8'); ?></td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td><?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></td>
                    </tr>
                    <tr>
                        <th>年齢</th>
                        <td><?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?></td>
                    </tr>
                    <tr>
                        <th>お問い合わせ内容</th>
                        <td><?php echo nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8')); ?></td>
                    </tr>
                </table>

                <input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
                <input type="hidden" name="companyName" value="<?php echo htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8'); ?>">
                <input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
                <input type="hidden" name="age" value="<?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>">
                <input type="hidden" name="message" value="<?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?>">

                <div class="submit-btn">
                    <button type="button" onclick="history.back()">戻る</button>
                    <input type="submit" value="送信">
                </div>
            </form>
        <?php endif; ?>
    </main>

    <footer>
    </footer>
</body>

</html>