<div class="container mt-4">
    <div class="row justify-content-center text-center">
      <div class="col-md-8 d-flex align-items-center justify-content-center gap-3 flex-wrap">
        <!-- Blinking SVG -->
        <img src="{{ asset('templates/img/12.svg') }}" class="blinking-svg" width="70" alt="Blinking SVG">
        <h1 class="text-danger mb-0">AlumNews</h1>
      </div>
      <div class="col-md-10">
        <h3 class="mt-2" style="color: #125482;">Stay Informed, Stay Connected</h3>
      </div>
      <div class="col-md-12 mt-3">
        <marquee behavior="scroll" direction="left" style="background-color: #FAAF19; color: black; padding: 10px; font-weight: 600;">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo enim sunt, atque deleniti minima officiis,
          alias, culpa mollitia et nobis quasi eligendi facere? Vel, perferendis.
        </marquee>
      </div>
    </div>
  </div>
  

<style>
    .blinking-svg {
        animation: blink 1.5s infinite;
    }

    @keyframes blink {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.2;
        }
    }
</style>

<!-- JavaScript -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const cards = document.querySelectorAll('.card.slide-in');

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('appear');
                    observer.unobserve(entry.target); // Animate once only
                }
            });
        }, {
            threshold: 0.2 // Trigger when 20% of card is visible
        });

        cards.forEach(card => observer.observe(card));
    });
</script>



<div class="container mt-4 mb-4 overflow-hidden">
    <div class="row">
        <!-- Left Side: Main News -->
        <div class="col-lg-8">
            <div class="row g-4">
                <!-- News Card 1 -->
                <div class="col-md-6">
                    <div class="card h-100">
                        <img src="{{ asset('templates/img/AlumNews.gif') }}" class="card-img-top" alt="News Image" style="max-height: 200px">
                        <div class="card-body">
                            <h5 class="card-title">Alumni Startup Raises Funding</h5>
                            <p class="card-text">A NUST graduate-led startup has raised seed funding to scale operations
                                across South Asia.</p>
                            <a href="#" class="btn btn-sm btn-danger">Read More</a>
                        </div>
                    </div>
                </div>



                <!-- News Card 4 -->
                <div class="col-md-6">
                    <div class="card h-100">
                        <img src="{{ asset('templates/img/AlumNews.gif') }}" class="card-img-top" alt="News Image" style="max-height: 200px">
                        <div class="card-body">
                            <h5 class="card-title">NUST Alumni in Civil Services</h5>
                            <p class="card-text">A proud moment as 12 alumni secure top ranks in CSS 2025, making the
                                institution proud.</p>
                            <a href="#" class="btn btn-sm btn-danger">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side: Recent Vertical News -->
        <div class="col-lg-4 mt-4 mt-lg-0">
            <h5 class="text-dark mb-3">📢 Recent Updates</h5>
            <div style="height: 400px; overflow-y: auto;" class="border p-3 rounded bg-light">
                <ul class="list-unstyled mb-0">
                    <li class="mb-3"><i class="far fa-newspaper text-primary me-2"></i><strong>Mar 2025:</strong>
                        Alumni awarded for tech innovation in Berlin.</li>
                    <li class="mb-3"><i class="far fa-newspaper text-primary me-2"></i><strong>Feb 2025:</strong> New
                        mentorship program launched by Alumni Office.</li>
                    <li class="mb-3"><i class="far fa-newspaper text-primary me-2"></i><strong>Jan 2025:</strong>
                        Alumni cricket league to kick off in Lahore.</li>
                    <li class="mb-3"><i class="far fa-newspaper text-primary me-2"></i><strong>Dec 2024:</strong>
                        NUSTian entrepreneur opens AI Lab in Singapore.</li>
                    <li class="mb-3"><i class="far fa-newspaper text-primary me-2"></i><strong>Nov 2024:</strong>
                        Alumni couple establishes education scholarship.</li>
                    <li class="mb-3"><i class="far fa-newspaper text-primary me-2"></i><strong>Oct 2024:</strong> NUST
                        alumni featured in Forbes 30 under 30.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
