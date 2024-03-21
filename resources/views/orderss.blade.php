<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Orders List</title>
</head>
<body>
<h2>{{$orderss ? "Список заказов": 'Неверный ID заказа' }}</h2>
    <table border="1">
        <thead>
        <td>id</td>
        <td>дата</td>
        <td>время</td>
        <td>пользователь</td>
        <td>машина</td>
        <td>статус</td>
        <td>исполнитель</td>
        </thead>
        @foreach ($orderss as $orderr)
            <tr>
                <td>{{$orderr->id}}</td>
                <td>{{$orderr->date}}</td>
                <td>{{$orderr->time}}</td>
                <td>{{$orderr->id_user}}</td>
                <td>{{$orderr->car}}</td>
                <td>{{$orderr->status}}</td>
                <td>{{$orderr->id_executer}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
