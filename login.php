<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- サイトタイトル -->
    <title>ログインページ</title>
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
    <style type="text/css">
        input[type="text"] {
            background-color: transparent;
            border: solid;
            outline: none;
            border-left: transparent;
            border-right: transparent;
            border-top: transparent;
        }

        input[type="text"]:hover {
            border: solid#b97a56;
            border-left: transparent;
            border-right: transparent;
            border-top: transparent;
            transition: .3s;
        }
    </style>
</head>

<body background="img/test.jpg">
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
        <div class="title-font"><a href="top.php">
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
        <!-- 10月6日　ログイン作成（テンプレ） -->
        <div class="test50">
            <div class=top_logtext>ログイン</div>
            <br />
            <form method="post" action="member_login_check.php">
                <div class="log-set">
                    <div class="mail icon"></div>メールアドレス
                </div>
                <input type="email" name="mail" style="width:300px" placeholder="E-Mail address" required><br />
                <div class="log-set">
                    <br />
                    <div class="key2 icon"></div>パスワード
                </div>
                <div class="toggle">
                    <input type="password" name="pass" style="width:300px" placeholder="Password" class="field js-password" id="password2" required>
                    <label id="label22" class="btn-label js-password-label1" for="eye"><i class="fas fa-eye"></i></label>
                    <div class="btn">
                        <input class="btn-input js-password-toggle" id="eye" type="checkbox">
                    </div>
                </div>
                <br /><br />
                <input type="submit" class="btn-flat-border" value="ログイン">
                <br />初めてのご利用ですか?<a href="register.php">
                    <div class="log-set">新規登録はこちら</div>
                </a>
                <script>
                    const passwordToggle = document.querySelector('.js-password-toggle');
                    passwordToggle.addEventListener('change', function() {
                        const password = document.querySelector('.js-password'),
                            passwordLabel = document.querySelector('.js-password-label1');
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
            </form>
        </div>
        <!-- ページ最下部フッター -->
        <footer>
            <div class=footer1>
                <span class="footer-span"><a href="https://www.hamasen.ac.jp/dept/security/">&copy; R2 HAMAJO security&network</a></span>
                <span class="footer-span"><a href="help.php">お問い合わせ</a></span>
                <span class="footer-span"><a href="about.php">このサイトについて </a> </span> </div>
        </footer>
</body>

</html>