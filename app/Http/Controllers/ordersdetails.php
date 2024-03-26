<?php

namespace App\Http\Controllers;

use App\Models\detail;
use App\Models\order;
use App\Models\order_detail;
use App\Models\User;
use Illuminate\Http\Request;

class ordersdetails extends Controller
{
    /**
     * Display a listing of the resource.
     */
//    public function index()
//    {
//
//         return order_detail::all();
//
//    }

//    public function create()
//    {
//        return view('order_create', [
//            'orders'=> detail::all()
//        ]);
//    }
//
//    public function store(Request $request)
//    {
//        $validated = $request->validate([
//            'quantity' => 'required',
//            'name' =>'required',
//        ]);
//        $ord=new detail($validated);
//        $ord->save();
//        return redirect('/ord');
//    }
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
