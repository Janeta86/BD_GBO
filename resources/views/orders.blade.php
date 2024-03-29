@extends('layout')
@section('content')
    <div class="container">
        <h2 style="text-align: center; margin-top: 70px">{{$orders ? "Список заказов": 'Неверный ID заказа' }}</h2>
        @if($orders)
            <div class="table-responsive" style="max-width: 1000px; margin: auto">
                <table class="table table-bordered mx-10" style=";">
                    <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Дата</th>
                        <th>Время</th>
                        <th>Пользователь</th>
                        <th>Машина</th>
                        <th>Статус</th>
                        <th>Исполнитель</th>
                        <th>Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->date}}</td>
                            <td>{{$order->time}}</td>
                            <td>{{$order->id_user}}</td>
                            <td>{{$order->car}}</td>
                            <td>{{$order->status}}</td>
                            <td>{{$order->id_executer}}</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="{{url('orders/edit/'.$order->id)}}">Редактировать</a>
                                <a class="btn btn-sm btn-danger" href="{{url('orders/destroy/'.$order->id)}}">Удалить</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif
        {{ $orders->links() }}
    </div>
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
@endsection
