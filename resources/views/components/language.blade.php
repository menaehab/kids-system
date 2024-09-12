<div class="navbar-container">
    <a class="btn btn-warning btn-sm" href="{{ LaravelLocalization::getLocalizedURL($locale) }}" id="langSwitcher">
        {{ strtoupper($locale) }}
    </a>
</div>
