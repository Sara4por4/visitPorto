User-agent: *
@if(env('APP_ENV') !== "production")
Disallow: /
@else
Disallow: sgc/
@endif