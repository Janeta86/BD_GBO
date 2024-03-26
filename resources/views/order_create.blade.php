<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-01</title>
    <style> .is-invalid {color: red;} </style>
</head>
<body>
<h2>Добавление заказа</h2>
<form method="post" action="{{ url('orders') }}">
    @csrf
    <label>Имя</label>
    <input type="text" name="name" value="{{old('name')}}" />
    @error('name')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <br>
    <label>Фамилия</label>
    <input type="text" name="family" value="{{old('family')}}" />
    @error('family')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <br>
    <label>Email</label>
    <input type="text" name="email" value="{{old('email')}}" />
    @error('email')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <br> <label>Телефон</label>
    <input type="text" name="phone" value="{{old('phone')}}" />
    @error('phone')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <br>
    <label>Комментарий</label>
    <input type="text" name="comment" value="{{old('comment')}}" />
    @error('comment')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <br>
    <label>Машина</label>
    <input type="text" name="car" value="{{old('car')}}" />
    @error('car')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <br>
    <input type="submit">
</form>
</body>
</html>
