<?php
session_start();

// 入力画面からのアクセスでなければ、戻す
if (!isset($_SESSION['form'])) {
    header('Location: contact.php');
    exit();
} else {
    $post = $_SESSION['form'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // メールを送信する
    $to = 'gorillajirushi@uho-1.com';
    $from = $post['email'];
    $subject = 'お問い合わせが届きました';
    $body = <<<EOT
名前： {$post['name']}
件名： {$post['subject']}
メールアドレス： {$post['email']}
お問合せ内容： {$post['contact']}
EOT;
    // var_dump($body);
    // exit();
    mb_send_mail($to, $subject, $body, "From: {$from}");

    // セッションを消してお礼画面へ
    unset($_SESSION['form']);
    header('Location: thanks.html');
    exit();
}

  $checks = $_POST['check'];


?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UHO-1株式会社 | お問い合わせ</title>
    <meta name="description" content="UHO-1株式会社">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/aos.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="application/ld+json">

    </script>
</head>

<body class="uho-co-jp">

    <div id="company-main">
        <img src="img/uho-contact-main.jpg" alt="">
        <div class="company-title-area">
            <h1>お問い合わせ</h1>
        </div>
    </div>
    <div class="white-area02">
        <section class="uho-contact-area">
            <form action="" method="POST">
                <label>
                    <span class="title">お名前<span class="required">必須</span></span>
                    <?php echo htmlspecialchars($post['name']); ?>
                </label>
                <label>
                    <span class="title">メールアドレス<span class="required">必須</span></span>
                    <?php echo htmlspecialchars($post['email']); ?>
                </label>
                <label>
                    <span class="title">件名<span class="required">必須</span></span>
                    <?php echo nl2br(htmlspecialchars($post['subject'])); ?>
                </label>
                <label>
                    <span class="title-textarea">お問い合わせ内容<span class="required">必須</span></span>
                    <?php echo nl2br(htmlspecialchars($post['contact'])); ?>
                </label>


                <div class="confirm-btn">
                    <div class="button"></div>
                    <a href="contact.php">戻る</a>
                    <button type="submit">送信する</button>
                </div>
            </form>
        </section>
    </div>




    <!-- ページトップへ戻るボタン -->
    <p class="pagetop" style="display: block;">
        <a href="#company-main">
            <i class="fas fa-arrow-up"></i>
        </a>
    </p>
</body>
<script src="js/aos.js"></script>
<script src="js/main.js"></script>

</html>