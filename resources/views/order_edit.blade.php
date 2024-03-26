<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-01</title>
    <style> .is-invalid {color: red;} </style>
</head>
<body>
<h2>Редактирование заказа</h2>
<form method="post" action="{{ url('orders/update/'.$user->id) }}">
    @csrf
    <label>Имя</label>
    <input type="text" name="name" value="@if (old('name')) {{old('name')}} @else {{$user->name}} @endif" />
    @error('name')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <br>
    <label>Фамилия</label>
    <input type="text" name="family" value="@if (old('family')) {{old('family')}} @else{{$user->family}} @endif "/>
    @error('family')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <br>
    <label>Email</label>
    <input type="text" name="email" value="@if (old('email')) {{old('email')}} @else{{$user->email}} @endif "/>
    @error('email')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <br>
    <label>Телефон</label>
    <input type="text" name="phone" value="@if (old('phone')) {{old('phone')}} @else{{$user->phone}} @endif "/>
    @error('phone')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <br>
    <label>Комментарий</label>
    <input type="text" name="comment" value="@if (old('comment')) {{old('comment')}} @else{{$user->comment}} @endif "/>
    @error('comment')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <br>
    <label>Машина</label>
    <input type="text" name="car" value="@if (old('car')) {{old('car')}} @else{{$order->car}} @endif "/>
    @error('car')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <br>
    <input type="submit">
</form>
</body>
</html>
