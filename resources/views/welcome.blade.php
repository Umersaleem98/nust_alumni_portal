<!DOCTYPE html>
<html lang="en">

<video autoplay muted loop id="bgVideo">
    <source src="{{ asset('templates/videos/bg.mp4') }}" type="video/mp4">
    Your browser does not support HTML5 video.
</video>

<head>
    <meta charset="utf-8">
    <title>NUST ALUMNI PORTAL</title>
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

        #bgVideo {
            position: fixed;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            object-fit: cover;
            z-index: -1;
            opacity: 0.4;
        }

        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #125482;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        * {
            scrollbar-width: thin;
            scrollbar-color: #125482 #f1f1f1;
        }

        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 90px;
            right: 25px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }

        /* Modal background image */
        .modal-with-bg {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-image: url('templates/img/Alumni map background.png')
            
        }


        /* ======================== */
        /* Increase Modal Size */
        /* ======================== */
        #locationModal .modal-dialog {
            max-width: 650px; /* Change width as needed */
            width: 90%;
        }

        #locationModal .modal-content {
            height: 500px; /* Change height as needed */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #locationModal .modal-body {
            overflow-y: auto;
            max-height: 100%;
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    @include('layouts.topbar')
    @include('layouts.header')
    @include('layouts.hero1')
    @include('layouts.aftergraduation')
    @include('layouts.facts')
    @include('layouts.alumnews')
    @include('layouts.alumevent')
    @include('layouts.contact')
    @include('layouts.campus')
    @include('layouts.footer')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=923000939966&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

    <!-- Back to Top Button -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    @include('layouts.script')

    <!-- ======================= -->
    <!-- Location Modal Start -->
    <!-- ======================= -->
    <div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-with-bg border-0 rounded">
                <div class="modal-body text-center modal-overlay rounded shadow p-4">
                    <h5 class="mb-3">Your Location?</h5>
                    <select id="countrySelect" class="form-select mb-3">
                        <option selected disabled>Select Your Country</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="USA">USA</option>
                        <option value="UK">UK</option>
                        <option value="Iran">Iran</option>
                        <option value="Germany">Germany</option>
                        <option value="Australia">Australia</option>
                        <option value="France">France</option>
                        <option value="Saudi Arabia / Dubai">Saudi Arabia / Dubai</option>
                    </select>
                    <img src="{{ asset('templates/img/maps.gif') }}" alt="Map Animation" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
    <!-- ======================= -->
    <!-- Location Modal End -->
    <!-- ======================= -->

    <!-- Show Modal On Page Load and Close on Select -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var locationModal = new bootstrap.Modal(document.getElementById('locationModal'));
            locationModal.show();

            document.getElementById('countrySelect').addEventListener('change', function () {
                var selectedCountry = this.value;
                locationModal.hide();
                console.log("Selected Country: ", selectedCountry);
            });
        });
    </script>
</body>

</html>