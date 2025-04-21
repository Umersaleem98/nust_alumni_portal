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
    @include('layouts.hero')
    @include('layouts.aftergraduation')
    @include('layouts.facts')
    @include('layouts.alumnews')
    @include('layouts.alumevent')
    @include('layouts.campus')
    @include('layouts.contact')
    @include('layouts.footer')

    <!-- Copyright Start -->
    {{-- <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
               
            </div>
        </div>
    </div> --}}

    <!-- Back to Top Button -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    @include('layouts.script')

    <!-- ======================= -->
    <!-- Location Modal Start -->
    <div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body text-center bg-white rounded shadow p-4">
                    <h5 class="mb-3">Your Access Point?</h5>
                    <select id="countrySelect" class="form-select">
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
                </div>
            </div>
        </div>
    </div>
    <!-- Location Modal End -->
    <!-- ======================= -->

    <!-- Show Modal On Page Load and Close on Select -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var locationModal = new bootstrap.Modal(document.getElementById('locationModal'));
            locationModal.show();

            document.getElementById('countrySelect').addEventListener('change', function () {
                // You can optionally store the value in localStorage or use it later
                var selectedCountry = this.value;
                locationModal.hide();
                console.log("Selected Country: ", selectedCountry); // For debug
            });
        });
    </script>
</body>

</html>