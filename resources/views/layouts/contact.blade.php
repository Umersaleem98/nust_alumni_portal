<!-- Get Involved Section Start -->
<div class="container-xxl courses my-3 py-3 pb-0">
    <div class="container">
  
      <!-- Section Title -->
      <div class="container mt-4">
        <div class="row justify-content-center text-center">
          <div class="col-md-8 d-flex align-items-center justify-content-center gap-3 flex-wrap">
            <img src="{{ asset('templates/img/15.svg') }}" class="blinking-svg" width="70" alt="Blinking SVG">
            <h1 class="text-danger mb-3">Get Involved</h1>
          </div>
          <div class="col-md-10">
            <h3 class="mb-2" style="color: #125482;">Make a Difference, Connect, and Give Back</h3>
            <p class="text-dark mt-3">
              The Get Involved section empowers NUST alumni to stay connected, volunteer, and contribute to the
              university community in meaningful ways. Whether you're looking to support current students, mentor others, or
              amplify the NUST spirit, there are endless opportunities for you to engage, share your expertise, and make
              a lasting impact.
            </p>
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
      <!-- Flip Cards -->
      <div class="row g-4 justify-content-center mt-4">
  
        <!-- Card 1 - Ambassador -->
        <div class="col-lg-4 col-md-6">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="{{ asset('templates/img/ambassador.png') }}" alt="Ambassador Program" class="mb-3" style="width: 100%; height: 220px;">
                <h4>Ambassador Program</h4>
              </div>
              <div class="flip-card-back ambassador-back">
                <p>As an ambassador, you will represent NUST’s values, mission, and achievements across the globe. Alumni ambassadors are the bridge between NUST and alumni in different countries, organizing events and promoting NUST initiatives.</p>
                <a href="" class="btn btn-danger sm "> read more</a>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Card 2 - Volunteer -->
        <div class="col-lg-4 col-md-6">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="{{ asset('templates/img/volunteer.png') }}" alt="Volunteer Program" class="mb-3" style="width: 100%; height: 220px;">
                <h4>Volunteer Program</h4>
              </div>
              <div class="flip-card-back volunteer-back">
                <p>As a volunteer, you can support various initiatives, from mentoring current students to organizing alumni events. Your time and expertise can help bridge the gap between generations and create opportunities for the next wave of NUST talent.</p>
                <a href="" class="btn btn-danger sm "> read more</a>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Card 3 - NUST Giving -->
        <div class="col-lg-4 col-md-6">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="{{ asset('templates/img/nustgiving.png') }}" alt="NUST Giving" class="mb-3" style="width: 100%; height: 220px;">
                <h4>NUST Giving</h4>
              </div>
              <div class="flip-card-back giving-back">
                <p>Alumni support plays a vital role in shaping the future of NUST students. Your donation, big or small, helps fund scholarships, campus improvements, and research initiatives that continue to elevate NUST's legacy.</p>
                <a href="" class="btn btn-danger sm "> read more</a>
              </div>
            </div>
          </div>
        </div>
  
      </div>
    </div>
  </div>
  <!-- Get Involved Section End -->
  
  <!-- CSS Styling -->
  <style>
  .blinking-svg {
    animation: blink 1.5s infinite;
  }
  
  @keyframes blink {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.2; }
  }
  
  .flip-card {
    background-color: transparent;
    width: 100%;
    height: 320px;
    perspective: 1000px;
  }
  
  .flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.8s;
    transform-style: preserve-3d;
  }
  
  .flip-card:hover .flip-card-inner {
    transform: rotateY(180deg);
  }
  
  .flip-card-front,
  .flip-card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 12px;
    padding: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    backface-visibility: hidden;
  }
  
  /* Front: white background, black text */
  .flip-card-front {
    background-color: white;
    color: black;
  }
  
  /* Back: custom background per card, white or black text */
  .flip-card-back {
    transform: rotateY(180deg);
    color: white;
  }
  
  .ambassador-back {
    background-color: #125482;
  }
  
  .volunteer-back {
    background-color: #ffc107;
    color: black; /* Yellow background, black text for readability */
  }
  
  .giving-back {
    background-color: #dc3545;
  }
  
  .flip-card {
  border: 2px solid #125482; /* NUST-themed blue border */
  border-radius: 12px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  overflow: hidden;
}

/* Optional: add border on front and back separately */
.flip-card-front, .flip-card-back {
  border: 1px solid #125482;
}
  </style>
  