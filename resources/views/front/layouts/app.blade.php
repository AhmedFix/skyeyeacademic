@include('front.layouts._header')

<main class="app-content">

    @include('partials._session')

    @yield('content')

</main><!-- end of main -->

@include('front.layouts._footer')