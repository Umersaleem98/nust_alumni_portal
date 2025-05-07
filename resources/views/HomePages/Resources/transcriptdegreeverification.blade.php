
<html lang="en">

<head>

    @include('layouts.head')

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    @include('layouts.topbar')
    @include('layouts.header')
  



    @include('layouts.footer')


    @include('layouts.script')


</body>

</html>
