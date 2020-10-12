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
                    <li><a href="#">お気に入り映画</a></li>
                    <li><a href="#">掲示板</a></li>
                </ul>
            </li>
            <li><a href="#">Login▼</a>
                <ul>
                    <li class="test100"><a href="login.php">ログイン</a></li>
                    <li class="test100"><a href="register.php">新規登録</a></li>
                </ul>
            </li>
        </ul>
        <!-- 10月6日　ログイン認証 -->
        <?php

        try {
            require_once('../common/common.php');

            $post = sanitize($_POST);
            $email_mail = $post['mail'];
            $password_pass = $post['pass'];


            $dsn = 'mysql:dbname=shop;host=localhost:3307;charset=utf8';
            $user = 'root';
            $password = '';
            $dbh = new PDO($dsn, $user, $password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "INSERT INTO user_deta (email,password) VALUES (?,?)";
            $stmt = $dbh->prepare($sql);
            $data[] = $email_mail;
            $data[] = $password_pass;
            $stmt->execute($data);

            $dbh = null;

            print $email_mail;
            print 'を追加しました。<br />';
            echo '<div class=already>自動でログイン画面に移行します。</div>
            <script type="text/javascript">
            setTimeout("redirect()", 1000);
            function redirect() {
            location.href="login.php";
            }
            </script>';
        } catch (Exception $e) {
            echo '<div class=already>入力されたメールアドレスは既に登録済みです。</div>';
            echo '<div class=already>自動で会員登録画面に戻ります。</div>
            <script type="text/javascript">
            setTimeout("redirect()", 1000);
            function redirect() {
            location.href="register.php";
            }
            </script>';
            exit();
        }

        ?>

        <a href="login.php">ログインへ</a>
        <a href="logout.php">ログアウト</a><br />

</html>


<!-- ページ最下部フッター -->
<footer>
    <div class=footer1>
        <span class="footer-span"><a href="https://www.hamasen.ac.jp/dept/security/">&copy; R2 HAMAJO security&network</a></span>
        <span class="footer-span"><a href="help.php">お問い合わせ</a></span>
        <span class="footer-span"><a href=about.php>このサイトについて </a> </span> </div>
</footer>
</body>

</html>