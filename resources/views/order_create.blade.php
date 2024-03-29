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
<h2 style="text-align: center; margin-top: 60px">Добавление заказа</h2>
<form method="post" action="{{ url('orders') }}">
    @csrf
    <label>Имя</label>
    <input type="text" name="name" value="{{old('name')}}" />
    @error('name')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    <label>Фамилия</label>
    <input type="text" name="family" value="{{old('family')}}" />
    @error('family')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    <label>Email</label>
    <input type="email" name="email" value="{{old('email')}}" />
    @error('email')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    <label>Телефон</label>
    <input type="tel" name="phone" value="{{old('phone')}}" />
    @error('phone')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    <label>Комментарий</label>
    <input type="text" name="comment" value="{{old('comment')}}" />
    @error('comment')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    <label>Машина</label>
    <input type="text" name="car" value="{{old('car')}}" />
    @error('car')
    <div cclass="invalid-feedback">{{ $message }}</div>
    @enderror

    <input type="submit" value="Отправить">
</form>
</body>
</html>
@endsection
