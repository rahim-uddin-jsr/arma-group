@include('backend.inc.header')
@include('backend.inc.leftnav')

<div class="main-content" >
    @yield('content')
</div>

@stack('script')
@include('backend.inc.footer')


