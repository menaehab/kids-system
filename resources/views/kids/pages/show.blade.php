@extends('kids.master')
@section('title', __('keywords.show'))
@section('content')
    <main class="main">
        <div class="container bg-light p-4 rounded">
            <h3>{{ __('keywords.show') }}</h3>
            <div class="my-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">{{ __('keywords.name') }}</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $kid->name }}"
                        readonly />
                </div>

                <div class="mb-3">
                    <label for="gradeSelect" class="form-label">{{ __('keywords.grade') }}</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        value="{{ __('keywords.' . $kid->grade->name) }}" readonly />
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">{{ __('keywords.phone') }}</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $kid->phone }}"
                        readonly />
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">{{ __('keywords.date_of_birth') }}</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" value="{{ $kid->birth_date }}"
                        readonly />
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">{{ __('keywords.points') }}</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $kid->points }}"
                        readonly />
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">{{ __('keywords.address') }}</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly>{{ $kid->address }}</textarea>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">{{ __('keywords.notes') }}</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly>{{ $kid->notes }}</textarea>
            </div>
            <form action="{{ route('kids.edit', $kid) }}" method="get" class="d-inline">
                <button type="submit" class="btn btn-primary">{{ __('keywords.edit') }}</button>
            </form>
            <form id="delete" action="{{ route('kids.destroy', $kid->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">{{ __('keywords.delete') }}</button>
            </form>
        </div>
        </div>
    </main>
@endsection
