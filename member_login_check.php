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
        <!-- ページ上部のリスト -->


        <body>
            <!-- ページ上部のリスト -->
            <div class="title-font"><a href="top.php?movie_title">
                    <img src="img/icon2.png">
                </a></div>
            <ul id="menu">
                <li><a href="#">Search▼</a>
                    <ul>
                        <li><a href="movie_search.php?movie_title#">映画を探す</a></li>
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
                <li><a href="#">Login▼</a>
                    <ul>
                        <li class="test100"><a href="login.php">ログイン</a></li>
                        <li class="test100"><a href="register.php">新規登録</a></li>
                    </ul>
                </li>
            </ul>
            <!-- 10月6日　ログイン作成（テンプレ） -->
            <?php
            ini_set('display_errors', 0);
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

                $sql = 'SELECT id,password,email FROM user_deta WHERE email=?';
                $stmt = $dbh->prepare($sql);
                $data[] = $email_mail;
                $stmt->execute($data);

                $rec = $stmt->fetch(PDO::FETCH_ASSOC);
                $db_pass = $rec['password'];
                if (!password_verify($password_pass, $db_pass)) {

                    echo '<div class=already>メールアドレスまたはパスワードが違います。</div>';
                    echo '  <br/>
                            自動でログインページに戻ります。
                            <script type="text/javascript">
                            setTimeout("redirect()", 1000);
                            function redirect() {
                            location.href="login.php";
                            }
                            </script>';
                } else { //ログイン成功後、画面が切り替わる記述[秒数単位ミリ]
                    if(!isset($_SESSION)){
                        session_start();
                        }
                    $_SESSION['login'] = 1;
                    $_SESSION['email_mail'] = $email_mail;
                    echo '  <div class="top_text">ログインに成功しました<br/>
                            自動でページが切り替わります。</div>
                            <script type="text/javascript">
                            setTimeout("redirect()", 1000);
                            function redirect() {
                            location.href="top.php";
                            }
                            </script>';
                    exit;
                }

                $dbh = null;

                $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            } catch (Exception $e) {
                print 'ただいま障害により大変ご迷惑をお掛けしております。';
                exit();
            }
            ?>
            <br />
        </body>

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