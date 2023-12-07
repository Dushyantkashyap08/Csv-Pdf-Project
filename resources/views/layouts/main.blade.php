<!--layouts.header starts here-->
@include('layouts.header')
<!--layouts.header ends here-->

    <!--yield section starts here-->
    @yield('login')
    @yield('uploadCSV')
    @yield('uploadImage')
    @yield('changePassword')
    @yield('script')
    <!--yield section ends here-->

<!--layouts.footer starts here-->
@include('layouts.footer')
<!--layouts.footer ends here-->

