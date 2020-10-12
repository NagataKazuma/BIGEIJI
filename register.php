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
    <script type="text/javascript" src="js/zxcvbn.js"></script>
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

<body background="img/canele.jpg">
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
        <div class="test50">

            <div class=top_logtext>アカウントを作成</div>
            <!-- 10月6日　ログイン作成（テンプレ） -->
            <br />
            <form method="post" action="login_add_check.php" onsubmit="return passcheck()">
                <div class="log-set">
                    <div class="mail icon"></div>メールアドレス
                </div>
                <input type="email" name="mail" id="mail" style="width:300px" placeholder="E-Mail address" required><br />
                <div class="log-set">
                    <br />
                    <div class="key2 icon"></div>パスワード
                </div>
                <div class="toggle">
                    <input type="password" class="field js-password" id="password" onInput="func1()" name="pass" style="width:300px" placeholder="半角英数字８文字と強度レベル３以上" required>
                    <label id="label22" class="btn-label js-password-label" for="eye"><i class="fas fa-eye"></i></label>
                    <div class="btn">
                        <input class="btn-input js-password-toggle" id="eye" type="checkbox">
                    </div>
                </div>
                <script language="javascript" type="text/javascript">
                    function func1() {
                        var input_message = document.getElementById("password").value;
                        var zxc = zxcvbn(input_message);
                        this.score = zxc.score;
                        var test = this.score;
                        document.getElementById("output_message").innerHTML = "強度レベル:" + test;
                        if (test == "0") {
                            let p = document.getElementById('output_message');
                            p.className = 'output-0';
                        }

                        if (test == "1") {
                            let p = document.getElementById('output_message');
                            p.className = 'output-1';
                        }
                        if (test == "2") {
                            let p = document.getElementById('output_message');
                            p.className = 'output-2';
                        }
                        if (test == "3") {
                            let p = document.getElementById('output_message');
                            p.className = 'output-3';
                        }
                        if (test == "4") {
                            let p = document.getElementById('output_message');
                            p.className = 'output-4';
                        }
                    }

                    function passcheck() {
                        const pass1 = document.getElementById('password').value;
                        const pass2 = document.getElementById('password2').value;
                        const mailadd = document.getElementById('mail').value;
                        const strlen = pass1.length
                        const result_int = pass1.match(/\d{1,20}/); //matchではtrueのときnullが返る"/d"が数字
                        const result_str = pass1.match(/\w{1,20}/); //"/w"が文字str
                        const zxc = zxcvbn(pass1);
                        var score = zxc.score;
                        if (result_int != null && result_str != null && pass1 == pass2 && strlen >= "8" && score >= "3") {

                            ; //条件を満たした時何もしない【成功】、この場合パスワード1とパスワード2が同じであり文字数が8以上かつ半角英数字どちらも含む時、zxcvbnでスコア3以上

                        } else if (pass1 == mailadd) {
                            alert("セキュリティ警告※メールアドレスをパスワードに使わないでください");
                            return false;
                        } else {
                            alert("パスワードの条件が満たされていない、また2つのパスワードが異なっています");
                            return false;
                        }
                    }
                </script>
                <div class="output-0" id="output_message">強度レベル:0</div>
                <div class="log-set">
                    <br />
                    <div class="key icon"></div>もう一度パスワードを入力してください。
                </div>
                <input type="password" class="field js-password" id="password2" name="pass2" style="width:300px" placeholder="確認用" required><br />
                <br />
                <input type="submit" class="btn-flat-border" value="アカウントを作成する">
                <br />アカウントをお持ちですか?<a href=" login.php">
                    <div class="log-set">ログインはこちら</div>
                </a>
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
        </div>
        <!-- ページ最下部フッター -->
        <footer>
            <div class=footer1>
                <span class="footer-span"><a href="https://www.hamasen.ac.jp/dept/security/">&copy; R2 HAMAJO security&network</a></span>
                <span class="footer-span"><a href="http://localhost/sotuken/help.php">お問い合わせ</a></span>
                <span class="footer-span"><a href=http://localhost/sotuken/about.php>このサイトについて </a> </span> </div> </footer> </body> </html>