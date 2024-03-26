<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class ordercontroller extends Controller
{
    public function index()
    {
        return view('orders', [
            'orders' => order::all()
        ]);
    }

//    public function show(string $id)
//    {
//        return view( 'orderss', [
//        'orderss' => User::all()->where( 'id', $id)->first()->order()->get()
//        ]);
//    }

    public function create()
    {
        return view('order_create', [
            'orders'=> Order::all()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'family' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'comment' => 'string',
            'car' => 'required',
        ]);

        $user = User::where('name', $validated['name'])
            ->where('family', $validated['family'])
            ->where('email', $validated['email'])
            ->where('phone', $validated['phone'])
            ->where('comment', $validated['comment'])
            ->first();

        if (!$user) {
            $user = new User([
                'name' => $validated['name'],
                'family' => $validated['family'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'comment' => $validated['comment'],
            ]);
            $user->save();
        }

        $order = new Order([
            'id_user' => $user->id,
            'car' => $validated['car'],
            'status' => 'pending',
        ]);

        $order->save();
        return redirect('/orders');
    }

    public function edit(string $id)
    {

        return view('order_edit', [
            'user' => User::where('id', $id)->first(),
            'order' => Order::select('car')->where('id', $id)->first()
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'family' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'comment' => 'string',
            'car' => 'required',
        ]);
        $user=User::all()->where('id',$id)->first();
        $user->name = $validated['name'];
        $user->family = $validated['family'];
        $user->email = $validated['email'];
        $user->phone = $validated['phone'];
        $user->comment = $validated['comment'];
        $user->save();

        $order=Order::all()->where('id',$id)->first();
        $order->car = $validated['car'];
        $order->save();
        return redirect('/orders');
    }

    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect('/orders');
    }
}


