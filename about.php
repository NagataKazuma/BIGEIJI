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
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@1,300&display=swap" rel="stylesheet">
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
            width: 12em;
        }

        .floatall {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;

        }

        .product-name {
            font-family: 'Source Code Pro', monospace;
        }
    </style>

    <script type="text/javascript">
        // 設定開始（スクロールの動きを設定してください）

        var speed = 20; // スクロールのスピード（1に近いほど速く）
        var move = 1; // スクロールのなめらかさ（1に近いほどなめらかに）

        // 設定終了


        // 初期化
        var x = 0;
        var y = 0;
        var nx = 0;
        var ny = 0;

        function scroll() {

            window.scrollBy(0, move); // スクロール処理

            var rep = setTimeout("scroll()", speed);

            // スクロール位置をチェック（IE用）
            if (document.all) {

                x = document.body.scrollLeft;
                y = document.body.scrollTop;

            }
            // スクロール位置をチェック（NN用）
            else if (document.layers || document.getElementById) {

                x = pageXOffset;
                y = pageYOffset;

            }

            if (nx == x && ny == y) { // スクロールし終わっていたら処理を終了
                // トップページへ自動遷移
                // location.href = "http://localhost/sotuken/top.php";

                clearTimeout(rep);

            } else {

                nx = x;
                ny = y;

            }

        }
    </script>
</head>

<body onLoad="scroll()">
    <!-- 音楽再生 -->
    <!-- <audio src="img/amatsuki.mp3" autoplay loop></audio> -->
    <div class="wrapper">
        <!-- ページトップに戻す描写 -->
        <div id="page_top"><a href="#"></a></div>
        <!-- ローディング画面 -->
        <!-- <script>
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
        <!-- <div id="loader-bg">
            <img src="img/loading.gif">
        </div>
        <script>
            jQuery(window).on('load', function() {
                jQuery('#loader-bg').hide();
            });
        </script> -->


        <body>

            <br />
            <div class=top_text>
                <div class="about-font">
                    Production　<span class="product-name" style="border-bottom: solid 2px;">BIG,AG</span></span><br /><br /><br /><br />
                    Project member<br /><br />
                    <span class="Postion">Art director</span><span class="Name">Toduka Minami</span><br />
                    <span class="Postion">Video editor</span><span class="Name">Nagata Kazuma</span><br />
                    <span class="Postion">Development of SQL</span><span class="Name">Hayase Kaito</span><br />
                    <span class="Postion">Project Planning</span><span class="Name">Oshiro Eiji</span><br />
                    <span class="Postion">Special Thanks</span><span class="Name">null</span><br /><br /><br />
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
                    <div class="floatall">
                        <div class="floattest"><span class="soft">Software platforms</span><span class="soft-name">Github</span></div>
                        <div class="floattest"><span class="soft">Group ware</span><span class="soft-name">Discord Slack</span></div>
                    </div>
                    <div class="floatall">
                        <div class="floattest"><span class="soft">Library</span><span class="soft-name">jQuery</span></div>
                        <div class="floattest"><span class="soft">WebGIS</span><span class="soft-name">Google Maps</span></div>
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
            <a href="https://www.hamasen.ac.jp/dept/security/">所属 &copy; Hamamatsu Professional Traning College of infomation Technology security&network</a>
    </footer>
</body>

</html>