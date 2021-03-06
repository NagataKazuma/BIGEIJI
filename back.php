<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- サイトタイトル -->
    <title>新規会員登録</title>
    <!-- 規定値 -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- ローディング画面実装jsリンク -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/tinynav.min.js"></script>
    <!-- CSSリンク -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:700 rel=" stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Homemade+Apple rel=" stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC rel=" stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand rel=" stylesheet">
</head>

<body>
    <div class="wrapper">
        <!-- ページトップに戻す描写 -->
        <div id="page_top"><a href="#"></a></div>
        <!-- ローディング画面 -->
        <script>
            jQuery(function() {
                var pagetop = $('#page_top');
                pagetop.hide();
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 700) { //100pxスクロールしたら表示
                        pagetop.fadeIn();
                    } else {
                        pagetop.fadeOut();
                    }
                });
                pagetop.click(function() {
                    $('body,html').animate({
                        scrollTop: 0
                    }, 700); //0.5秒かけてトップへ移動
                    return false;
                });
            });
        </script>
        <!-- ローディング画面の描写-->
        <div id="loader-bg">
            <img src="img/loading.gif">
        </div>
        <script>
            jQuery(window).on('load', function() {
                jQuery('#loader-bg').hide();
            });
        </script>
        <script type="text/javascript">
            $(function() {
                $("#menu").tinyNav();
            });
        </script>
        <!-- ページ上部のリスト -->
        <div class="title-font"><a href="top.php?movie_title">
                <img src="img/icon2.png">
            </a></div>
        <ul id="menu">
            <li><a href="#">Search▼</a>
                <ul>
                    <li><a href="movie_search.php">映画を探す</a></li>
                    <li><a href="popular.php">定番映画を探す</a></li>
                </ul>
            </li>
            <li><a href="#">Cinema▼</a>
                <ul>
                    <li><a href="eigakan.php">近くの映画館</a></li>
                    <li><a href="nowplay.php">上映中の映画</a></li>
                </ul>
            </li>
            <li><a href="#">various▼</a>
                <ul>
                    <li><a href="favorite.php">お気に入り映画</a></li>
                    <li><a href="review.php">映画レビュー</a></li>
                </ul>
            </li>
            <li><a href="#">Login▼</a>
                <ul>
                    <li class="test100"><a href="login.php">ログイン</a></li>
                    <li class="test100"><a href="register.php">新規登録</a></li>
                </ul>
            </li>
        </ul>

        <body>
            <div class="log-top">
                <div class=top_text>アカウント新規登録</div>
            </div>
            <!-- 10月6日　ログイン作成（テンプレ） -->
            <br />
            <form method="post" action="login_add_check.php">
                <div class="log-set">メールアドレス</div>
                <input type="email" name="mail" style="width:300px" placeholder="E-Mail address" required><br />
                <div class="log-set">パスワード</div>
                <div class="toggle">
                    <input type="password" class="field js-password" id="password2" name="pass" style="width:300px" placeholder="英字と数字の両方を含めて8～20字" required>
                    <label class="btn-label js-password-label" for="eye"><i class="fas fa-eye"></i></label>
                    <div class="btn">
                        <input class="btn-input js-password-toggle" id="eye" type="checkbox">
                    </div>
                </div>
                <div class="log-set">パスワード【確認用】</div>
                <input type="password" class="field js-password" id="password2" name="pass2" style="width:300px" placeholder="確認用" required><br />
                <br />
                <input type="button" onclick="history.back()" value="戻る">
                <input type="submit" value="OK">
                <a href="login.php">ログインはこちら</a>
            </form>
            <script>
                const passwordToggle = document.querySelector('.js-password-toggle');
                passwordToggle.addEventListener('change', function() {
                    const password = document.querySelector('.js-password'),
                        passwordLabel = document.querySelector('.js-password-label');
                    if (password.type === 'password') {
                        password.type = 'text';
                        passwordLabel.innerHTML = '<i class="fas fa-eye-slash"></i>';
                    } else {
                        password.type = 'password';
                        passwordLabel.innerHTML = '<i class="fas fa-eye"></i>';
                    }
                    password.focus();
                });
            </script>

            <!-- ページ最下部フッター -->
            <footer>
                <div class=footer1>
                    <span class="footer-span"><a href="https://www.hamasen.ac.jp/dept/security/">&copy; R2 HAMAJO security&network</a></span>
                    <span class="footer-span"><a href="http://localhost/sotuken/help.php">お問い合わせ</a></span>
                    <span class="footer-span"><a href=http://localhost/sotuken/about.php>このサイトについて </a> </span> </div> </footer> </body> </html>