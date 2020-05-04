<ul class="nav nav-pills mb-3">
    <li class="nav-item">
        <a class="nav-link @if(Route::is('profile.index')) active @endif" href="{{route('profile.index')}}">@lang('profiles.my')</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if(Route::is('profile.create')) active @endif" href="{{route('profile.create')}}">@lang('profiles.add')</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">@lang('profiles.favorites')</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">@lang('profiles.settings')</a>
    </li>
</ul>
