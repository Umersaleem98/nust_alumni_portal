<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NUST AKUMNI PORTAL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

@include('layouts.head')

<style>
    html {
        scroll-behavior: smooth;
    }

    .modal-backdrop.show {
        opacity: 0.7;
        background-color: rgba(0, 0, 0, 0.5);
    }
</style>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    @include('layouts.topbar')
    @include('layouts.header')
    <div class="container-fluid page-header py-4 my-4 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Rector Address</a></li>

                </ol>
            </nav>
        </div>
    </div>
    

  
    @include('layouts.footer')

  
    @include('layouts.script')

  
</body>

</html> 