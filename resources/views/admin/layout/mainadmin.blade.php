<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layout.headadmin')
</head>

<body class="alt-menu sidebar">
    {{-- @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"]) --}}
    @include('admin.layout.navbaradmin')


    <!--  BEGIN MAIN CONTAINER  -->
 

        @include('admin.layout.sidebaradmin')


        @yield('content')


        @include('admin.layout.footer')
    <!-- END MAIN CONTAINER -->

    @include('admin.layout.scriptadmin')
    @yield('vaper')

</body>

</html>