 <style>
    .btn-hover-fill {
        position: relative;
        overflow: hidden;
        background: linear-gradient(90deg, #FAAF19 0%, #FAAF19 100%);
        background-size: 0% 100%;
        background-repeat: no-repeat;
        background-position: left center;
        transition: background-size 0.4s ease;
        color: white;
        width: 200px; /* Fixed width */
        height: 50px;  /* Fixed height */
        display: flex;
        align-items: center;
        justify-content: center;
        white-space: nowrap;
        text-align: center;
        padding: 0 10px;
    }

    .btn-hover-fill:hover {
        background-size: 100% 100%;
        color: #6A0000;
    }



</style>

<section class="hero-section d-flex align-items-center text-center text-white"
    style="height: 500px; background: url('templates/img/carousel-1.gif') center center/cover no-repeat;">

    <div class="container-fluid h-100">
        <div class="row h-100">
            <!-- Left Buttons (hidden on small screens) -->
            <div class="col-md-2 d-none d-md-flex flex-column align-items-center gap-2 justify-content-center h-100">
                <a href="#contact" class="btn btn-outline-light btn-sm btn-hover-fill">AlumCard</a>
                <a href="#contact" class="btn btn-outline-light btn-sm btn-hover-fill">AlumCard Discount</a>
                <a href="#contact" class="btn btn-outline-light btn-sm btn-hover-fill">AlumNUST</a>
                <a href="#contact" class="btn btn-outline-light btn-sm btn-hover-fill">AlumEvent Calander</a>
                <a href="#contact" class="btn btn-outline-light btn-sm btn-hover-fill">Campus Facilities</a>
            </div>

            <!-- Center Content -->
            <div class="col-12 col-md-8 d-flex flex-column justify-content-center align-items-center h-100">
                <h1 class="display-5 fw-bold text-warning">Welcome to NUST Alumni Portal</h1>
                <p class="px-3">Discover the power of connection with thousands of distinguished NUST alumni worldwide.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap mt-4">
                    <a href="#Aftergraduation" class="btn btn-danger btn-sm">Explore More</a>
                </div>
            </div>

            <!-- Right Buttons (hidden on small screens) -->
            <div class="col-md-2 d-none d-md-flex flex-column align-items-center gap-2 justify-content-center h-100">
                <a href="#contact" class="btn btn-outline-light btn-sm btn-hover-fill">AlumNUST Giving</a>
                <a href="#contact" class="btn btn-outline-light btn-sm btn-hover-fill">Ambassador Program</a>
                <a href="#contact" class="btn btn-outline-light btn-sm btn-hover-fill">Volunteer Program</a>
                <a href="#contact" class="btn btn-outline-light btn-sm btn-hover-fill">Spotlignt</a>
                <a href="#contact" class="btn btn-outline-light btn-sm btn-hover-fill">Visit Campus</a>
            </div>
        </div>
    </div>
</section>