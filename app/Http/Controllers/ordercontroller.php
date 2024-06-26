<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ordercontroller extends Controller
{
    public function index(Request $request)
    {
        $perpage = $request->perpage ?? 2;
        return view('orders', [
            'orders' => order::paginate($perpage)->withQueryString()
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
            'orders' => Order::all()
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
        if (Gate::denies('order_edit')) {
            return redirect('/orders')->withError('У вас нет разрешения редактировать заказы');
        }

        return view('order_edit', [
            'user' => User::where('id', $id)->first(),
            'order' => Order::select('car')->where('id', $id)->first()
        ]);
    }

    public function update(Request $request, $id)
    {
        if (Gate::denies('order_edit')) {
            return redirect('/orders')->withError('У вас нет разрешения редактировать заказы');
        }

        $validated = $request->validate([
            'name' => 'required',
            'family' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'comment' => 'string',
            'car' => 'required',
        ]);
        $user = User::all()->where('id', $id)->first();
        $user->name = $validated['name'];
        $user->family = $validated['family'];
        $user->email = $validated['email'];
        $user->phone = $validated['phone'];
        $user->comment = $validated['comment'];
        $user->save();

        $order = Order::all()->where('id', $id)->first();
        $order->car = $validated['car'];
        $order->save();
        return redirect('/orders')->withError(['success'=> 'Заказ успешно изменен',]);
    }

    public function destroy($id)
    {
        if (!Gate::allows('destroy-order', Order::find($id))) {
            return redirect('/orders')->withError('У вас нет разрешения удалять заказ');
        }
        $order = Order::find($id);
        $order->delete();
        return redirect('/orders')->with(['success'=> 'Заказ успешно удален',]);


    }
}

