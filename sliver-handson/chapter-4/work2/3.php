<?php
function calculateChange($money, $product) {
    $change = $money - $product;
    $denominations = [5000, 1000, 500, 100, 50, 10, 5, 1];
    $changeDetails = [];

    foreach ($denominations as $denomination) {
        $count = intdiv($change, $denomination);
        $change %= $denomination;
        if ($count > 0) {
            $changeDetails[$denomination] = $count;
        }
    }

    return $changeDetails;
}

// changeBreakDown関数はお釣りの内訳を受け取り、それをフォーマットして返す
function changeBreakDown($changeDetails) {
    $result = "";
    foreach ($changeDetails as $denomination => $count) {
        $result .= "{$denomination}円: {$count}枚<br>";
    }
    return $result;
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>おつり計算プログラム</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">目次に戻る</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="#">4-1課題</a>
                    <a class="nav-link" href="#">4-2課題</a>
                    <a class="nav-link" href="#">4-3課願</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="m-5">
        <h1>お会計です！</h1>
        <?php
            $changeDetails = calculateChange(10000, 1111);
            echo changeBreakDown($changeDetails);
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
