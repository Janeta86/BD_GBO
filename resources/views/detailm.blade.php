@extends('layout')
@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Orders List</title>
</head>
<body>
<table border="1">
    <h1>Детали заказа</h1>
    <thead>
    <td>Номер заказа</td>
    <td>Название товара</td>
    <td>Описание</td>
    <td>Стоимость</td>
    <td>Количество</td>
    </thead>
{{--    @if ($orderm)--}}
    @foreach ($detailm->detai as $deta)
        <tr>
            <td> {{ $deta->id }}</td>
            <td> {{ $deta->name }}</td>
            <td> {{ $deta->desription }}</td>
            <td> {{ $deta->cost }}</td>
            <td> {{ $deta->pivot->quantity }}</td>
        </tr>
    @endforeach
        <h2>{{"Итого: ".$total->total}}</h2>
{{--    @endif--}}
</table>
</body>
</html>
@endsection

