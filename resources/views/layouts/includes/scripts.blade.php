<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('js/jquery.lazy.js') }}"></script>
<script src="{{ asset('js/jquery.snackbar.js') }}"></script>
<script src="{{ asset('js/jquery.typeahead.js') }}"></script>
<script src="{{ asset('js/jquery.selectize.js') }}"></script>
<script src="{{ asset('js/jquery.tmpl.js') }}"></script>
@yield('scripts')
<script src="{{ asset('js/app.js') }}"></script>
<script id="card-notification" type="text/x-jquery-tmpl">
    <div class="notification">
        <div class="notification-icon ${color}">
            <svg>
                <use xlink:href="{{ asset("images/sprite.svg") }}#${icon}" />
            </svg>
        </div>
        <div class="flex-fill">
            <a href="${link}">${text}</a>
            <div class="date">${created}</div>
        </div>
    </div>
</script>
