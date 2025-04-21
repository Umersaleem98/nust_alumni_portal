<div class="container mt-4" id="Aftergraudation">
  <div class="row justify-content-center text-center">
    <div class="col-md-8 d-flex align-items-center justify-content-center gap-3 flex-wrap">
      <!-- Blinking SVG -->
      <img src="{{ asset('templates/img/14.svg') }}" class="blinking-svg" width="70" alt="Blinking SVG">
      <h1 class="text-danger mb-0">After Graduation</h1>
    </div>
    <div class="col-md-10">
      <h3 class="mt-2" style="color: #125482;">Explore Your Alumni Benefits</h3>
    </div>
  </div>
</div>
<style>
  .blinking-svg {
  animation: blink 1.5s infinite;
}

@keyframes blink {
  0%, 100% { opacity: 1; }
  50% { opacity: 0.3; }
}

</style>
<div class="container mt-2 mb-5">
  <div class="row">
    <!-- Card 1 -->
    <div class="col-md-4">
      <div class="card h-100 d-flex flex-column slide-in">
        <img src="{{ asset('templates/img/Facilities.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-danger">Facilities</h5>
          <h6 class="card-title">NUST Advantage</h6>
          <p class="card-text">
            Stay connected with your alma mater by accessing NUST’s state-of-the-art facilities including Gym, Swimming pool, Saddle club and much more.
          </p>
        </div>
        <div class="card-footer mt-auto">
          <a href="#" class="btn btn-danger">Join Now</a>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-4">
      <div class="card h-100 d-flex flex-column slide-in">
        <img src="{{ asset('templates/img/alumnicard.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-danger">AlumCard</h5>
          <h6 class="card-title">Unlock Exclusive Alumni Perks!</h6>
          <p class="card-text">
            Your AlumCard is not just a card – it's a gateway to your post-graduation identity and exclusive benefits designed to make your journey easier and more rewarding.
          </p>
        </div>
        <div class="card-footer mt-auto">
          <a href="#" class="btn btn-danger">Join Now</a>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-4">
      <div class="card h-100 d-flex flex-column slide-in">
        <img src="{{ asset('templates/img/Central-library.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-danger">Lifelong Learning</h5>
          <h6 class="card-title">Keep Evolving, Keep Growing</h6>
          <p class="card-text">
            Graduation doesn’t mean the end of your learning journey at NUST. As an AlumNUST, you can avail lifelong learning facility from NUST library to keep you on the cutting edge.
          </p>
        </div>
        <div class="card-footer mt-auto">
          <a href="#" class="btn btn-danger">Join Now</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- CSS -->
<style>
  /* Slide-in Animation */
  .card.slide-in {
    opacity: 0;
    transform: translateX(-100px);
    transition: opacity 0.8s ease-out, transform 0.8s ease-out;
  }

  .card.slide-in.appear {
    opacity: 1;
    transform: translateX(0);
  }

  /* Equal Height Fix */
  .card {
    height: 100%;
    display: flex;
    flex-direction: column;
  }

  .card-body {
    flex: 1 1 auto;
  }

  .card-footer {
    margin-top: auto;
  }

  
</style>

<style>
  .blinking-svg {
    animation: blink 1.5s infinite;
  }

  @keyframes blink {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.2; }
  }
</style>

<!-- JavaScript -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
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
