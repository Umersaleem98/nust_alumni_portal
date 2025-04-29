<html lang="en">

<head>

    @include('layouts.head')

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    @include('layouts.topbar')
    @include('layouts.header')
    {{-- <div class="container-fluid page-header py-4 my-4 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Resources</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center">
                    <li style="color: black" class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li style="color: black" class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li style="color: black" class="breadcrumb-item text-light" aria-current="page">Our Team</li>
                </ol>
            </nav>
        </div>
    </div>
 --}}

    <div class="container-fluid my-2">
        <div class="row align-items-center">
            <div class="col-md-12">
                <img src="{{ asset('templates/img/AlumCard Banner.gif') }}" alt="Resources Image"
                    class="img-fluid rounded shadow w-100" >
            </div>


            <div class="container mb-5 mt-5">
                <!-- Centered Nav Tabs with Custom Design -->
                <ul class="nav nav-tabs justify-content-center" id="resourceTabs" role="tablist">
                    <li style="color: black" class="nav-item" role="presentation">
                        <button class="nav-link active bg-danger custom-tab" id="overview-tab" data-bs-toggle="tab"
                            data-bs-target="#overview" type="button" role="tab" aria-controls="overview"
                            aria-selected="true">
                            Overview
                        </button>
                    </li>
                    <li style="color: black" class="nav-item" role="presentation">
                        <button class="nav-link bg-danger custom-tab" id="why-tab" data-bs-toggle="tab"
                            data-bs-target="#why" type="button" role="tab" aria-controls="why"
                            aria-selected="false">
                            Why to Get
                        </button>
                    </li>
                    <li style="color: black" class="nav-item" role="presentation">
                        <button class="nav-link bg-danger custom-tab" id="apply-tab" data-bs-toggle="tab"
                            data-bs-target="#apply" type="button" role="tab" aria-controls="apply"
                            aria-selected="false">
                            How to Apply
                        </button>
                    </li>
                </ul>

                <div class="tab-content border border-top-0 p-4" id="resourceTabsContent">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel"
                        aria-labelledby="overview-tab">
                        {{-- <h4>Overview</h4> --}}

                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    {{-- <h4 class="text-danger"> AlumCard: Your Key to Staying Connected</h4> --}}
                                    <h4 class="text-danger">Welcome to a Lifetime of NUST Opportunities</h4>
                                    <p  style="color: black" >
                                        The AlumCard is more than just a card. It is your official identity as a proud member of the NUST alumni family. With the AlumCard, you gain exclusive access to a wide range of campus resources, networking opportunities, special privileges, and lifelong learning initiatives designed specifically for our distinguished graduates.
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="tab-pane fade" id="why" role="tabpanel" aria-labelledby="why-tab">
                        {{-- <h4>Why to Get</h4> --}}

                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="text-danger">Why Get an AlumCard?</h4>
                                    <ul>
                                        <li style="color: black" >Access NUST Campus Facilities: Gym, Swimming Pool, Library, Saddle Club, and more.</li>
                                        <li style="color: black">Exclusive Discounts: Enjoy benefits at partner hotels, restaurants, bookstores, and online platforms.</li>
                                        <li style="color: black">Stay Informed: Receive priority updates about alumni events, career opportunities, and special programs.</li>
                                        <li style="color: black">Strengthen Your Bond with NUST: Participate actively in alumni meetups, mentoring programs, and giving-back initiatives.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                       
                    </div>
                    
                    <div class="tab-pane fade" id="apply" role="tabpanel" aria-labelledby="apply-tab">
                        {{-- <h4>How to Apply</h4> --}}

                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="text-danger">How to Apply for AlumCard via online Application?</h4>
                                    <ol>
                                        <li style="color: black">Signup or Log in to the NUST Alumni Portal.</li>
                                        <li style="color: black">Fill out the AlumCard application form providing the necessary details.</li>
                                        <li style="color: black">Upload the required documents (transcript, CNIC/passport copy, a recent photograph with blue background).</li>
                                        <li style="color: black">Visit the Alumni Office to get your AlumCard or choose the option to deliver your card to your preferred location.</li>
                                    </ol>
                                
                                    <p>
                                       <strong>Processing Time:</strong> 10–15 working days after application submission.<br>
                                       <strong>Collection Point:</strong> Alumni Office, NUST H-12 Campus.
                                    </p>
                                
                                    <h5>Eligibility Criteria</h5>
                                    <ol>
                                        <li style="color: black">Must be a graduate of NUST (Bachelor’s, Master’s, or Doctoral program).</li>
                                        <li style="color: black">Graduation verified through official records (transcript/degree).</li>
                                        <li style="color: black">Good standing with the university.</li>
                                    </ol>
                                
                                    <p><strong>Note:</strong> In case of lost or damaged cards, a replacement request can be submitted through the portal.</p>
                                </div>
                            </div>
                        </div>




                       
                    </div>
                    
                </div>
            </div>

            <!-- Full-width Image -->
          
        </div>
    </div>

    <!-- Custom CSS for Tabs -->
    <style>
        /* Custom Tab Styles */
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
            /* All tab button text color white */
            transition: all 0.3s ease-in-out;
            background-color: #000;
            /* Ensure all tabs have black background */
        }

        .nav-link.custom-tab:hover {
            color: yellow;
            /* Yellow text color on hover */
            background-color: transparent;
            /* No background color change */
            border-color: #ccc;
            /* Keep the border color same on hover */
        }

        .nav-link.active.custom-tab {
            background-color: #000;
            /* Active tab background remains black */
            color: white;
            /* Ensure active tab text remains white */
            border-color: #ffffff;
        }

        .tab-content {
            border-top: 2px solid #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            /* Added vertical gap between tabs and tab content */
        }

        .tab-pane h4 {
            font-weight: 600;
            color: #333;
        }

        .tab-pane p {
            font-size: 1.1rem;
            color: #555;
        }

        #overview {
    position: relative;
    padding: 40px 20px;
    color: white;
    border-radius: 10px;
    overflow: hidden; /* Ensure child does not overflow rounded corners */
    z-index: 1;
}

#overview::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('{{ asset('templates/img/textbackground.png') }}');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    /* filter: blur(8px); Adjust blur as needed */
    opacity: 0.8; /* Optional: control visibility */
    z-index: -1; /* Send behind content */
}
        #why {
    position: relative;
    padding: 40px 20px;
    color: white;
    border-radius: 10px;
    overflow: hidden; /* Ensure child does not overflow rounded corners */
    z-index: 1;
}

#why::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('{{ asset('templates/img/textbackground.png') }}');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    /* filter: blur(8px); Adjust blur as needed */
    opacity: 0.8; /* Optional: control visibility */
    z-index: -1; /* Send behind content */
}
        #apply {
    position: relative;
    padding: 40px 20px;
    color: white;
    border-radius: 10px;
    overflow: hidden; /* Ensure child does not overflow rounded corners */
    z-index: 1;
}

#apply::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('{{ asset('templates/img/textbackground.png') }}');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    /* filter: blur(8px); Adjust blur as needed */
    opacity: 0.8; /* Optional: control visibility */
    z-index: -1; /* Send behind content */
}

    </style>






    @include('layouts.footer')


    @include('layouts.script')


</body>

</html>
