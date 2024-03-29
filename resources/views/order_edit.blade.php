@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-01</title>
    <style>
        .is-invalid {
            color: red;
        }

        form {
            width: 50%;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-top: 20px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        input[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
<h2 style="text-align: center; margin-top: 60px">Редактирование заказа</h2>
<form method="post" action="{{ url('orders/update/'.$user->id) }}">
    @csrf
    <label>Имя</label>
    <input type="text" name="name" value="@if (old('name')) {{old('name')}} @else {{$user->name}} @endif" />
    @error('name')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    <br>
    <br>
    <label>Фамилия</label>
    <input type="text" name="family" value="@if (old('family')) {{old('family')}} @else{{$user->family}} @endif "/>
    @error('family')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    <br>
    <br>
    <label>Email</label>
    <input type="text" name="email" value="@if (old('email')) {{old('email')}} @else{{$user->email}} @endif "/>
    @error('email')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    <br>
    <br>
    <label>Телефон</label>
    <input type="text" name="phone" value="@if (old('phone')) {{old('phone')}} @else{{$user->phone}} @endif "/>
    @error('phone')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    <br>
    <br>
    <label>Комментарий</label>
    <input type="text" name="comment" value="@if (old('comment')) {{old('comment')}} @else{{$user->comment}} @endif "/>
    @error('comment')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    <br>
    <br>
    <label>Машина</label>
    <input type="text" name="car" value="@if (old('car')) {{old('car')}} @else{{$order->car}} @endif "/>
    @error('car')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    <br>
    <br>
    <input type="submit">
</form>
</body>
</html>
@endsection
