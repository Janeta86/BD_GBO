@extends('layout')

@section('content')
    @if(!Auth::user())
        <style>
            .is-invalid {
                color: red;
            }
        </style>
        <div class="container mt-4" style="padding: 15%;">
            <h2 style="text-align: center; color:darkgray">Авторизация</h2>
            <div class="form-background d-flex justify-content-center">
                <form class="d-flex flex-column" method="post" action={{url('auth')}}>
                    @csrf

                    <div class="mb-3">
                        <input class="form-control w-auto" type="text" placeholder="Логин" name="email" value="{{old('email')}}"/>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input class="form-control w-auto" type="password" placeholder="Пароль" name="password" id="password" >
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-outline-success">Войти</button>
                </form>
            </div>
        </div>

    @else
        <style>
            .user-info {
                display: inline-block;
                vertical-align: middle;
                margin-left: 10px;
                font-size: 20px;
            }

            .user-name {
                font-size: 20px;
                font-weight: bold;
                color: black;
            }

            .user-email,
            .user-id {
                font-size: 20px;
                color: black;
            }
        </style>
        <ul class="navbar-nav">
            <div class="logout">
                <a class="nav-link active" href="/login">
                    <i class="fa fa-user" style="padding: 130px; color: black"></i>
                    <div class="user-info" style="color: black">
                        <span >Здравствуйте,</span>
                        <strong class="user-name">{{Auth::user()->name}} {{Auth::user()->family}}</strong>
                        <div>
                            <p>Email: <span class="user-email">{{ Auth::user()->email }}</span></p>
{{--                            <p>ID:<span class="user-id">{{ Auth::user()->id }}</span></p>--}}
                        </div>
                    </div>
                </a>
            </div>
        </ul>
    @endif
@endsection
