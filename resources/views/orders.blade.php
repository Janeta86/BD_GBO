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
                        <td><a href="{{url('orders/destroy/'.$order->id)}}">Удалить</a>
                        <a href="{{url('orders/edit/'.$order->id)}}">Редактировать</a></td>
                    </tr>
        @endforeach
    </table>
@endif
{{ $orders->links() }}

