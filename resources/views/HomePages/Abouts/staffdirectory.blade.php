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
  
    <!-- Officers Section -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="text-danger">Officers</h2>
            </div>
            <div class="row g-4 team-items">
                <!-- Officer Card -->

                <div class="col-md-3 col-sm-6 mb-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 shadow rounded overflow-hidden">
                        <!-- Header: Image -->
                        <img src="{{ asset('templates/img/officers/23.png') }}" class="card-img-top"
                            style="height: 300px; object-fit: cover;" alt="Member Image">

                        <!-- Body: Name & Designation -->
                        <div class="card-body text-center bg-light">
                            <h5 class="card-title mb-1">Shahid Mehmod</h5>
                            <p class="card-text text-muted">AD Scholarship & Reporting
                            </p>
                        </div>

                        <!-- Footer: Read More Button -->
                        <div class="card-footer bg-white text-center">
                            <a href="#" class="btn btn-danger ">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 shadow rounded overflow-hidden">
                        <!-- Header: Image -->
                        <img src="{{ asset('templates/img/officers/27.png') }}" class="card-img-top"
                            style="height: 300px; object-fit: cover;" alt="Member Image">

                        <!-- Body: Name & Designation -->
                        <div class="card-body text-center bg-light">
                            <h5 class="card-title mb-1">Rabia Abbasi Malik</h5>
                            <p class="card-text text-muted">Manager Creative & Campaigns
                            </p>
                        </div>

                        <!-- Footer: Read More Button -->
                        <div class="card-footer bg-white text-center">
                            <a href="#" class="btn btn-danger ">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 shadow rounded overflow-hidden">
                        <!-- Header: Image -->
                        <img src="{{ asset('templates/img/officers/24.png') }}" class="card-img-top"
                            style="height: 300px; object-fit: cover;" alt="Member Image">

                        <!-- Body: Name & Designation -->
                        <div class="card-body text-center bg-light">
                            <h5 class="card-title mb-1">Adnan Sheikh</h5>
                            <p class="card-text text-muted">Deputy Manager Scholarships                            </p>
                        </div>

                        <!-- Footer: Read More Button -->
                        <div class="card-footer bg-white text-center">
                            <a href="#" class="btn btn-danger ">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 shadow rounded overflow-hidden">
                        <!-- Header: Image -->
                        <img src="{{ asset('templates/img/officers/25.png') }}" class="card-img-top"
                            style="height: 300px; object-fit: cover;" alt="Member Image">

                        <!-- Body: Name & Designation -->
                        <div class="card-body text-center bg-light">
                            <h5 class="card-title mb-1">Abeera Atif</h5>
                            <p class="card-text text-muted">Director UAO</p>
                        </div>

                        <!-- Footer: Read More Button -->
                        <div class="card-footer bg-white text-center">
                            <a href="#" class="btn btn-danger ">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 shadow rounded overflow-hidden">
                        <!-- Header: Image -->
                        <img src="{{ asset('templates/img/officers/26.png') }}" class="card-img-top"
                            style="height: 300px; object-fit: cover;" alt="Member Image">

                        <!-- Body: Name & Designation -->
                        <div class="card-body text-center bg-light">
                            <h5 class="card-title mb-1">Hafsa Shafiq</h5>
                            <p class="card-text text-muted">Manager Reporting & Compliance                            </p>
                        </div>

                        <!-- Footer: Read More Button -->
                        <div class="card-footer bg-white text-center">
                            <a href="#" class="btn btn-danger ">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 shadow rounded overflow-hidden">
                        <!-- Header: Image -->
                        <img src="{{ asset('templates/img/team/20.png') }}" class="card-img-top"
                            style="height: 300px; object-fit: cover;" alt="Member Image">

                        <!-- Body: Name & Designation -->
                        <div class="card-body text-center bg-light">
                            <h5 class="card-title mb-1">Ameer Hamza</h5>
                            <p class="card-text text-muted">Director UAO</p>
                        </div>

                        <!-- Footer: Read More Button -->
                        <div class="card-footer bg-white text-center">
                            <a href="#" class="btn btn-danger ">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 shadow rounded overflow-hidden">
                        <!-- Header: Image -->
                        <img src="{{ asset('templates/img/officers/1733825907.jpeg') }}" class="card-img-top"
                            style="height: 300px; object-fit: cover;" alt="Member Image">

                        <!-- Body: Name & Designation -->
                        <div class="card-body text-center bg-light">
                            <h5 class="card-title mb-1">Huzaifa Rashid</h5>
                            <p class="card-text text-muted">AM Reporting & Compliance
                            </p>
                        </div>

                        <!-- Footer: Read More Button -->
                        <div class="card-footer bg-white text-center">
                            <a href="#" class="btn btn-danger ">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 shadow rounded overflow-hidden">
                        <!-- Header: Image -->
                        <img src="{{ asset('templates/img/officers/28.png') }}" class="card-img-top"
                            style="height: 300px; object-fit: cover;" alt="Member Image">

                        <!-- Body: Name & Designation -->
                        <div class="card-body text-center bg-light">
                            <h5 class="card-title mb-1"> Zoha Zakir Abbasi</h5>
                            <p class="card-text text-muted"> Assistant Manager Scholarships                            </p>
                        </div>

                        <!-- Footer: Read More Button -->
                        <div class="card-footer bg-white text-center">
                            <a href="#" class="btn btn-danger ">Read More</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- MTOs Section -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="text-danger">MTOs</h2>
            </div>
            <div class="row g-4 team-items">
                <!-- MTO Card -->
                <div class="col-md-3 col-sm-6 mb-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 shadow rounded overflow-hidden">
                        <!-- Header: Image -->
                        <img src="{{ asset('templates/img/MTOs/37.png') }}" class="card-img-top"
                            style="height: 300px; object-fit: cover;" alt="Member Image">

                        <!-- Body: Name & Designation -->
                        <div class="card-body text-center bg-light">
                            <h5 class="card-title mb-1">Umer Saleem</h5>
                            <p class="card-text text-muted">MTO </p>
                        </div>

                        <!-- Footer: Read More Button -->
                        <div class="card-footer bg-white text-center">
                            <a href="#" class="btn btn-danger ">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 shadow rounded overflow-hidden">
                        <!-- Header: Image -->
                        <img src="{{ asset('templates/img/MTOs/22.png') }}" class="card-img-top"
                            style="height: 300px; object-fit: cover;" alt="Member Image">

                        <!-- Body: Name & Designation -->
                        <div class="card-body text-center bg-light">
                            <h5 class="card-title mb-1">Irum Iqbal</h5>
                            <p class="card-text text-muted">MTO Alumni Office</p>
                        </div>

                        <!-- Footer: Read More Button -->
                        <div class="card-footer bg-white text-center">
                            <a href="#" class="btn btn-danger ">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 shadow rounded overflow-hidden">
                        <!-- Header: Image -->
                        <img src="{{ asset('templates/img/MTOs/33.png') }}" class="card-img-top"
                            style="height: 300px; object-fit: cover;" alt="Member Image">

                        <!-- Body: Name & Designation -->
                        <div class="card-body text-center bg-light">
                            <h5 class="card-title mb-1">Faheem Raziq</h5>
                            <p class="card-text text-muted">MTO FAO</p>
                        </div>

                        <!-- Footer: Read More Button -->
                        <div class="card-footer bg-white text-center">
                            <a href="#" class="btn btn-danger ">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 shadow rounded overflow-hidden">
                        <!-- Header: Image -->
                        <img src="{{ asset('templates/img/MTOs/34.png') }}" class="card-img-top"
                            style="height: 300px; object-fit: cover;" alt="Member Image">

                        <!-- Body: Name & Designation -->
                        <div class="card-body text-center bg-light">
                            <h5 class="card-title mb-1">Mehak Munir</h5>
                            <p class="card-text text-muted">MTO</p>
                        </div>

                        <!-- Footer: Read More Button -->
                        <div class="card-footer bg-white text-center">
                            <a href="#" class="btn btn-danger ">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <!-- Staff Section -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="text-danger">Staff</h2>
            </div>
            <div class="row g-4 team-items">
                <div class="col-md-3 col-sm-6 mb-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 shadow rounded overflow-hidden">
                        <!-- Header: Image -->
                        <img src="{{ asset('templates/img/staff/41.png') }}" class="card-img-top"
                            style="height: 300px; object-fit: cover;" alt="Member Image">

                        <!-- Body: Name & Designation -->
                        <div class="card-body text-center bg-light">
                            <h5 class="card-title mb-1">Amjad Rashid</h5>
                            <p class="card-text text-muted">PA to Director UAO                            </p>
                        </div>

                        <!-- Footer: Read More Button -->
                        <div class="card-footer bg-white text-center">
                            <a href="#" class="btn btn-danger ">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 shadow rounded overflow-hidden">
                        <!-- Header: Image -->
                        <img src="{{ asset('templates/img/staff/32.png') }}" class="card-img-top"
                            style="height: 300px; object-fit: cover;" alt="Member Image">

                        <!-- Body: Name & Designation -->
                        <div class="card-body text-center bg-light">
                            <h5 class="card-title mb-1">Malik Shafqat</h5>
                            <p class="card-text text-muted">Senior Clerk FAO
                            </p>
                        </div>

                        <!-- Footer: Read More Button -->
                        <div class="card-footer bg-white text-center">
                            <a href="#" class="btn btn-danger ">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 shadow rounded overflow-hidden">
                        <!-- Header: Image -->
                        <img src="{{ asset('templates/img/staff/31.png') }}" class="card-img-top"
                            style="height: 300px; object-fit: cover;" alt="Member Image">

                        <!-- Body: Name & Designation -->
                        <div class="card-body text-center bg-light">
                            <h5 class="card-title mb-1">Hamid</h5>
                            <p class="card-text text-muted"> Senior Clerk FAO                            </p>
                        </div>

                        <!-- Footer: Read More Button -->
                        <div class="card-footer bg-white text-center">
                            <a href="#" class="btn btn-danger ">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 shadow rounded overflow-hidden">
                        <!-- Header: Image -->
                        <img src="{{ asset('templates/img/staff/30.png') }}" class="card-img-top"
                            style="height: 300px; object-fit: cover;" alt="Member Image">

                        <!-- Body: Name & Designation -->
                        <div class="card-body text-center bg-light">
                            <h5 class="card-title mb-1">Muhammad Farooq</h5>
                            <p class="card-text text-muted">Assistant FAO
                            </p>
                        </div>

                        <!-- Footer: Read More Button -->
                        <div class="card-footer bg-white text-center">
                            <a href="#" class="btn btn-danger ">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 shadow rounded overflow-hidden">
                        <!-- Header: Image -->
                        <img src="{{ asset('templates/img/staff/Moeed_pic[1].png') }}" class="card-img-top"
                            style="height: 300px; object-fit: cover;" alt="Member Image">

                        <!-- Body: Name & Designation -->
                        <div class="card-body text-center bg-light">
                            <h5 class="card-title mb-1">Moeed Mumtaz</h5>
                            <p class="card-text text-muted">Senior Clerk FAO
                            </p>
                        </div>

                        <!-- Footer: Read More Button -->
                        <div class="card-footer bg-white text-center">
                            <a href="#" class="btn btn-danger ">Read More</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-3 col-sm-6 mb-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 shadow rounded overflow-hidden">
                        <!-- Header: Image -->
                        <img src="{{ asset('templates/img/staff/29.png') }}" class="card-img-top"
                            style="height: 300px; object-fit: cover;" alt="Member Image">

                        <!-- Body: Name & Designation -->
                        <div class="card-body text-center bg-light">
                            <h5 class="card-title mb-1">Ali Ahmad
                            </h5>
                            <p class="card-text text-muted">Junior Clerk
                            </p>
                        </div>

                        <!-- Footer: Read More Button -->
                        <div class="card-footer bg-white text-center">
                            <a href="#" class="btn btn-danger ">Read More</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- Interns Section -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="text-danger">Interns</h2>
            </div>
            <div class="row g-4 team-items">
                <div class="col-md-3 col-sm-6 mb-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 shadow rounded overflow-hidden">
                        <!-- Header: Image -->
                        <img src="{{ asset('templates/img/interns/35.png') }}" class="card-img-top"
                            style="height: 300px; object-fit: cover;" alt="Member Image">

                        <!-- Body: Name & Designation -->
                        <div class="card-body text-center bg-light">
                            <h5 class="card-title mb-1">Huda Fazal</h5>
                            <p class="card-text text-muted">Intern fund raising</p>
                        </div>

                        <!-- Footer: Read More Button -->
                        <div class="card-footer bg-white text-center">
                            <a href="#" class="btn btn-danger ">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 shadow rounded overflow-hidden">
                        <!-- Header: Image -->
                        <img src="{{ asset('templates/img/interns/36.png') }}" class="card-img-top"
                            style="height: 300px; object-fit: cover;" alt="Member Image">

                        <!-- Body: Name & Designation -->
                        <div class="card-body text-center bg-light">
                            <h5 class="card-title mb-1">Laiba Hashmi</h5>
                            <p class="card-text text-muted">Intern Alumni Office</p>
                        </div>

                        <!-- Footer: Read More Button -->
                        <div class="card-footer bg-white text-center">
                            <a href="#" class="btn btn-danger ">Read More</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>



    @include('layouts.footer')


    @include('layouts.script')


</body>

</html>
