<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php
        // ソート関数を定義
        function sort_2way($array, $order) {
            if ($order) {
                sort($array); // 昇順ソート
            } else {
                rsort($array); // 降順ソート
            }
            return $array;
        }

        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];

        // 昇順ソート
        echo "昇順ソート:<br>";
        $sorted_nums = sort_2way($nums, true);
        foreach ($sorted_nums as $num) {
            echo $num . "<br>";
        }

        // 降順ソート
        echo "<br>降順ソート:<br>";
        $sorted_nums = sort_2way($nums, false);
        foreach ($sorted_nums as $num) {
            echo $num . "<br>";
        }
        ?>
    </p>
</body>
</html>
