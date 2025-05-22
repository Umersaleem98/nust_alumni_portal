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

        .tab-pane p,
        .tab-pane li,
        .tab-pane ol {
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

        #access::before {
            background-image: url('{{ asset('templates/img/textbackground.png') }}');
        }

        #courses::before {
            background-image: url('{{ asset('templates/img/textbackground.png') }}');
        }

        #conferences::before {
            background-image: url('{{ asset('templates/img/textbackground.png') }}');
        }

        #global::before {
            background-image: url('{{ asset('templates/img/textbackground.png') }}');
        }

        #mentorship::before {
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
                <!-- Tab Buttons -->
                <ul class="nav nav-tabs justify-content-center" id="resourceTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active bg-danger custom-tab" id="overview-tab" data-bs-toggle="tab"
                            data-bs-target="#overview" type="button" role="tab" aria-controls="overview"
                            aria-selected="true">Overview</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link bg-danger custom-tab" id="access-tab" data-bs-toggle="tab"
                            data-bs-target="#access" type="button" role="tab" aria-controls="access"
                            aria-selected="false">Access</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link bg-danger custom-tab" id="courses-tab" data-bs-toggle="tab"
                            data-bs-target="#courses" type="button" role="tab" aria-controls="courses"
                            aria-selected="false">Courses</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link bg-danger custom-tab" id="conferences-tab" data-bs-toggle="tab"
                            data-bs-target="#conferences" type="button" role="tab" aria-controls="conferences"
                            aria-selected="false">Conferences</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link bg-danger custom-tab" id="mentorship-tab" data-bs-toggle="tab"
                            data-bs-target="#mentorship" type="button" role="tab" aria-controls="mentorship"
                            aria-selected="false">Mentorship</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link bg-danger custom-tab" id="global-tab" data-bs-toggle="tab"
                            data-bs-target="#global" type="button" role="tab" aria-controls="global"
                            aria-selected="false">Global Network</button>
                    </li>
                </ul>

                <!-- Tab Contents -->
                <div class="tab-content border border-top-0 p-4" id="resourceTabsContent">
                    <!-- Overview -->
                    <div class="tab-pane fade show active" id="overview" role="tabpanel"
                        aria-labelledby="overview-tab">
                        <h4 class="text-danger">Explore Lifelong Learning Opportunities</h4>
                        <p>
                            At NUST, we believe that graduation is not the end, but the beginning of a
                            continuous journey of learning and self-improvement. As part of the AlumNUST community, you
                            have
                            exclusive access to lifelong learning resources designed to keep you at the forefront of
                            knowledge,
                            skills, and innovation.
                        </p>
                    </div>

                    <!-- Access -->
                    <div class="tab-pane fade" id="access" role="tabpanel" aria-labelledby="access-tab">
                        <h4 class="text-danger">NUST Library Access</h4>
                        <p>
                            As an alumnus, you continue to enjoy unlimited access to the NUST Library’s vast
                            resources, including:
                        </p>
                        <ul>
                            <li class="text-dark">• Online Journals & Databases</li>

                            <li class="text-dark">• E-Learning Resources</li>

                            <li class="text-dark">• Research Materials</li>
                        </ul>
                    </div>

                    <!-- Courses -->
                    <div class="tab-pane fade" id="courses" role="tabpanel" aria-labelledby="courses-tab">
                        <h4 class="text-danger">Online/Offline Courses and Certifications</h4>
                       <p class="text-dark">
                                Lifelong learning is all about flexibility. That’s why NUST provides alumni with the
                                opportunity to enroll in online/offline courses and certifications via their
                                collaboration with various platforms, covering diverse fields such as:

                            </p>
                            <ul class="list-unstyled">
                                <li class="text-dark">• Technology & Engineering</li>

                                <li class="text-dark">• Business & Management</li>

                                <li class="text-dark">• Health Sciences</li>

                            </ul>
                    </div>

                    <!-- Conferences -->
                    <div class="tab-pane fade" id="conferences" role="tabpanel" aria-labelledby="conferences-tab">
                        <h4 class="text-danger">Workshops, Seminars, and Conferences</h4>
                       <p class="text-dark">
                                Alumni have access to a variety of interactive learning opportunities such as:
                            </p>
                            <ul class="list-unstyled">
                                <li class="text-dark">• Workshops: Practical, hands-on sessions offered/arranged by
                                    experts in various NUST schools.</li>

                                <li class="text-dark">• Seminars: Academic seminars organized by different NUST schools,
                                    covering specialized topics, research findings, and industry trends.</li>

                                <li class="text-dark">• Conferences: Participate in national and international
                                    conferences held by NUST’s various schools and research centers.</li>

                            </ul>
                            <h6>How to Get Involved:</h6>
                            <p class="text-dark">
                                Stay updated on upcoming workshops, seminars, and conferences via the Alumni Portal or
                                subscribe to event newsletters to never miss an opportunity.
                            </p>
                    </div>

                    <!-- Mentorship -->
                    <div class="tab-pane fade" id="mentorship" role="tabpanel" aria-labelledby="mentorship-tab">
                        <h4 class="text-danger">Alumni Mentorship Programs</h4>
                        <p class="text-dark">
                                Another pillar of lifelong learning at NUST is the Alumni Mentorship Program, where you
                                can:


                            </p>
                         <ul class="list-unstyled">
                                <li class="text-dark">• Mentor current students: Share your knowledge and experience
                                    with the next generation of NUSTians.</li>

                                <li class="text-dark">• Receive mentorship: Connect with senior alumni who can provide
                                    career guidance and expert advice to help you.</li>

                                {{-- <li class="text-dark">• Research Materials: Take advantage of research papers,
                                    reports, and publications that keep you ahead in your profession.</li>
                                --}}
                            </ul>
                            <h6>How to Get Involved:</h6>
                            <p class="text-dark">
                                Sign up for the mentorship program through the Alumni Portal and either offer your
                                expertise as a mentor or find a mentor to help guide you.
                            </p>
                    </div>

                    <!-- Global Network -->
                    <div class="tab-pane fade" id="global" role="tabpanel" aria-labelledby="global-tab">
                        <h4 class="text-danger">Global Network</h4>
                         <p class="text-dark">
                                By joining the global NUST Alumni Network, you not only get access to resources at NUST
                                but also:

                            </p>

                             <ul class="list-unstyled">
                                <li class="text-dark">1. Engage with a worldwide community of alumni, where you can
                                    share knowledge, collaborate on research, and participate in online discussions
                                    across borders.</li>

                                <li class="text-dark">2. Access exclusive events like international workshops,
                                    networking meetups, and academic exchanges.</li>


                            </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('layouts.footer')
    @include('layouts.script')
</body>

</html>
