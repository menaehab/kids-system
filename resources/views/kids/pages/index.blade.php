@extends('kids.master')
@section('title','مدارس الاحد - صفحة الرئيسية')
@section('content')
<main class="main">
    <div class="container bg-light p-4 rounded">
        <h3>صفحة الرئيسية</h3>
        <div class="d-flex justify-content-between my-4">
            <a href="{{ route('kids.create') }}" class="btn btn-primary">اضافة</a>
            <div class="d-flex search-box">
                <input type="text" class="form-control search-input" placeholder="بحث">
                <button type="button" class="btn btn-primary ms-2">بحث</button>
            </div>
        </div>
        <table class="table table-striped my-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th width="50%" scope="col">الاسم</th>
                    <th scope="col">الصف</th>
                    <th width="7.5%" scope="col">النقاط</th>
                    <th width="7.5%" scope="col">المزيد</th>
                </tr>
            </thead>
            <tbody>
                @if (count($kids) > 0)
                    @foreach ($kids as $key => $kid)
                        <tr>
                            <th scope="row">{{ $kid->firstItem() + $loop->index }}</th>
                            <td>{{ $kid->name }}</td>
                            <td>{{ $kid->grade_id->name }}</td>
                            <td>{{ $kid->points }}</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-eye text-light"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</main>
@endsection
