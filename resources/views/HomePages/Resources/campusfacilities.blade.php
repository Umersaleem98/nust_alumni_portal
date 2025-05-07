<head>
    @include('layouts.head')
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
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

    <section class="container py-5">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold text-danger">Campus Facilities</h2>
            <h3 class="fw-bold" style="color: #125482;">Welcome Back to Your Second Home</h3>
            <p class="text-dark" class="lead">
                At NUST, we believe your connection to campus should never fade. As part of the AlumNUST family, you’re
                warmly welcomed to enjoy our world-class facilities, dynamic societies, cafés, sports competitions, and
                more.
            </p>
        </div>

        <div class="row g-4">
            <!-- Gym Card -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="card shadow-sm h-100 border-0 card-bg-overlay">
                    <div class="card-body">
                        <h4 class="fw-bold text-danger mb-3">🏋 Gym & Fitness Center</h4>
                        <ul>
                            <li class="text-dark">Modern strength training and cardio equipment</li>
                            <li class="text-dark">Dedicated workout areas for men and women</li>
                            <li class="text-dark">Fitness guidance via NUST fitness instructor</li>
                        </ul>
                        <p class="text-dark"><strong>Timings for Alumni:</strong> 9:00 AM – 9:00 PM (Mon–Fri), 9:00 AM – 7:00 PM (Sat–Sun)</p>
                        <p class="text-dark"><strong>Membership:</strong> Register via Alumni Portal or at Sports Office (Nominal monthly
                            fee applies).</p>
                    </div>
                </div>
            </div>

            <!-- Swimming Pool Card -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card shadow-sm h-100 border-0 card-bg-overlay">
                    <div class="card-body">
                        <h4 class="fw-bold text-danger mb-3">🏊 Swimming Pool</h4>
                        <ul>
                            <li class="text-dark">Indoor, temperature-controlled pool</li>
                            <li class="text-dark">Professional lifeguard supervision</li>
                            <li class="text-dark">Separate timings for male and female alumni</li>
                        </ul>
                        <p class="text-dark"><strong>Access Hours:</strong> 9:00 AM – 9:00 PM (Mon–Fri), 9:00 AM – 7:00 PM (Sat–Sun)</p>
                        <p class="text-dark"><strong>Note:</strong> Registration with a small fee is required.</p>
                    </div>
                </div>
            </div>

            <!-- Saddle Club Card -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card shadow-sm h-100 border-0 card-bg-overlay">
                    <div class="card-body">
                        <h4 class="fw-bold text-danger mb-3">🐎 Saddle Club</h4>
                        <ul>
                            <li class="text-dark">Horse riding lessons (beginner to advanced)</li>
                            <li class="text-dark">Regular training sessions</li>
                            <li class="text-dark">A serene escape from daily hustle</li>
                        </ul>
                        <p class="text-dark"><strong>Access:</strong> Register with Saddle Club management. Riding gear available for
                            rent.</p>
                    </div>
                </div>
            </div>

            <!-- Cafés Card -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card shadow-sm h-100 border-0 card-bg-overlay">
                    <div class="card-body">
                        <h4 class="fw-bold text-danger mb-3">☕ Campus Cafés</h4>
                        <ul>
                            <li class="text-dark">Variety of local and international food</li>
                            <li class="text-dark">Casual meetups with friends and faculty</li>
                            <li class="text-dark">Wi-Fi and scenic campus views</li>
                        </ul>
                        <p class="text-dark"><strong>Access:</strong> Present your AlumCard for entry during operational hours.</p>
                    </div>
                </div>
            </div>

            <!-- Sports Grounds Card -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card shadow-sm h-100 border-0 card-bg-overlay">
                    <div class="card-body">
                        <h4 class="fw-bold text-danger mb-3">⚽ Sports Grounds</h4>
                        <ul>
                            <li class="text-dark">Football Grounds</li>
                            <li class="text-dark">Cricket Fields</li>
                            <li class="text-dark">Basketball & Volleyball Courts</li>
                            <li class="text-dark">Indoor Sports Complex (Badminton, Table Tennis)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Student Societies Card -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="card shadow-sm h-100 border-0 card-bg-overlay">
                    <div class="card-body">
                        <h4 class="fw-bold text-danger mb-3">🎭 Student Societies</h4>
                        <p class="text-dark">Join events, competitions, and mentorship programs in:</p>
                        <ul>
                            <li class="text-dark">Debate and Public Speaking Clubs</li>
                            <li class="text-dark">Performing Arts Societies</li>
                            <li class="text-dark">Tech & Innovation Groups</li>
                            <li class="text-dark">Environmental Forums</li>
                        </ul>
                        <p class="text-dark"><strong>Opportunities:</strong> Attend events, mentor students, judge competitions, conduct
                            sessions</p>
                        <p class="text-dark"><strong>Stay updated:</strong> via Alumni Portal.</p>
                    </div>
                </div>
            </div>

            <!-- Sports Competitions Card -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="card shadow-sm h-100 border-0 card-bg-overlay">
                    <div class="card-body">
                        <h4 class="fw-bold text-danger mb-3">⚽🏆 Sports Competitions</h4>
                        <ul>
                            <li class="text-dark">NUST Football League (NSL)</li>
                            <li class="text-dark">NUST Champions League (NCL)</li>
                            <li class="text-dark">Annual Sports Gala</li>
                        </ul>
                        <p class="text-dark">Support, attend, or participate as alumni!</p>
                    </div>
                </div>
            </div>

            <!-- Timings & Guidelines Card -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="700">
                <div class="card shadow-sm h-100 border-0 card-bg-overlay">
                    <div class="card-body">
                        <h4 class="fw-bold text-danger mb-3">🕒 Timings and Guidelines for Alumni Access</h4>
                        <p class="text-dark"><strong>Entry Timings:</strong> 9:00 AM – 9:00 PM (Mon–Fri), 9:00 AM – 7:00 PM (Sat–Sun)</p>
                        <ul>
                            <li class="text-dark">Present valid AlumCard at entry</li>
                            <li class="text-dark">Membership required for specific facilities</li>
                            <li class="text-dark">Wear appropriate attire</li>
                            <li class="text-dark">Comply with security checks</li>
                        </ul>
                        <p class="text-dark"><strong>Note:</strong> NUST may update policies based on academic schedules or events.</p>
                    </div>
                </div>
            </div>
          
            <div class="text-center mt-5" data-aos="zoom-in">
                <h5 class="fw-bold text-danger">🌟 Reignite Your NUST Spirit</h5>
                <p class="text-dark">Your bond with NUST is lifelong. Engage, contribute, and create new memories — because NUST is always your home.</p>
            </div>
        </div>

        <!-- Closing Statement -->

    </section>

    @include('layouts.footer')

    <!-- Scripts -->
    @include('layouts.script')

    <!-- AOS Animation JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>
