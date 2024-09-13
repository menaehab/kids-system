<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid container">
            <a class="navbar-brand mx-4" href="{{ route('kids.index') }}">{{ __('keywords.sunday_schools_system') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> <!-- Added ms-auto class here -->
                    @if ($grades->count() > 0)
                        @foreach ($grades as $grade)
                            <li class="nav-item">
                                <a class="nav-link" href="#">{{ __("keywords.$grade->name") }}</a>
                            </li>
                        @endforeach
                    @endif
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control mx-2" type="search" placeholder="{{ __('keywords.search') }}"
                        aria-label="Search" />
                    <button class="btn btn-outline-light" type="submit">{{ __('keywords.search') }}</button>
                </form>
            </div>
        </div>
    </nav>
</header>
