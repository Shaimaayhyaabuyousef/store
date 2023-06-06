@extends('layouts.dashboard')
@section('content')
    <div class="py-5">
        <a class="btn btn-secondary" href="{{url('Product/create')}}">أضف منتج جديد</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">رقم المنتج</th>
                    <th scope="col">اسم المنتج</th>
                    <th scope="col"> وصف المنتج</th>
                    <th scope="col">السعر</th>
                    <th scope="col">الصورة</th>
                    <th scope="col">الصنف</th>
                    <th scope="col">الأحداث</th>
                </tr>
            </thead>
            <tbody>
                @if(count($products))
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{$product->id}}</td>
                        <td>{{$product->product_name}}</td>
                        <td>{{$product->details}}</td>
                        <td>{{$product->price}}</td>
                        <td><img src="{{$product->image}}" alt="Italian Trulli"  width="100" height="100"></td>
                        <td>{{$product->category->category_name}}</td>


                        <td>
                            <a href="{{url('Product/delete/'.$product->id)}}" class="btn btn-danger">حذف</a>
                            <a href="{{url('Product/edit/'.$product->id)}}" class="btn btn-info">تعديل</a>
                        </td>
                    </tr>
                @endforeach
                {{ $products->links() }}
                @else
                <th colspan="7">لا يوجد عناصر</th>
                @endif
            </tbody>
        </table>
    </div>
@endsection
