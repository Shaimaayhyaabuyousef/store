<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders  = Order::all();
        return view('admin.order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.order.create');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     */
    public function store (Request $request){
        $orders = new Order();
        $orders-> product_id = $request -> product_id;
        $orders-> user_id= $request ->user_id;
        $orders-> quantity = $request -> quantity;
        $orders-> total_price = $request -> total_price;
        $orders-> delivery_date = $request -> delivery_date;
        $orders-> created_at= now();
        $orders->updated_at = now();

        $orders->save();
        return redirect() -> back();
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orders  = Order::find($id);
        return view('admin.order.edit', compact('orders'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order  =   Order::find($id);

        $order ->product_id = $request->input('product_id');
        $order ->user_id= $request->input('user_id');
        $order->quantity = $request->input('quantity');
        $order->total_price = $request->input('total_price');
        $order->delivery_date = $request->input('delivery_date');
        $order-> created_at= now();
        $order->updated_at = now();
            $order->update();
        $order ->save();
        return redirect('')->with('Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::destroy($id);
        return redirect()->back();

    }
}

