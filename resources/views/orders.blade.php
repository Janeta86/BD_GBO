<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Orders List</title>
</head>
<body>
<h2>{{$orders ? "Список заказов": 'Неверный ID заказа' }}</h2>
@if($orders)
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
                    @foreach ($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->date}}</td>
                        <td>{{$order->time}}</td>
                        <td>{{$order->id_user}}</td>
                        <td>{{$order->car}}</td>
                        <td>{{$order->status}}</td>
                        <td>{{$order->id_executer}}</td>
                    </tr>
        @endforeach
    </table>
@endif
</body>
</html>
