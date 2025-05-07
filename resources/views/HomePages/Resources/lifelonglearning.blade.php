<html lang="en">

<head>
    @include('layouts.head')

    <!-- AOS Animation CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet"> --}}
    <style>
        /* Add background image to all cards */
        .card-bg-overlay {
            background-image: url('/templates/img/textbackground.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            border-radius: 20px; 
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


    
    <div class="container-fluid my-2">
        <div class="row align-items-center">
            <div class="col-md-12">
                <img src="{{ asset('templates/img/NCL.gif') }}" alt="Resources Image"
                    class="img-fluid rounded shadow w-100" >
            </div>          
        </div>
    </div>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-4" data-aos="fade-up">
                <h3 class="fw-bold text-danger text-center">Explore Lifelong Learning Opportunities</h3>
                <p class="text-dark">At NUST, we believe that graduation is not the end, but the beginning of a continuous journey of learning and self-improvement. As part of the AlumNUST community, you have exclusive access to lifelong learning resources designed to keep you at the forefront of knowledge, skills, and innovation.
                    </p>
                   
            </div>
            <div class="row g-1">

                <!-- Card 1 -->
                <div class="col-md-6 col-lg-6 mb-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 shadow-sm card-bg-overlay">
                        <div class="card-body">
                            <h5 class="card-title text-danger text-center">Stay at the Cutting Edge with NUST Library Access
                            </h5>
                            <p class="text-dark">
                                Another pillar of lifelong learning at NUST is the Alumni Mentorship Program, where you can:As an alumnus, you continue to enjoy unlimited access to the NUST Library’s vast resources, including:

                            </p>
                            <ul class="list-unstyled">
                                <li class="text-dark">• Online Journals & Databases: Stay updated with the latest research, publications, and academic articles in your field.</li>

                                <li class="text-dark">• E-Learning Resources: Access an extensive collection of online courses, tutorials, and training modules to enhance your skill set.</li>

                                <li class="text-dark">• Research Materials: Take advantage of research papers, reports, and publications that keep you ahead in your profession.</li>
                                
                            </ul>
                            <h6>How to Access:</h6>
                            <p class="text-dark">
                                -> Login to the NUST Alumni Portal and use your AlumCard credentials to gain access to the online library system.
                            </p>
                        </div>
                    </div>
                </div>
              
                <!-- Card 1 -->
                <div class="col-md-6 col-lg-6 mb-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 shadow-sm card-bg-overlay">
                        <div class="card-body">
                            <h5 class="card-title text-danger text-center">Online/Offline Courses and Certifications
                            </h5>
                            <p class="text-dark">
                                Lifelong learning is all about flexibility. That’s why NUST provides alumni with the opportunity to enroll in online courses and certifications, covering diverse fields such as:
                            </p>
                            <ul class="list-unstyled">
                                <li class="text-dark">• Technology & Engineering: Stay ahead in AI, ML, cybersecurity, and more.</li>

                                <li class="text-dark">• Business & Management: Master the latest trends in entrepreneurship, leadership, and management.</li>

                                <li class="text-dark">• Health Sciences: Gain in-depth knowledge about emerging medical technologies and innovations.</li>
                                
                            </ul>
                            <h6>How to Get Involved:</h6>
                            <p class="text-dark">
                                Sign up for the mentorship program through the Alumni Portal and either offer your expertise as a mentor or find a mentor to help guide you.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 mb-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100 shadow-sm card-bg-overlay">
                        <div class="card-body">
                            <h5 class="card-title text-danger text-center">Workshops, Seminars, and Conferences </h5>
                            <p class="text-dark">
                                Alumni have access to a variety of interactive learning opportunities such as:
                            </p>
                            <ul class="list-unstyled">
                                <li class="text-dark">• Workshops: Practical, hands-on sessions hosted by faculty and industry leaders. These workshops are offered across various departments and schools within NUST.</li>

                                <li class="text-dark">• Seminars: Academic seminars organized by different NUST schools, covering specialized topics, research findings, and industry trends.</li>

                                <li class="text-dark">• Conferences: Participate in national and international conferences held by NUST’s various schools and research centers, where you can network, learn, and contribute to cutting-edge discussions.</li>
                                
                            </ul>
                            <h6>How to Get Involved:</h6>
                            <p class="text-dark">
                                Stay updated on upcoming workshops, seminars, and conferences via the Alumni Portal or subscribe to event newsletters to never miss an opportunity.
                            </p>
                        </div>
                    </div>
                </div>
              
                <div class="col-md-6 col-lg-6 mb-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="card h-100 shadow-sm card-bg-overlay">
                        <div class="card-body">
                            <h5 class="card-title text-danger text-center">Alumni Mentorship Programs
                            </h5>
                            <p class="text-dark">
                                Another pillar of lifelong learning at NUST is the Alumni Mentorship Program, where you can:

                            </p>
                            <ul class="list-unstyled">
                                <li class="text-dark">• Mentor current students: Share your knowledge and experience with the next generation of NUSTians.</li>

                                <li class="text-dark">• Receive mentorship: Connect with senior alumni who can provide career guidance and expert advice to help you navigate new challenges or career shifts.</li>

                                {{-- <li class="text-dark">• Research Materials: Take advantage of research papers, reports, and publications that keep you ahead in your profession.</li>
                                 --}}
                            </ul>
                            <h6>How to Get Involved:</h6>
                            <p class="text-dark">
                                Sign up for the mentorship program through the Alumni Portal and either offer your expertise as a mentor or find a mentor to help guide you.
                            </p>
                        </div>
                    </div>
                </div>
              
              
                <div class="col-md-6 col-lg-6 mb-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="card h-100 shadow-sm card-bg-overlay">
                        <div class="card-body">
                            <h5 class="card-title text-danger text-center">Global Network
                            </h5>
                            <p class="text-dark">
                                By joining the global NUST Alumni Network, you not only get access to resources at NUST but also:

                            </p>
                            <ul class="list-unstyled">
                                <li class="text-dark">1. Engage with a worldwide community of alumni, where you can share knowledge, collaborate on research, and participate in online discussions across borders.</li>

                                <li class="text-dark">2. Access exclusive events like international workshops, networking meetups, and academic exchanges.</li>

                                
                            </ul>
                            
                        </div>
                    </div>
                </div>
        
            </div>

            <!-- Final CTA -->
            <div class="text-center mt-5" data-aos="fade-up">
                <h4 class="fw-bold">Start Your Lifelong Learning Journey Today</h4>
                <p class="text-dark">Stay sharp, stay curious, and keep evolving with NUST’s Lifelong Learning Program.</p>
            </div>

        </div>
    </section>

    @include('layouts.footer')

    @include('layouts.script')

    <!-- AOS Animation JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
