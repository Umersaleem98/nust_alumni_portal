<!-- Pagination CSS (Optional Styling) -->
<style>
    .pagination {
        justify-content: center;
    }
</style>

<section class="bg-light mb-5">

    <div class="container mt-4">
        <div class="row justify-content-center text-center">
            <div class="col-md-8 d-flex align-items-center justify-content-center gap-3 flex-wrap mt-5">
                <!-- Blinking SVG -->
                <img src="{{ asset('templates/img/13.svg') }}" class="blinking-svg" width="70" alt="Blinking SVG">
                <h1 class="text-danger mb-0">AlumEvent</h1>
            </div>
            <div class="col-md-10">
                <h3 class="mt-2" style="color: #125482;">Stay Informed, Stay Connected</h3>
            </div>
            <div class="col-md-12 mt-3">
                <marquee behavior="scroll" direction="left"
                    style="background-color: #FAAF19; color: black; padding: 10px; font-weight: 600;">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo enim sunt, atque deleniti minima
                    officiis,
                    alias, culpa mollitia et nobis quasi eligendi facere? Vel, perferendis.
                </marquee>
            </div>
        </div>
    </div>

    <div class="container my-5 mb-5" id="AlumEvent">
        <!-- Tabs -->
        <ul class="nav nav-tabs" id="eventTabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="event-tab" data-toggle="tab" href="#event" role="tab"
                    aria-controls="event" aria-selected="true">Event</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="upcoming-tab" data-toggle="tab" href="#upcoming" role="tab"
                    aria-controls="upcoming" aria-selected="false">Upcoming Event</a>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content" id="eventTabsContent">

            <!-- Event Tab -->
            <div class="tab-pane fade show active" id="event" role="tabpanel" aria-labelledby="event-tab">
                <div class="table-responsive mt-4" style="max-height: 400px; overflow-y: auto;">
                    <table class="table table-bordered table-hover mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th>Image</th>
                                <th>Event Name</th>
                                <th>Date</th>
                                <th>Destination</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 1; $i <= 10; $i++) <!-- You can increase rows for testing scroll -->
                                <tr>
                                    <td><img src="{{ asset('templates/img/about-1.jpg') }}" alt="Event {{ $i }}" width="80"></td>
                                    <td>Alumni Meetup {{ $i }}</td>
                                    <td>20-Apr-2025</td>
                                    <td>UK</td>
                                    <td>
                                        <a class="btn btn-danger btn-sm">Details</a>
                                        <a class="btn btn-danger btn-sm">Register</a>
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Upcoming Event Tab -->
            <div class="tab-pane fade" id="upcoming" role="tabpanel" aria-labelledby="upcoming-tab">
                <div class="table-responsive mt-4" style="max-height: 400px; overflow-y: auto;">
                    <table class="table table-bordered table-hover mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th>Image</th>
                                <th>Event Name</th>
                                <th>Date</th>
                                <th>Destination</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($j = 1; $j <= 10; $j++) <!-- You can increase rows for testing scroll -->
                                <tr>
                                    <td><img src="{{ asset('templates/img/about-1.jpg') }}" alt="Upcoming Event {{ $j }}" width="80"></td>
                                    <td>Career Fair {{ $j }}</td>
                                    <td>10-May-2025</td>
                                    <td>Karachi</td>
                                    <td>
                                        <a class="btn btn-danger btn-sm">Details</a>
                                        <a class="btn btn-danger btn-sm">Register</a>
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <br><br>
</section>

<!-- Blinking SVG Animation -->
<style>
    .blinking-svg {
        animation: blink 1.5s infinite;
    }

    @keyframes blink {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.2; }
    }
</style>

<!-- JavaScript (Animation for other cards if needed) -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const cards = document.querySelectorAll('.card.slide-in');

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('appear');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.2
        });

        cards.forEach(card => observer.observe(card));
    });
</script>
