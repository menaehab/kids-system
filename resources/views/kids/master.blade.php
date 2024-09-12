<!DOCTYPE html>
<html @if (LaravelLocalization::getCurrentLocale() == 'ar') lang="ar" dir="rtl" @endif>
@include('kids.partials.head')

<body>
    @include('kids.partials.navbar')
    <x-language></x-language>
    @yield('content')
    @include('kids.partials.footer')
    @include('kids.partials.script')
</body>

</html>
