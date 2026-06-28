@include('home.layouts.head')
@if(!($hideHeader ?? false))
    @include('home.layouts.header')
@endif
@include('home.layouts.content')
@if(!($hideFooter ?? false))
    @include('home.layouts.footer')
@endif