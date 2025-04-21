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
                    <li class="breadcrumb-item"><a class="text-white" href="#">About</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Rector Adress</li>
                </ol>
            </nav>
        </div>
    </div>
    

    <div class="container-xxl py-6">
        <div class="container">
            <div class="row">
                <div class="col-md-4 wow fadeInUp " data-wow-delay="0.1s" style="border-radius: 5%;">
                    <div class="position-relative overflow-hidden mt-5 mb-4"  >
                        <img src="templates/img/rector.jpg" alt="" class="img-fluid rounded shadow" style="width: 100%; object-fit: cover;">
                    </div>
                </div>
                <div class="col-md-8 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h3 class="text-danger text-uppercase mb-2">RECTOR MESSAGE</h3>
                        <h4 class=" mb-4">Dr Muhammad Zahid Latif, Rector NUST</h4>
                        <p>
                            Allah has bestowed this great honour upon me to lead NUST as its Rector.
                        </p>
                        <p>
                            As we embrace the future with a shared vision, our primary focus shall remain on equipping the next generation with world-class knowledge. Simultaneously, we shall emphasise internationalisation, interdisciplinary collaboration and foster cutting-edge research and innovation that align with national growth and collective progress.
                        </p>
                        <p>
                            Insha Allah, we shall also endeavour to nurture students and participants grounded in the principles and values as envisioned by our founding fathers. As a prestigious seat of learning, our contributions shall also focus on public policy and grooming of leadership that shall facilitate social harmony, rule of law and address other domestic challenges leading to sustainable peace and prosperous future.
                        </p>
                        <p>
                            I look forward to working alongside each member of NUST fraternity. If you aspire to be a part of this ecosystem, I warmly invite you to join NUST in any capacity as a student, faculty, researcher, innovator or partner, and contribute to the service of our beloved country.
                        </p>
                        <p>
                            May Allah be our GUIDE in all future endeavours. Ameen.
                        </p>
                        <p>
                            <b>Dr Muhammad Zahid Latif</b>
                        </p>
                        <p>
                            
                            <b>Date: 1-1-2025</b>
                        </p>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')

  
    @include('layouts.script')

  
</body>

</html> 