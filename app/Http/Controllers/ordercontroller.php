<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\User;

class ordercontroller extends Controller
{
    public function index()
    {
        return view('orders', [
            'orders' => order::all()
        ]);
    }

    public function show(string $id)
    {
        return view( 'orderss', [
        'orderss' => User::all()->where( 'id', $id)->first()->order()->get()
        ]);
    }
}


