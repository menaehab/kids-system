@extends('kids.master')
@section('title','مدارس الاحد - اضافة طفل')
@section('content')
  <main class="main">
    <div class="container bg-light p-4 rounded">
      <h3>إضافة طفل</h3>
      <div class="my-3">
        <form action="{{ route('kids.store') }}" method="post">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">الاسم</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" />
          </div>
          <div class="mb-3">
            <label for="gradeSelect" class="form-label">الصف</label>
            <select class="form-select" id="gradeSelect">
              <option selected>اختر الصف</option>
              @foreach ($grades as $grade)
                <option value="{{ $grade->id }}">{{ $grade->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">رقم التليفون</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" />
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">تاريخ الميلاد</label>
            <input type="date" class="form-control" id="exampleFormControlInput1" />
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">النقاط</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" />
          </div>
          <div class="mb-3"></div>
            <label for="exampleFormControlTextarea1" class="form-label">العنوان</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">ملاحظات</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <a href="#" class="btn btn-primary mt-4">حفظ</a>
      </div>
      </form>
    </div>
  </main>
@endsection
