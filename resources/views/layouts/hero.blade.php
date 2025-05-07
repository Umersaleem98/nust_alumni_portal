<style>
    .carousel-item img {
        object-fit: cover;
        max=height: 750px;
    }

    @media (max-width: 768px) {
        .carousel-caption h2 {
            font-size: 1.8rem;
        }

        .carousel-caption p {
            font-size: 1rem;
        }

        .carousel-caption .btn {
            font-size: 0.9rem;
            padding: 8px 16px;
        }
    }
</style>
<!-- Carousel Start -->
<div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s" >
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel" >
        <div class="carousel-inner" >

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img class="d-block w-100 img-fluid" src="templates/img/carousel-1.gif" alt="Image" >
                <div
                    class="carousel-caption bg-transparent d-flex flex-column align-items-center justify-content-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 text-center">
                                <h1 class=" mb-3 animated slideInDown text-warning">Welcome To NUST Alumni Portal</h1>
                                <p class="text-light mb-4">
                                    Discover the power of connection, as we bring together a network of over thousands
                                    of distinguished NUST alumni who have made significant contributions across the
                                    globe. Explore, engage, and foster new possibilities.
                                </p>
                                <a href="#Aftergraudation" class="btn btn-danger px-4 py-2 mt-2">Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="templates/img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption bg-transparent">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 text-center">
                                <!-- Slide 2 Content (Optional) -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="templates/img/carousel-3.jpg" alt="Image">
                <div class="carousel-caption bg-transparent">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 text-center">
                                <!-- Slide 3 Content (Optional) -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->
