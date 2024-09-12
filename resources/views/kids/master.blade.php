<!DOCTYPE html>
<html @if (LaravelLocalization::getCurrentLocale() == 'ar') lang="ar" dir="rtl" @endif>
@include('kids.partials.head')

<body>
    @include('kids.partials.navbar')
    <div class="container">
        <x-language></x-language>
    </div>
    @yield('content')
    @include('kids.partials.footer')
    @include('kids.partials.script')
</body>

</html>
