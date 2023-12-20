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
            align-item: center;
            width: 150px;
            height: 275px;
            overflow: scroll;
            margin: auto;
            box-shadow: 0 0 10px rgba(red, green, blue, 0.5);
        }

        h1 {
            text-align: center;
            animation: lighter 5s linear infinite; 
        }

        td {
           animation: lighter 5s linear infinite; 
        }

        @keyframes lighter {
            0% {
                color: red;
            }
            50% {
                color: rgba(255, 0, 0, random(0, 1));
            }
            100% {
                color: rgba(0, 0, 255, random(0, 1));
            }
        }

        table{
            margin: auto;
        }

        tr:hover{
            transform: scale(1.5);
            border: solid black;
        }
        
    </style>
</body>

</html>