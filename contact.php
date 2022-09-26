<?php
session_start();
$error = []; /*←初期化*/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    // フォームの送信時にエラーをチェックする
    if ($post['name'] === '') {
        $error['name'] = 'blank';
    }
    if ($post['email'] === '') {
        $error['email'] = 'blank';
    } else if (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
        $error['email'] = 'email';
    }
    if ($post['subject'] === '') {
        $error['subject'] = 'blank';
    }
    if ($post['contact'] === '') {
        $error['contact'] = 'blank';
    }
 
    if (count($error) === 0) {
        // エラーがないので確認画面に移動
        $_SESSION['form'] = $post;
        header('Location: confirm.php');
        exit();
    }
} else {
    if (isset($_SESSION['form'])) {
        $post = $_SESSION['form'];
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UHO-1株式会社 | お問い合わせ</title>
    <meta name="description"
        content="医療従事者がプロデュースし、熱意ある最高の職人たちが具現化し実現。選手の持ち合わせているエネルギーを最大限に引き出す日本製の野球用品ブランド。〝あなたは本当の自分をまだ知らない〝潜在能力を爆発的に引き出すきっかけに。野球、投手、ピッチャー、社会人野球、大学野球、高校野球、甲子園、軟式野球、シニアリーグ、ボーイズリーグ。">
    <meta property="og:title"
        content="UHO-1株式会社 | 選手の持ち合わせているエネルギーを最大限に引き出す日本製の野球用品ブランド。医療従事者がプロデュースし、熱意ある最高の職人たちが具現化し実現。選手の持ち合わせているエネルギーを最大限に引き出す日本製の野球用品ブランド。〝あなたは本当の自分をまだ知らない〝潜在能力を爆発的に引き出すきっかけに。">
    <meta property="og:type" content="website">
    <meta property="og:description"
        content="医療従事者がプロデュースし、熱意ある最高の職人たちが具現化し実現。選手の持ち合わせているエネルギーを最大限に引き出す日本製の野球用品ブランド。〝あなたは本当の自分をまだ知らない〝潜在能力を爆発的に引き出すきっかけに。野球、投手、ピッチャー、社会人野球、大学野球、高校野球、甲子園、軟式野球、シニアリーグ、ボーイズリーグ。">
    <meta property="og:url" content="https://uho-1.com/">
    <meta property="og:site_name" content="UHO-1株式会社">
    <meta property="og:image" content="https://uho-1.com/img/gorila-logo-.png">
    <meta property="og:locale" content="ja_JP" />
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
    <header class="header wrapper">
        <div class="uho-header-logo"><a href="index.html"><img src="img/uho-logo.png" alt="ホームに戻る"></a></div>
        <ul>
            <li><a href="gorilla.html">Gorilla<span>ごりら印の野球道具</span></a></li>
            <li><a href="https://pippogloves.stores.jp" target="_blank"
                    rel="noopener noreferrer">Pippo<span>ひだり投げ専門店</span></a></li>
            <li><a href="uho-me.html">Web Design<span>うほーむぺーじ製作所</span></a></li>
            <li><a href="company.html">Company<span>会社概要</span></a></li>
            <li><a href="contact.php">Contact<span>お問い合わせ</span></a></li>
            <li><a href="https://www.facebook.com/people/%E3%81%94%E3%82%8A%E3%82%89%E5%8D%B0%E3%81%AE%E9%87%8E%E7%90%83%E9%81%93%E5%85%B7/100054843546877/"
                    target="_blank" rel="noopener noreferrer"><img src="img/header-Icon-facebook.png"
                        alt="フェイスブックページ"></a></li>
            <li><a href="https://www.instagram.com/gorillajirushi_baseball/?hl=ja" target="_blank"
                    rel="noopener noreferrer"><img src="img/header-Icon-instagram.png" alt="インスタグラムページ"></a></li>
            <li><a href="https://twitter.com/gorillajirushi?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"
                    target="_blank" rel="noopener noreferrer"><img src="img/header-Icon-twitter.png" alt="ツイッターページ"></a>
            </li>
        </ul>
        </nav>
        </div>
    </header>

    <header id="header">
        <div class="site-title"><a href="index.html"><img src="img/uho-logo.png" alt="ホームに戻る"></a></div>
        <nav id="navi">
            <ul class="nav-menu">
                <li><a href="gorilla.html">ごりら印の野球道具</a></li>
                <li><a href="https://pippogloves.stores.jp" target="_blank" rel="noopener noreferrer">ひだり投げ専門店</a></li>
                <li><a href="uho-me.html">うほーむぺーじ製作所</a></li>
                <li><a href="company.html">会社概要</a></li>
                <li><a href="contact.php">お問い合わせ</a></li>
                <li><a href="https://www.facebook.com/people/%E3%81%94%E3%82%8A%E3%82%89%E5%8D%B0%E3%81%AE%E9%87%8E%E7%90%83%E9%81%93%E5%85%B7/100054843546877/"
                        target="_blank" rel="noopener noreferrer"><img src="img/header-Icon-facebook.png"
                            alt="フェイスブックページ"></a></li>
                <li><a href="https://www.instagram.com/gorillajirushi_baseball/?hl=ja" target="_blank"
                        rel="noopener noreferrer"><img src="img/header-Icon-instagram.png" alt="インスタグラムページ"></a></li>
                <li><a href="https://twitter.com/gorillajirushi?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"
                        target="_blank" rel="noopener noreferrer"><img src="img/header-Icon-twitter.png"
                            alt="ツイッターページ"></a></li>
            </ul>
        </nav>
        <div class="toggle_btn">
            <span></span>
            <span class="toggle-center"></span>
            <span></span>
        </div>

        <div id="mask"></div>
    </header>

    <div id="company-main">
        <img src="img/uho-contact-main.jpg" alt="">
        <div class="company-title-area">
            <h1>お問い合わせ</h1>
        </div>
    </div>
    <div class="white-area">
        <section class="uho-contact-area">
            <form action="" method="POST" novalidate>
                <label>
                    <span class="title">お名前<span class="required">必須</span></span>
                    <input type="text" name="name" placeholder="鈴木一朗"
                        value="<?php echo htmlspecialchars($post['name']); ?>" required autofocus>
                    <?php if ($error['name'] === 'blank'): ?>
                    <p class="error_msg">※お名前をご記入下さい</p>
                    <?php endif; ?>
                </label>
                <label>
                    <span class="title">メールアドレス<span class="required">必須</span></span>
                    <input type="email" name="email" autocomplete="email" placeholder="xxx@.com"
                        value="<?php echo htmlspecialchars($post['email']); ?>" required>
                    <p class="error_msg">※メールアドレスをご記入下さい</p>
                    <?php if ($error['email'] === 'blank'): ?>
                    <?php endif; ?>
                    <?php if ($error['email'] === 'email'): ?>
                    <p class="error_msg">※メールアドレスを正しくご記入ください</p>
                    <?php endif; ?>
                </label>
                <label>
                    <span class="title">件名<span class="required">必須</span></span>
                    <textarea type="textarea" name="subject" placeholder="グローブorスパイクorバットorホームページ "
                        required><?php echo htmlspecialchars($post['subject']); ?></textarea>
                    <?php if ($error['subject'] === 'blank'): ?>
                    <p class="error_msg">※件名をご記入下さい</p>
                    <?php endif; ?>
                </label>
                <label>
                    <span class="title-textarea">お問い合わせ内容<span class="required">必須</span></span>
                    <textarea type="textarea" name="contact" cols="50" rows="10" placeholder="お問い合わせ内容などをご記入ください"
                        required><?php echo htmlspecialchars($post['contact']); ?></textarea>
                    <?php if ($error['contact'] === 'blank'): ?>
                    <p class="error_msg">※お問い合わせ内容をご記入下さい</p>
                    <?php endif; ?>
                </label>

                <div class="personal-information">
                    <p class="personal-title">個人情報の取扱いについて</p>
                    <p class="personal-bottom">UHO-1株式会社はご登録いただきました個人情報は個人情報保護法に定める例外事項を除き、<br>
                        ご本人の承諾なく第三者に提供することはございません。<br>
                        同意いただける方は「同意して送信」のボタンを押してください。</p>
                </div>
                <div class="contact-btn">
                    <button type="submit">同意して送信</button>
                </div>
            </form>
        </section>
    </div>

    <footer class="footer">
        <div class="footer-area">
            <h3 class="footer-logo"><a href="index.html"><img src="img/uho-logo.png" alt="ホームに戻る"></a></h3>
            <nav class="footer-nav">
                <li><a href="gorilla.html">ごりら印の野球道具</a></li>
                <li><a href="https://pippogloves.stores.jp" target="_blank" rel="noopener noreferrer">ひだり投げ専門店</a></li>
                <li><a href="uho-me.html">うほーむぺーじ製作所</a></li>
                <li><a href="company.html">会社概要</a></li>
                <li><a href="contact.php">お問い合わせ</a></li>
                <li><a href="privacy.html">個人情報の取扱い</a></li>
            </nav>
            <div class="sns-area">
                <ul>
                    <li><a href="https://www.facebook.com/people/%E3%81%94%E3%82%8A%E3%82%89%E5%8D%B0%E3%81%AE%E9%87%8E%E7%90%83%E9%81%93%E5%85%B7/100054843546877/"
                            target="_blank" rel="noopener noreferrer"><img src="img/Icon-facebook.png"
                                alt="フェイスブックページ"></a></li>
                    <li><a href="https://www.instagram.com/gorillajirushi_baseball/?hl=ja" target="_blank"
                            rel="noopener noreferrer"><img src="img/Icon-instagram.png" alt="インスタグラムページ"></a></li>
                    <li><a href="https://twitter.com/gorillajirushi?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"
                            target="_blank" rel="noopener noreferrer"><img src="img/Icon-twitter.png"
                                alt="ツイッターページ"></a></li>
                </ul>
            </div>
        </div>
        <p class="copy-area"><small>&copy; 2022　UHO-1 Co., Ltd. All Rights Reserved.</small></p>
    </footer>



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