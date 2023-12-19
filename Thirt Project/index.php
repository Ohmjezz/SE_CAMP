<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php $multi_x = 2; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
    <div class="box">
        <table>
            <tbody>
                <?php
                for ($i=1; $i <= 24; $i++) { 
                    $result = $multi_x * $i;
                    echo "<tr>
                        <td> $multi_x </td>
                        <td>x</td>
                        <td> $i </td>
                        <td>=</td>
                        <td> $result </td>
                        </tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
    <style>
        .box { 
            width: 150px;
            height: 275px;
            overflow: scroll;
        }
    </style>
</body>

</html>