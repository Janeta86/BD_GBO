<?php

namespace App\Http\Controllers;

use App\Models\detail;
use App\Models\order;
use Illuminate\Support\Facades\DB;

class detailcontroller extends Controller
{
    public function index()
    {
        $Order = Order::find(2);
        dd($Order->detai);
    }

//    public function show($id)
//    {
//        $orderm = Order::with('detai')->where('id', $id)->first();
//        return view('detailm', ['orderm' => $orderm]);
//    }
    public function show(string $id)
    {
        $total = DB::table('orders')
            ->selectRaw('sum(CAST(details.cost AS numeric) * orders_details.quantity) as total')
            ->join('orders_details', 'orders.id', '=', 'orders_details.id_orders')
            ->join('details', 'details.id', '=', 'orders_details.id_details')
            ->where('orders.id', $id)
            ->first();

        return view('detailm', [
            'detailm' => Order::all()->where('id', $id)->first(),
            'total' => $total
        ]);
    }
}
