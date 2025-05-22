<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer my-6 mb-0 py-6 position-relative overflow-hidden"
    data-wow-delay="0.1s" style="z-index: 1;">

    <!-- Background Video -->
    {{-- <video autoplay muted loop playsinline class="position-absolute w-100 h-100"
        style="object-fit: cover; top: 0; left: 0; z-index: 0; opacity: 0.15;">
        <source src="{{ asset('templates/img/Footervideo.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video> --}}

    <div class="position-absolute w-100 h-100"
        style="
    background-image: url('{{ asset('templates/img/footerbg.png') }}');
    background-size: cover;
    background-position: center;
    top: 0;
    left: 0;
    z-index: 0;
    opacity: 0.15;">
    </div>
    <div class="container position-relative" style="z-index: 2;">
        <div class="row">
            <!-- Your existing footer columns -->
            <!-- Column 1 -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Get In Touch</h4>
                <img src="{{ asset('templates/img/logo.png') }}" alt="Logo"
                    style="max-width: 100px; margin-bottom: 15px; color: white" class="text-center text-light">
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>University Advancement Office, Room 110, 1st
                    Floor, ORIC building, Innovation Drive, NUST, H-12 Islamabad</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+92 51 90856838/ 23</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
            </div>

            <!-- Column 2 -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Quick Links</h4>
                <a class="btn btn-link" href="#">Home</a>
                <a class="btn btn-link" href="#">About</a>
                <a class="btn btn-link" href="#">Resources</a>
                <a class="btn btn-link" href="#">Publications</a>
                <a class="btn btn-link" href="#">Event</a>
                <a class="btn btn-link" href="#">AlumNUST</a>
                <a class="btn btn-link" href="#">Campus</a>
                <a class="btn btn-link" href="#">Get Involved</a>
            </div>

            <!-- Column 3 -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Popular Links</h4>
                <a class="btn btn-link" href="#">About Us</a>
                <a class="btn btn-link" href="#">Contact Us</a>
                <a class="btn btn-link" href="#">Our Services</a>
                <a class="btn btn-link" href="#">Terms & Condition</a>
                <a class="btn btn-link" href="#">Support</a>
            </div>

            <!-- Column 4 -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Newsletter</h4>
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control p-3 border-0" placeholder="Your Email Address">
                        <button class="btn btn-primary">Sign Up</button>
                    </div>
                </form>
                <h6 class="text-white mt-4 mb-3">Follow Us</h6>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-light me-1" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-light me-1" href="#"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-light me-1" href="#"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-light me-0" href="#"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-12 p-0">
                <img src="{{ asset('templates/img/Footer.png') }}" alt="Footer Image" class="w-100"
                    style="height: 200px; object-fit: cover;">
            </div>
            <!-- Footer Image -->

        </div>
    </div>
</div>
