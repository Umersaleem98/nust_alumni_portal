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
        <img src="{{ asset('templates/img/logoo.jpg') }}" alt="Logo"
            style="height: 80px; width: auto; margin-right: 5px;">
        {{-- <span class="mx-2" style="font-size: 60px; color: #00538D">|</span> --}}

    </a>
    {{-- <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center px-3">
        <!-- Logo Image -->
        <img src="{{ asset('templates/img/logo.png') }}" alt="Logo" style="height: 60px; width: auto; margin-right: 5px;">
        <span class="mx-2" style="font-size: 60px; color: #00538D">|</span>
        <!-- Text -->
        <h4 class="m-0 font-weight-bold" style="color: #6A0000;">NUST ALUMNI PORTAL</h4>
    </a> --}}

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
                    <a class="dropdown-item" href="{{ url('about-staff-directory') }}">Office Directory</a>
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
                    <a class="dropdown-item"
                        href="{{ url('resources/transcript-degree-verification') }}">Transcript/Degree Verification</a>

                </div>
            </li>

            <!-- Publications Dropdown -->
            {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="publicationsDropdown" data-toggle="dropdown">Publications</a>
                <div class="dropdown-menu" aria-labelledby="publicationsDropdown">
                    <a class="dropdown-item" href="research-papers.html">Research Papers</a>
                    <a class="dropdown-item" href="journals.html">Journals</a>
                    <a class="dropdown-item" href="newsletters.html">Newsletters</a>
                </div>
            </li> --}}


            <!-- Event Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="eventDropdown" data-toggle="dropdown">Event</a>
                <div class="dropdown-menu" aria-labelledby="eventDropdown">
                    <a class="dropdown-item" href="{{ url('events/alumevent-calendar') }}">AlumEvent Calendar</a>
                    <a class="dropdown-item" href="{{ url('events/reunions') }}">Reunions</a>
                    <a class="dropdown-item" href="{{ url('events/homecoming') }}">Homecoming</a>
                    <a class="dropdown-item" href="{{ url('events/iftar-meetups') }}">Iftar Meetups</a>
                    <a class="dropdown-item" href="{{ url('events/alumnust-day') }}">AlumNUST Day</a>
                </div>
            </li>

            <!-- AlumNUST Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="alumDropdown" data-toggle="dropdown">AlumNUST</a>
                <div class="dropdown-menu" aria-labelledby="alumDropdown">
                    <a class="dropdown-item" href="{{ url('alumnust/association') }}">Association</a>
                    <a class="dropdown-item" href="{{ url('alumnust/international-chapters') }}">International
                        Chapters</a>
                    <a class="dropdown-item" href="{{ url('alumnust/national-chapters') }}">National Chapters</a>
                    <a class="dropdown-item" href="{{ url('alumnust/featured') }}">Featured/Spotlight</a>
                    <a class="dropdown-item" href="{{ url('alumnust/in-memory') }}">In Memory Of</a>
                </div>
            </li>

            <!-- Campus Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="campusDropdown" data-toggle="dropdown">Campus</a>
                <div class="dropdown-menu" aria-labelledby="campusDropdown">
                    <a class="dropdown-item" href="{{ url('campus/campus-life') }}">Campus Life</a>
                    <a class="dropdown-item" href="{{ url('campus/campus-view') }}">Campus View</a>
                    <a class="dropdown-item" href="{{ url('campus/visit-campus') }}">Visit Campus</a>
                </div>
            </li>

            <!-- Get Involved Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="involvedDropdown" data-toggle="dropdown">Get Involved</a>
                <div class="dropdown-menu" aria-labelledby="involvedDropdown">
                    <a class="dropdown-item" href="{{ url('get-involved/my-alum-story') }}">My Alum Story</a>
                    <a class="dropdown-item" href="{{ url('get-involved/alumnust-ambassador') }}">Ambassador
                        Program</a>
                    <a class="dropdown-item" href="{{ url('get-involved/social-interaction') }}">Social
                        Interaction</a>
                    <a class="dropdown-item" href="{{ url('get-involved/volunteer') }}">Volunteer Program</a>
                    <a class="dropdown-item" href="{{ url('get-involved/alumnust-giving') }}">AlumNUST Giving</a>
                    <a class="dropdown-item" href="{{ url('get-involved/contact') }}">Contact Us</a>
                </div>
            </li>

        </ul>
    </div>
</nav>
<!-- Navbar End -->
