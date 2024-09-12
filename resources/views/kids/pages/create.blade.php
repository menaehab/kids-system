@extends('kids.master')
@section('title', __('keywords.sunday_schools_system') . ' - ' . __('keywords.add_kid'))
@section('content')
    <main class="main">
        <div class="container bg-light p-4 rounded">
            <h3>{{ __('keywords.add_kid') }}</h3>
            <div class="my-3">
                <form action="{{ route('kids.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">{{ __('keywords.name') }}</label>
                        <input name="name" type="text" class="form-control" id="name"
                            value="{{ old('name') }}" />
                        <x-error-alert error="name"></x-error-alert>
                    </div>
                    <div class="mb-3">
                        <label for="gradeSelect" class="form-label">{{ __('keywords.grade') }}</label>
                        <select name="grade_id" class="form-select" id="gradeSelect">
                            <option value="" selected>{{ __('keywords.choose_grade') }}</option>
                            @foreach ($grades as $grade)
                                <option value="{{ $grade->id }}" {{ old('grade_id') == $grade->id ? 'selected' : '' }}>
                                    {{ $grade->name }}
                                </option>
                            @endforeach
                        </select>
                        <x-error-alert error="grade_id"></x-error-alert>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">{{ __('keywords.phone') }}</label>
                        <input name="phone" type="text" class="form-control" id="phone"
                            value="{{ old('phone') }}" />
                        <x-error-alert error="phone"></x-error-alert>
                    </div>
                    <div class="mb-3">
                        <label for="birth_date" class="form-label">{{ __('keywords.date_of_birth') }}</label>
                        <input name="birth_date" type="date" class="form-control" id="birth_date"
                            value="{{ old('birth_date') }}" />
                        <x-error-alert error="birth_date"></x-error-alert>
                    </div>
                    <div class="mb-3">
                        <label for="points" class="form-label">{{ __('keywords.points') }}</label>
                        <input name="points" type="number" class="form-control" id="points"
                            value="{{ old('points') }}" />
                        <x-error-alert error="points"></x-error-alert>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">{{ __('keywords.address') }}</label>
                        <textarea name="address" class="form-control" id="address" rows="3">{{ old('address') }}</textarea>
                        <x-error-alert error="address"></x-error-alert>
                    </div>
                    <div class="mb-3">
                        <label for="notes" class="form-label">{{ __('keywords.notes') }}</label>
                        <textarea name="notes" class="form-control" id="notes" rows="3">{{ old('notes') }}</textarea>
                        <x-error-alert error="notes"></x-error-alert>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">{{ __('keywords.save') }}</button>
                </form>

            </div>
    </main>
@endsection
