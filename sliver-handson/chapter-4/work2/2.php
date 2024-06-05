<?php
/*
    # アルゴリズム課題の注意点
    アルゴリズムではこれまでのように調べる力ではなく物事を論理的に考える力が必要です。
    検索して答えを探して解いても考える力には繋がりません。
    まずは検索に頼らずに自分で処理手順を考えてみましょう。


    # 課題
    以下は3人でじゃんけんをした際の勝敗を判定するプログラムです。
    関数「janken」に3人が出した手を渡すと勝敗を返すプログラムを記載してください。
*/

function janken($a, $b, $c) {
    $hands = ['グー' => 0, 'チョキ' => 1, 'パー' => 2];
    $results = [$hands[$a], $hands[$b], $hands[$c]];

    // 各手の出現回数を計算
    $count = array_count_values($results);

    // 全員異なる手か全員同じ手の場合は引き分け
    if (count($count) === 3 || count($count) === 1) {
        return "引き分けです。";
    }

    // 勝者を決定
    $winner = [];
    // グーの勝ち判定
    if (isset($count[$hands['グー']]) && (!isset($count[$hands['パー']]) || $count[$hands['パー']] == 0)) {
        foreach ($results as $index => $result) {
            if ($result === $hands['グー']) {
                $winner[] = $index;
            }
        }
    }
    // チョキの勝ち判定
    if (isset($count[$hands['チョキ']]) && (!isset($count[$hands['グー']]) || $count[$hands['グー']] == 0)) {
        foreach ($results as $index => $result) {
            if ($result === $hands['チョキ']) {
                $winner[] = $index;
            }
        }
    }
    // パーの勝ち判定
    if (isset($count[$hands['パー']]) && (!isset($count[$hands['チョキ']]) || $count[$hands['チョキ']] == 0)) {
        foreach ($results as $index => $result) {
            if ($result === $hands['パー']) {
                $winner[] = $index;
            }
        }
    }

    // 勝者の名前を返す
    $playerNames = ['Aさん', 'Bさん', 'Cさん'];
    $winningPlayers = array_map(function ($index) use ($playerNames) {
        return $playerNames[$index];
    }, $winner);

    return empty($winningPlayers) ? "引き分けです。" : "勝者は" . implode("と", $winningPlayers) . "です。";
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>じゃんけんプログラム</title>
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
        <h1>じゃんけんぽん！</h1>
        <!-- ここから表示する処理を記載 -->
        <?php
            // 勝者なし
            $result = janken('グー', 'パー', 'チョキ');
            echo "<p>{$result}</p>";

            // 勝者1人
            $result = janken('グー', 'パー', 'グー');
            echo "<p>{$result}</p>";

            // 勝者2人
            $result = janken('チョキ', 'パー', 'チョキ');
            echo "<p>{$result}</p>";

            // 勝者1人
            $result = janken('チョキ', 'チョキ', 'グー');
            echo "<p>{$result}</p>";

            // 勝者1人
            $result = janken('パー', 'グー', 'グー');
            echo "<p>{$result}</p>";

            // 勝者2人
            $result = janken('チョキ', 'グー', 'グー');
            echo "<p>{$result}</p>";
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
