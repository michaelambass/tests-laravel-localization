<ul>
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ strtoupper($localeCode) }}
            </a>
        </li>
    @endforeach
</ul>

<ul>
	<li><a href="{{ LaravelLocalization::localizeUrl(route('pages.homepage')) }}">{{ __('pages.homepage') }}</a></li>
	<li><a href="{{ LaravelLocalization::localizeUrl(route('pages.about')) }}">{{ __('pages.about') }}</a></li>
	<li><a href="{{ LaravelLocalization::localizeUrl(route('pages.login')) }}">{{ __('pages.login') }}</a></li>
</ul>