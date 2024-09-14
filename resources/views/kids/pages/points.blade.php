@extends('kids.master')
@section('title', __('keywords.show_points'))
@section('content')
    <main class="main">
        <div class="container bg-light p-4 rounded d-flex justify-content-center align-items-center"
            style="min-height: 70vh;">
            <div class="form-container">
                <h1 class="text-center my-5">{{ $kid->name }}</h1>
                <form method="POST" action="{{ route('kids.points.update', $kid) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 text-center">
                        <h3 for="points" class="form-label my-4">{{ __('keywords.points') }}</h3>
                        <input type="number" class="form-control" id="points" name="points" />
                        <x-error-alert error="points"></x-error-alert>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="action" value="add" class="btn btn-success my-4">
                            {{ __('keywords.add_points') }}
                        </button>
                        <button type="submit" name="action" value="subtract" class="btn btn-danger my-4">
                            {{ __('keywords.subtract_points') }}
                        </button>
                    </div>
                </form>
                <div class="text-center">
                    <form action="{{ route('kids.show', $kid) }}" method="get" class="d-inline">
                        <button type="submit" class="btn btn-primary">{{ __('keywords.show') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
