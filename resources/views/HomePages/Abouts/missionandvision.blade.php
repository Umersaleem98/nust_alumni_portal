<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
    <title>Mission And Vision</title>
<body>
   
    @include('layouts.topbar')
    @include('layouts.header')
    <div class="container-fluid page-header py-4 my-4 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-light" aria-current="page">Mission and Vision</li>
                </ol>
            </nav>
        </div>
    </div>

   <!-- Mission and Vision Section -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp mb-5" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="text-danger">Mission And Vision</h1>
        </div>

        <!-- First Row: Image Left, Text Right -->
        <div class="row align-items-center mb-5">
            <div class="col-lg-6">
                <img src="{{ asset('templates/img/mission.jpg') }}" class="img-fluid rounded wow fadeInLeft" data-wow-delay="0.3s" alt="Mission Image" style="max-height: 300px;">
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.5s">
                <h2 class="mb-3 text-danger">Our Mission</h2>
                <p style="text-align: justify;">
                    At NUST, we are committed to building a strong and inclusive alumni community that thrives on lifelong connections and mutual growth. Our mission is to connect graduates with each other and the university through meaningful engagement, professional development, and collaborative opportunities. We aim to recognize and celebrate alumni achievements while fostering a culture of mentorship, innovation, and service. By encouraging active participation, we empower alumni to stay involved, contribute back, and be a part of NUST’s ongoing journey of excellence.

                </p>
                
            </div>
        </div>

        <!-- Second Row: Text Left, Image Right -->
        <div class="row align-items-center flex-lg-row-reverse">
            <div class="col-lg-6">
                <img src="{{ asset('templates/img/vision.jpg') }}" class="img-fluid rounded wow fadeInRight" data-wow-delay="0.3s" alt="Vision Image">
            </div>
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.5s">
                <h2 class="mb-3 text-danger">Our Vision</h2>
                <p style="text-align: justify;">We envision a globally connected and empowered NUST alumni network that embodies the university’s values and aspirations. Our alumni will serve as ambassadors of integrity, leadership, and progress—driving change in their fields and communities. Through continued engagement, they will inspire future generations, support institutional growth, and contribute to national and global development. Together, we strive to build a legacy where alumni and alma mater evolve side by side, shaping a better tomorrow.</p>
                
            </div>
        </div>
    </div>
</div>


    @include('layouts.footer')


    @include('layouts.script')


</body>

</html>
