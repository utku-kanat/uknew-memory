<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Rastgele Sayı Tablosu</title>
    <style>
        body {
            background-color: #fafafa;
            font-family: Verdana, sans-serif;
        }
        .wrapper {
            width: 800px;
            margin: 50px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #2563eb;
        }
        form {
            text-align: center;
            margin-bottom: 25px;
        }
        input {
            width: 100px;
            padding: 6px;
            margin: 0 5px;
        }
        table {
            margin: auto;
            border-collapse: collapse;
        }
        td {
            border: 1px solid #999;
            padding: 10px;
            background-color: #e0f2fe;
        }
    </style>
</head>
<body>

<div class="wrapper">
    <h2>Rastgele Sayı Tablosu</h2>

    <form action="" method="post">
        Satır:
        <input type="number" name="r" required min="1">

        Sütun:
        <input type="number" name="c" required min="1">

        <input type="submit" value="Oluştur">
    </form>

    <?php
    if (!empty($_POST)) {
        $r = $_POST["r"];
        $c = $_POST["c"];

        echo "<table>";
        for ($i = 1; $i <= $r; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $c; $j++) {
                $random = mt_rand(1, 100);
                echo "<td>$random</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</div>

</body>
</html>