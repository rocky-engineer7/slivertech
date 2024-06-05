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

        // 1. 文字列 'sliver' の文字数をPHPの関数を用いて出力して下さい。
        $s = "sliver";
        echo strlen($s) . "<br>";

        // 2. 1~10までのランダムの数値をPHPの関数を用いて出力して下さい。
        echo rand(1, 10) . "<br>";


        // 3.長方形の面積を求める関数を自作し、関数の戻り値を出力して下さい。
        // （縦を$height、横を$widthで定義）
        function rectangleAreaCalculator(int $height, int $width) : int {
            $result = $height * $width;
            return $result;
        }

        echo rectangleAreaCalculator(5, 4) . "<br>"; // 10

        // 4.円の面積を求める関数を自作し、関数の戻り値を出力して下さい。
        // （円周率は3で計算）
        // （半径$rで定義）

        function circleAreaCalculator(int $r) : int {
            $result = pow($r, 2) * 3;
            return $result;
        }

        echo circleAreaCalculator(5) . "<br>";
    ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
