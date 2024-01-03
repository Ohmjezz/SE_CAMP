<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multiple table</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            background-color: rgb(216, 233, 240);
        }

        h1{
            text-align: center;
        }

        form{
            text-align: center;
        }

        .container{
            border-radius: 25px;
            background-color: skyblue;
            height: 350px;
            margin: auto;
            width: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .table{
            background-color: rgb(186, 226, 241);
            height: 300px;
            width: 150px;
            margin: auto;
            overflow: scroll;
        }

        p:hover{
            color: rebeccapurple;
            transform: translate(10px);
        }

    </style>
</head>
<body>
    <br>

    <h1>Multiple table
        @if(isset($_POST['input']) && preg_match("/[0-9]/" , $_POST['input'] , $matches))
        of
        <?php $my_number = sprintf("%d" , $_POST['input'])?>
        {{ $my_number }}
        @endif
    </h1>
    <br>

    <form action="/my-multiple" method="post">
        @csrf
        <input type="number" name="input" id="">
        <button type="submit">submit</button>
    </form>

    <br>
    <div class="container">
        <div class="table">
            @if(isset($_POST['input']) && preg_match("/[0-9]/" , $_POST['input'] , $matches))
                @for($i = 1; $i <= 24 ; $i++)
                    <p>{{ $my_number }} x {{ $i }} = {{ $i * $my_number }}</p>
                @endfor
            @endif
        </div>
    </div>
</body>
</html>
