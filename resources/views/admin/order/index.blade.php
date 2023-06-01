@extends('layouts.dashboard')
@section('content')


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div
      class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">All Orders</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
          <a href="{{url('Order/create')}}" class="btn btn-outline-secondary">Add New Order</a>
        </div>
      </div>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
      <table class="table table-bordered">
        <tbody>
          <tr>
            <th>product Name</th>
            <th>total price</th>
           <th>Delivery Date</th>
            <th>Quantity</th>
            <th width="280px">Actions</th>
          </tr>
          @foreach ($orders as $order)

            <tr>

                <td>{{ $order->product_id}}</td>
                <td>{{ $order->total_price}}</td>
                <td>{{ $order->delivery_date}}</td>
                <td>{{ $order->quantity}}</td>

<td>

               <a class="btn btn-info" href="{{url('Order/edit/'.$order->id)}}" method="POST">Edit</a>

               <a class="btn btn-danger" href="{{url('Order/delete'.$order->id)}}" method="POST" >Delete</a>

                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </main>
  @endsection
