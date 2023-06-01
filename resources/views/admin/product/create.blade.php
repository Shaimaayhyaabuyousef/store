@extends('layouts.dashboard')
@section('content')
<div class="py-3">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{url('Product/insert')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nameFormControlInput" class="form-label">اسم المنتج</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="اسم المنتج" >
        </div>
        <div class="mb-3">
            <label for="quantityFormControlInput" class="form-label"> الصورة </label>
            <input type="file" class="form-control" id="image" name="image" >
        </div>
        <div class="mb-3">
            <label for="priceFormControlInput" class="form-label"> السعر </label>
            <input type="number" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3">
            <label for="descriptionFormControlTextarea" class="form-label"> الوصف</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="descriptionFormControlTextarea" class="form-label"> اختر الصنف </label>
            <select class="form-select" name="category_id" id="category_id">
                <option value="#"></option>
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
