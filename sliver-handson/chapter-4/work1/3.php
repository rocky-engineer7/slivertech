<!DOCTYPE html>
<html lang="ja">
<head>
    <title>課題4-1-3</title>
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

        // $x,$numを定義
        $x = 150;
        $num = 10;

        // 1. if文を用いて、$xが100より大きい場合に、’変数xは100より大きいです’ と出力して下さい
        if ($x > 100) {
            echo "変数xは100より大きいです" . "<br>";
        }


        // 2. if-else文を用いて、$xが10以上の場合は、’変数xは10以上です’$xが10より小さい場合は、’変数xは10より小さい’と出力して下さい。
        if ($x >= 10) {
            echo "変数xは10以上です" . "<br>";
        } else {
            echo "変数xは10より小さい" . "<br>";
        }

        /*
        3. if-elseif-else文を用いて、以下の条件を満たすコードを書いてください。
            $xが3の倍数の場合は '変数xは3の倍数ですが、7の倍数ではありません'
            $xが7の倍数の場合は '変数xは7の倍数ですが、3の倍数ではありません'
            $xが3の倍数かつ7の倍数の場合は '変数xは3の倍数かつ7の倍数です。'
            それ以外の場合は 'xは7の倍数でも3の倍数でもありません。'
            と出力する
        */

        if ($x % 3 == 0 && $x % 7 == 0) {
            echo "変数xは3の倍数かつ7の倍数です" . "<br>";
        } elseif ($x % 7 == 0) {
            echo "変数xは7の倍数ですが、3の倍数ではありません" . "<br>";
        } elseif ($x % 3 == 0) {
            echo "変数xは3の倍数ですが、7の倍数ではありません" . "<br>";
        } else {
            echo "xは7の倍数でも3の倍数でもありません" . "<br>";
        }

        /*
        4. switch文を用いて、以下の条件を満たすコードを書いてください。
            $numを3で割った余りの数が0の場合は '余りは０です。'
            1の場合は '余りは1です。'、
            2の場合は '余りは2です。'
            それ以外の場合は '値が不正です。'
            と出力する
        */

        switch ($num % 3) {
            case 0 :
                echo "余りは０です。" . "<br>";
                break;
            case 1 :
                echo "余りは1です。" . "<br>";
                break;
            case 2 :
                echo "余りは2です。" . "<br>";
                break;
            default:
                echo "値が不正です。" . "<br>";
                break;
        }

    ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
