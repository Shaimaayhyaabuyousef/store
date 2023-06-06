@extends('layouts.dashboard')
@section('content')
<div class="py-3">
    @if($h==0)
    <form action="{{url('insert')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nameFormControlInput" class="form-label">اسم الصنف</label>
            <input type="text" class="form-control" id="category_name" name="category_name" placeholder="اسم الصنف">
        </div>

        <div class="mb-3">
            <input type="submit" value="احفظ" class="btn btn-info">
        </div>
    </form>
    @else
    <form action="{{url('update/'.$category->id)}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nameFormControlInput" class="form-label">اسم الصنف</label>
            <input type="text" class="form-control" id="category_name" name="category_name" value="{{$category->category_name}}">
        </div>

        <div class="mb-3">
            <input type="submit" value="حدث" class="btn btn-info">
        </div>
    </form>
    @endif
</div>

@endsection
