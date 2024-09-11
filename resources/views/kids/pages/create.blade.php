@extends('kids.master')
@section('title',__('keywords.sunday_schools_system') . ' - ' . __('keywords.add_kid'))
@section('content')
  <main class="main">
    <div class="container bg-light p-4 rounded">
      <h3>{{ __('keywords.add_kid') }}</h3>
      <div class="my-3">
        <form action="{{ route('kids.store') }}" method="post">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">{{ __('keywords.name') }}</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" />
          </div>
          <div class="mb-3">
            <label for="gradeSelect" class="form-label">{{ __('keywords.grade') }}</label>
            <select class="form-select" id="gradeSelect">
              <option selected>{{ __('keywords.choose_grade') }}</option>
              @foreach ($grades as $grade)
                <option value="{{ $grade->id }}">{{ $grade->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">{{ __('keywords.phone') }}</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" />
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">{{ __('keywords.date_of_birth') }}</label>
            <input type="date" class="form-control" id="exampleFormControlInput1" />
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">{{ __('keywords.points') }}</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" />
          </div>
          <div class="mb-3"></div>
            <label for="exampleFormControlTextarea1" class="form-label">{{ __('keywords.address') }}</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">{{ __('keywords.notes') }}</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <a href="#" class="btn btn-primary mt-4">{{ __('keywords.save') }}</a>
      </div>
      </form>
    </div>
  </main>
@endsection
