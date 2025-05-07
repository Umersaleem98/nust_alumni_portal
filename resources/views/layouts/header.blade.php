<style>
    .navbar-nav .nav-link {
        font-size: 14px;
        padding: 6px 10px;
    }

    .dropdown-menu .dropdown-item {
        font-size: 13.5px;
        padding: 6px 14px;
    }

    @media (max-width: 767.98px) {
        .navbar-brand h4 {
            font-size: 16px;
        }

        .navbar-nav .nav-link {
            font-size: 13px;
        }
    }
</style>

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top p-0">
    {{-- <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center px-3">
        <h4 class="m-0 font-weight-bold">NUST ALUMNI PORTAL</h4>
    </a> --}}
    <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center px-3">
        <!-- Logo Image -->
        <img src="{{ asset('templates/img/logo.png') }}" alt="Logo" style="height: 60px; width: auto; margin-right: 5px;">
        <span class="mx-2" style="font-size: 60px; color: #00538D">|</span>
        <!-- Text -->
        <h4 class="m-0 font-weight-bold" style="color: #6A0000;">NUST ALUMNI PORTAL</h4>
    </a>
    
    <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
        <ul class="navbar-nav text-center mx-auto">
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link active">Home</a>
            </li>

            <!-- About Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="aboutDropdown" data-toggle="dropdown">About</a>
                <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                    <a class="dropdown-item" href="{{ url('about-rector-address') }}">Reactor Address</a>
                    <a class="dropdown-item" href="{{ url('about-mission-vission') }}">Mission & Vision</a>
                    <a class="dropdown-item" href="{{ url('about-leadership') }}">Leadership</a>
                    <a class="dropdown-item" href="{{ url('about-staff-directory') }}">Staff Directory</a>
                </div>
            </li>

            <!-- Resources Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="resourcesDropdown" data-toggle="dropdown">Resources</a>
                <div class="dropdown-menu" aria-labelledby="resourcesDropdown">
                    <a class="dropdown-item" href="{{ url('resources/alumcard') }}">AlumCard</a>
                    <a class="dropdown-item" href="{{ url('resources/campus-facilities') }}">Campus Facilities</a>
                    <a class="dropdown-item" href="{{ url('resources/life-long-learning') }}">Life Long Learning</a>
                    <a class="dropdown-item" href="{{ url('resources/alumcard-discounts') }}">AlumCard Discounts</a>
                    <a class="dropdown-item" href="{{ url('resources/transcript-degree-verification') }}">Transcript/Degree Verification</a>

                </div>
            </li>

            <!-- Publications Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="publicationsDropdown" data-toggle="dropdown">Publications</a>
                <div class="dropdown-menu" aria-labelledby="publicationsDropdown">
                    <a class="dropdown-item" href="research-papers.html">Research Papers</a>
                    <a class="dropdown-item" href="journals.html">Journals</a>
                    <a class="dropdown-item" href="newsletters.html">Newsletters</a>
                </div>
            </li>

            <!-- Event Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="eventDropdown" data-toggle="dropdown">Event</a>
                <div class="dropdown-menu" aria-labelledby="eventDropdown">
                    <a class="dropdown-item" href="alumni-network.html">Alumni Network</a>
                    <a class="dropdown-item" href="events.html">Events</a>
                    <a class="dropdown-item" href="success-stories.html">Success Stories</a>
                </div>
            </li>

            <!-- AlumNUST Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="alumDropdown" data-toggle="dropdown">AlumNUST</a>
                <div class="dropdown-menu" aria-labelledby="alumDropdown">
                    <a class="dropdown-item" href="alumni-network.html">Alumni Network</a>
                    <a class="dropdown-item" href="events.html">Events</a>
                    <a class="dropdown-item" href="success-stories.html">Success Stories</a>
                </div>
            </li>

            <!-- Campus Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="campusDropdown" data-toggle="dropdown">Campus</a>
                <div class="dropdown-menu" aria-labelledby="campusDropdown">
                    <a class="dropdown-item" href="campus-map.html">Campus Map</a>
                    <a class="dropdown-item" href="facilities.html">Facilities</a>
                    <a class="dropdown-item" href="hostel-info.html">Hostel Info</a>
                </div>
            </li>

            <!-- Get Involved Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="involvedDropdown" data-toggle="dropdown">Get Involved</a>
                <div class="dropdown-menu" aria-labelledby="involvedDropdown">
                    <a class="dropdown-item" href="volunteer.html">Volunteer</a>
                    <a class="dropdown-item" href="donate.html">Donate</a>
                    <a class="dropdown-item" href="careers.html">Careers</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- Navbar End -->
