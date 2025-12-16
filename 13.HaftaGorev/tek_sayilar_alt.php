<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Tek Sayılar</title>
    <style>
        body {
            background-color: #1e293b;
            color: #f8fafc;
            font-family: Tahoma, sans-serif;
            padding: 40px;
        }
        .box {
            max-width: 700px;
            margin: auto;
            background: #334155;
            padding: 25px;
            border-radius: 10px;
        }
        h1 {
            text-align: center;
            color: #38bdf8;
        }
        span {
            display: inline-block;
            margin: 5px;
            padding: 6px 10px;
            background: #0f172a;
            border-radius: 6px;
        }
    </style>
</head>
<body>

<div class="box">
    <h1>1 - 100 Arası Tek Sayılar</h1>

    <?php
    for ($sayi = 1; $sayi <= 100; $sayi++) {
        if ($sayi % 2 != 0) {
            echo "<span>$sayi</span>";
        }
    }
    ?>
</div>

</body>
</html>