<!-- Campus Section Start -->
<section id="campus" class="py-5 bg-light">

    <div class="container mt-4">
        <div class="row justify-content-center text-center">
            <div class="col-md-8 d-flex align-items-center justify-content-center gap-3 flex-wrap">
                <!-- Blinking SVG -->
                <img src="{{ asset('templates/img/11.svg') }}" class="blinking-svg" width="70" alt="Blinking SVG">
                <h1 class="text-danger mb-0">Campus</h1>
            </div>
            <div class="col-md-10">
                <h3 class="mt-2" style="color: #125482;">Experience the vibrant campus life at NUST</h3>
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





    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="ratio ratio-16x9">
                    <video controls autoplay muted loop class="w-100">
                        <source src="templates/videos/Campus-Tour.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Campus Section End -->
