<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- サイトタイトル -->
    <title>about</title>
    <!-- 規定値 -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- ローディング画面実装jsリンク -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- CSSリンク -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:700 rel=" stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Homemade+Apple rel=" stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC rel=" stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand rel=" stylesheet">
    <!-- アバウト用スタイルシート -->
    <style type="text/css">
        .about-font {
            color: #ffffff;
            text-align: center;
        }

        body {
            background-color: rgb(0, 0, 0);
        }

        .footer a {
            color: #ffffff;
        }

        .Postion {
            color: rgb(192, 192, 192);
            display: inline-block;
            width: 12em;
        }

        .Name {
            display: inline-block;
            width: 12em;
        }

        #menu {
            list-style-type: none;
            width: auto;
            height: 70px;
            margin: 0%;
            background: rgb(0, 0, 0);
            /* border-bottom: solid 5px #4c4d4e; */
        }

        #menu li ul li a {
            padding: 10px 12px;
            background: rgb(0, 0, 0);
            text-align: center;
            font-size: 16px;
            font-weight: normal;
        }

        #menu li:hover>a {
            background: rgb(0, 0, 0);
            color: #e0dc62;
        }

        .floattest {
            display: flex;
            flex-direction: column;
            font-size: 25px;
            padding-left: 100px;
            padding-right: 100px;
            padding-bottom: 40px;


        }

        .soft {
            color: rgb(192, 192, 192);
        }

        .floatall {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;

        }
    </style>
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
        <ul id="menu">
            <li><a href="http://localhost/sotuken/top.php?movie_title">
                    <div class="title-font"> Canelé Films</div>
                </a></li>
        </ul>


        <body>

            <br />
            <div class=top_text>
                <div class="about-font">
                    Production　BIG,AG<br /><br /><br />Crew<br /><br />
                    <span class="Postion">Art director</span><span class="Name">Minami</span><br />
                    <span class="Postion">Video editor</span><span class="Name">Nagata</span><br />
                    <span class="Postion">Project Planning</span><span class="Name">Oshiro</span><br />
                    <span class="Postion">Development of SQL</span><span class="Name">Hayase</span><br />
                    <span class="Postion">Special Thanks</span><span class="Name">???????</span><br /><br /><br />
                    Development Environment<br /><br />
                    <div class="floatall">
                        <div class="floattest"><span class="soft">Text editor</span><span class="soft-name">Visual Studio Code</span></div>
                        <div class="floattest"><span class="soft">Movie database</span><span class="soft-name">The Movie Database</span></div>
                    </div>
                    <div class="floatall">
                        <div class="floattest"><span class="soft">Web app package</span><span class="soft-name">XAMPP</span></div>
                        <div class="floattest"><span class="soft">development language</span><span class="soft-name">PHP JS HTML SQL</span></div>
                    </div>
                    <div class="floatall">
                        <div class="floattest"><span class="soft">Reference site</span><span class="soft-name">Qiita</span></div>
                        <div class="floattest"><span class="soft">Source of photo</span><span class="soft-name">GIFER</span></div>
                    </div>
                    <br /><br /><a href="http://localhost/sotuken/top.php?movie_title"><img src="img/fin.jpg"></a>
                </div>
            </div>


    </div>
    <div class="push"></div>
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <!-- ページ最下部フッター -->
    <footer>
        <div class=footer>
            <a href="https://www.hamasen.ac.jp/dept/security/">所属 &copy; R2 HAMAJO security&network</a>
    </footer>
</body>

</html>