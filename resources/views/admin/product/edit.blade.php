@extends('layouts.dashboard')
@section('content')
<div class="py-3">
    <form action="{{url('Product/update/'.$product->id)}}" method="post">
        @csrf

        <div class="mb-3">
            <label for="nameFormControlInput" class="form-label">اسم المنتج</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$product->product_name}}" >
        </div>
        <div class="mb-3">
            <label for="quantityFormControlInput" class="form-label"> الصورة </label>
            <input type="file" class="form-control" id="image" name="image" value="{{$product->image}}">
        </div>
        <div class="mb-3">
            <label for="priceFormControlInput" class="form-label"> السعر </label>
            <input type="number" class="form-control" id="price" value="{{$product->price}}"  name="price">
        </div>
        <div class="mb-3">
            <label for="descriptionFormControlTextarea" class="form-label"> وصف المنتج </label>
            <textarea class="form-control" id="description" name="description" rows="3">{{$product->details}}</textarea>
        </div>
        <div class="mb-3">
            <label for="descriptionFormControlTextarea" class="form-label"> اختر الصنف </label>
            <select class="form-select" name="category" id="category">
                <option value="{{$categories[$product->category_id-1]->id}}">{{$categories[$product->category_id-1]->category_name}}</option>
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->category_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <input type="submit" value="احفظ" class="btn btn-info">
        </div>
    </form>
</div>

@endsection
