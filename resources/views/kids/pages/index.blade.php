@extends('kids.master')
@section('title', __('keywords.sunday_schools_system') . ' - ' . __('keywords.home'))
@section('content')
    <main class="main">
        <div class="container bg-light p-4 rounded">
            <h3>{{ __('keywords.home') }}</h3>
            <x-success-alert></x-success-alert>
            <div class="d-flex justify-content-between my-4">
                <a href="{{ route('kids.create') }}" class="btn btn-primary">{{ __('keywords.add') }}</a>
                <div class="d-flex search-box">
                    <input type="text" class="form-control search-input" placeholder="{{ __('keywords.search') }}">
                    <button type="button" class="btn btn-primary mx-2">{{ __('keywords.search') }}</button>
                </div>
            </div>
            <table class="table table-striped my-4">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th width="50%" scope="col">{{ __('keywords.name') }}</th>
                        <th scope="col">{{ __('keywords.grade') }}</th>
                        <th width="7.5%" scope="col">{{ __('keywords.points') }}</th>
                        <th width="7.5%" scope="col">{{ __('keywords.more') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($kids->count() > 0)
                        @foreach ($kids as $key => $kid)
                            <tr>
                                <th scope="row">{{ $kids->firstItem() + $loop->index }}</th>
                                <td>{{ $kid->name }}</td>
                                <td>{{ __('keywords.' . $kid->grade->name) }}</td>
                                <td>{{ $kid->points }}</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm"><i
                                            class="fas fa-eye text-light"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
            {{ $kids->render('pagination::bootstrap-4') }}

        </div>
    </main>
@endsection
