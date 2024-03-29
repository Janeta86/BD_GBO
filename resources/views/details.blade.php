@extends('layout')
@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Orders List</title>
</head>
<body>
{{--<h2>{{$details}}</h2>--}}
<table border="1">
    <thead>
    <td>id</td>
    <td>имя</td>
    <td>описание</td>
    <td>стоимость</td>
    </thead>
    @foreach ($details as $detail)
        <tr>
            <td>{{$detail->id}}</td>
            <td>{{$detail->name}}</td>
            <td>{{$detail->desription}}</td>
            <td>{{$detail->cost}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
@endsection
