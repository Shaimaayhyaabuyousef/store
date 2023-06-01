@extends('layouts.dashboard')
@section('content')
    <div class="py-5">
        <a class="btn btn-secondary" href="{{url('create')}}">أضف صنف جديد</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">رقم الصنف</th>
                    <th scope="col">اسم الصنف</th>
                    <th scope="col">الأحداث</th>
                </tr>
            </thead>
            <tbody>
                @if(count($categories))
                @foreach ($categories as $category)
                    <tr>

                        <td>{{$category->id}}</td>
                        <td>{{$category->category_name}}</td>
                        <td>
                            <a href="{{url('delete/'.$category->id)}}" class="btn btn-danger">حذف</a>
                            <a href="{{url('edit/'.$category->id)}}" class="btn btn-info">تعديل</a>
                        </td>
                    </tr>
                @endforeach
                {{ $categories->links() }}
                @else
                <th colspan="3">لا يوجد عناصر</th>
                @endif
            </tbody>
        </table>
    </div>
@endsection
