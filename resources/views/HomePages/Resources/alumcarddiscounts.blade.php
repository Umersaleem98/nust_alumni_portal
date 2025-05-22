<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')

    <style>
        .nav-tabs {
            border-bottom: none;
        }

        .nav-link.custom-tab {
            border: 1px solid #ccc;
            border-radius: 30px;
            padding: 12px 24px;
            margin: 0 10px;
            font-weight: 600;
            text-transform: uppercase;
            color: white;
            transition: all 0.3s ease-in-out;
            background-color: #000;
        }

        .nav-link.custom-tab:hover {
            color: yellow;
            background-color: transparent;
            border-color: #ccc;
        }

        .nav-link.active.custom-tab {
            background-color: #000;
            color: white;
            border-color: #ffffff;
        }

        .tab-content {
            border-top: 2px solid #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .tab-pane h4 {
            font-weight: 600;
            color: #333;
        }

        .tab-pane p, .tab-pane li, .tab-pane ol {
            font-size: 1.1rem;
            color: black;
        }

        /* Shared Tab Background Style */
        .tab-pane {
            position: relative;
            padding: 40px 20px;
            color: white;
            border-radius: 10px;
            overflow: hidden;
            z-index: 1;
        }

        .tab-pane::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            opacity: 0.8;
            z-index: -1;
        }

        #overview::before {
            background-image: url('{{ asset('templates/img/textbackground.png') }}');
        }

        #discount::before {
            background-image: url('{{ asset('templates/img/textbackground.png') }}');
        }

        #howuse::before {
            background-image: url('{{ asset('templates/img/textbackground.png') }}');
        }

        #stay::before {
            background-image: url('{{ asset('templates/img/textbackground.png') }}');
        }

        #partner::before {
            background-image: url('{{ asset('templates/img/textbackground.png') }}');
        }

        #apply::before {
            background-image: url('{{ asset('templates/img/textbackground.png') }}');
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

    <!-- Video Banner -->
    <div class="container-fluid my-2">
        <div class="row align-items-center">
            <div class="col-md-12">
                <video class="img-fluid rounded shadow w-100" autoplay muted loop playsinline>
                    <source src="{{ asset('templates/videos/AlumCardDiscounts.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>

    <!-- Tabs Section -->
    <div class="container-fluid my-2">
        <div class="row align-items-center">
            <div class="container mb-5 mt-5">
                <ul class="nav nav-tabs justify-content-center" id="resourceTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active bg-danger custom-tab" id="overview-tab" data-bs-toggle="tab"
                            data-bs-target="#overview" type="button" role="tab" aria-controls="overview"
                            aria-selected="true">Overview</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link bg-danger custom-tab" id="discount-tab" data-bs-toggle="tab"
                            data-bs-target="#discount" type="button" role="tab" aria-controls="discount"
                            aria-selected="false">Discount Type</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link bg-danger custom-tab" id="howuse-tab" data-bs-toggle="tab"
                            data-bs-target="#howuse" type="button" role="tab" aria-controls="howuse"
                            aria-selected="false">How to Use</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link bg-danger custom-tab" id="stay-tab" data-bs-toggle="tab"
                            data-bs-target="#stay" type="button" role="tab" aria-controls="stay"
                            aria-selected="false">Stay Updated</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link bg-danger custom-tab" id="partner-tab" data-bs-toggle="tab"
                            data-bs-target="#partner" type="button" role="tab" aria-controls="partner"
                            aria-selected="false">Partner with Us</button>
                    </li>
                    
                </ul>

                <div class="tab-content border border-top-0 p-4" id="resourceTabsContent">
                    <!-- Overview -->
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                        <h4 class="text-danger">Unlock Special Savings with Your AlumCard</h4>
                        <p>
                            As a proud member of the NUST alumni community, your AlumCard opens the door to a world of exclusive discounts and offers. We have partnered with a wide range of trusted brands and service providers to bring you exciting benefits that make your life easier and more rewarding.
                        </p>
                    </div>

                    <!-- Discount -->
                    <div class="tab-pane fade" id="discount" role="tabpanel" aria-labelledby="discount-tab">
                        <h4 class="text-danger">What Discounts Can You Enjoy?</h4>
                        <ul>
                            <li>Hotels & Resorts: Enjoy special rates at select hotels and resorts across Pakistan and internationally.</li>
                            <li>Restaurants & Cafés: Savor delicious meals and beverages with exclusive alumni discounts at popular eateries.</li>
                        </ul>
                    </div>

                    <!-- How to Use -->
                    <div class="tab-pane fade" id="howuse" role="tabpanel" aria-labelledby="howuse-tab">
                        <h4 class="text-danger">How to Use Your AlumCard Discounts</h4>
                        <ol>
                            <li>Present Your AlumCard: Simply show your valid AlumCard at the partner outlet or during online checkout.</li>
                            <li>Verify Eligibility: Some offers may require registration or promo codes — check the specific terms.</li>
                            <li>Enjoy Savings: Receive instant discounts or special offers tailored just for NUST alumni</li>
                            {{-- <li>Use your card number for registration in alumni-only events.</li> --}}
                        </ol>
                    </div>

                    <!-- Stay Updated -->
                    <div class="tab-pane fade" id="stay" role="tabpanel" aria-labelledby="stay-tab">
                        <h4 class="text-danger">Stay Updated on New Discounts   </h4>
                        <p>
                            Our list of partners and discounts is continuously growing! To stay informed:
                        </p>
                        <ul>
                            <li>Visit the Alumni Portal regularly for updated offers.
</li>
                            <li>Follow AlumNUST’s official social media channels for flash sales and exclusive promotions.</li>
                            {{-- <li>Personal Dashboard on Alumni Portal</li>
                            <li>SMS and Email Notifications</li> --}}
                        </ul>
                    </div>

                    <!-- Partner with Us -->
                    <div class="tab-pane fade" id="partner" role="tabpanel" aria-labelledby="partner-tab">
                        <h4 class="text-danger">Partner With Us!</h4>
                        <p>
                            Are you a business owner interested in offering discounts to thousands of NUST alumni?
                        </p>
                        <ol>
                            <li>Contact us at nust.alumni@nust.edu.pk to learn more.</li>
                        </ol>
                    </div>

                 
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
    @include('layouts.script')
</body>
</html>
