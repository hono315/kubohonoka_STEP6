<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contact.php");
    exit;
}

$name = $_POST['name'] ?? '';
$companyName = $_POST['companyName'] ?? '';
$email = $_POST['email'] ?? '';
$age = $_POST['age'] ?? '';
$message = $_POST['message'] ?? '';

// メール
$to = "fuyu85218@gmail.com";
$subject = "お問い合わせがありました";

$body = "お問い合わせ内容\n\n";
$body .= "お名前: " . $name . "\n";
$body .= "会社名: " . $companyName . "\n";
$body .= "メールアドレス: " . $email . "\n";
$body .= "年齢: " . $age . "\n";
$body .= "お問い合わせ内容:\n" . $message . "\n";

$headers = "From: " . $email;

$is_sent = mail($to, $subject, $body, $headers);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム-送信完了画面</title>
</head>

<body>
    <h1>お問い合わせフォーム-送信完了画面</h1>
    <?php if ($is_sent): ?>
        <p>お問い合わせが送信されました。ありがとうございます！</p>
    <?php else: ?>
        <p>メール送信に失敗しました。</p>
    <?php endif; ?>
    <a href="contact.php">お問い合わせフォームに戻る</a>
</body>

</html>