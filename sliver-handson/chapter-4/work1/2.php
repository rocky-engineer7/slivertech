<!DOCTYPE html>
<html lang="ja">
<head>
    <title>課題4-1-2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost">目次に戻る</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="http://localhost/work1">4-1課題</a>
                    <a class="nav-link" href="http://localhost/work2">4-2課題</a>
                    <a class="nav-link" href="http://localhost/work3">4-3課題</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="m-5">

    <?php
        /*
            # 課題
            以下の指示を満たすコードを書いてください。
            ※各設問の回答の最後には改行を入れましょう。
            (改行がないと出力した時に横一列で表示されるため見づらくなります。)
            <br>タグをHTMLとして出力することで改行ができます。
        */

        // 1. $sumという変数を作り、8 + 9を代入し、出力して下さい。
        $sum = 8 + 9;
        echo $sum . "<br>";

        // 2. $x に5を代入し、$xに10を足した値を出力して下さい。
        $x = 5;
        $x += 10;
        echo $x . "<br>";

        // 3. $y に10を代入し、$yを3で割った余りを出力して下さい。
        $y = 10;
        $y %= 3;
        echo $y . "<br>";

        // 4. 文字列 Hello と文字列 World ! を連結し出力して下さい。
        echo "Hello" . "World ! " . "<br>";

        // 5. 以下の赤文字の内容を出力して下さい。○の箇所は変数で定義し、変数の値によって内容を変更できる様にして下さい。（変数名や値は任意）
        //     出力例)  数学の点数は○点です。
        $num = 100;
        echo "数学の点数は{$num}点です。". "<br>";


    ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
