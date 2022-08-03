<?php 
  $currentPage = 'home';
  include('components/header.php');
?>

<main>

  <!-- TODO: socials -->

  <!-- splash page -->
  <section class="p-4 text-light text-center d-flex align-items-center" id="splash">
    <div class="container h-75 d-flex flex-column justify-content-between align-items-center">
      <h1 class="display-6">Begin your greatest adventure</h1>
      <h1 class="display-1 mb-4">The Journey of <span class="fw-bold text-warning">Discovering Africa</span></h1>
      <a class="btn btn-lg btn-warning text-dark rounded-1" href="#Africa">Know More</a>
    </div>
    <div class="splash-fade position-absolute top-100 start-50 translate-middle min-vw-100 h-25"></div>
  </section>

  <!-- pic and card x2 -->
  <section class="p-3 text-light text-start bg-dark" id="Africa">
    <div class="container py-5">

      <div class="row g-5 py-5 justify-content-around align-items-center">
        <div class="col-auto">
          <div class="card pic-card bg-transparent border-0">
            <div class="card-header font-monospace border-bottom border-light border-1 bg-transparent">
              Article
            </div>
            <div class="card-body">
              <h1 class="card-title text-warning"><b>Africa</b></h1>
              <h6 class="card-subtitle mb-2 text-warning fw-light"><i>the cradle of life</i></h6>
              <p class="lead card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, quas?</p>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia dicta ipsam
                magni, obcaecati distinctio eveniet laboriosam porro voluptatum illo laudantium nobis aut eaque,
                praesentium inventore minus odit minima nostrum. Perferendis.
              </p>
            </div>
            <div class="card-footer d-flex justify-content-end border-top border-light border-1 bg-transparent">
              <a href="<?=SITEURL.'animals.php'?>" class="btn btn-outline-warning btn-sm">Read more</a>
            </div>
          </div>
        </div>
        <div class="col-auto">
          <img src="img/home/card-africa.jpg" alt="tree" class="img-fluid card-pic">
        </div>
      </div>

      <div class="row g-5 py-5 flex-row-reverse justify-content-around align-items-center">
        <div class="col-auto">
          <div class="card pic-card bg-transparent border-0">
            <div class="card-header font-monospace border-bottom border-light border-1 bg-transparent">
            Animal
            </div>
            <div class="card-body">
              <h1 class="card-title text-warning"><b>Lions</b></h1>
              <h6 class="card-subtitle mb-2 text-warning fw-light"><i>king of the jungle</i></h6>
              <p class="lead card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, quas?</p>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia dicta ipsam
              magni, obcaecati distinctio eveniet laboriosam porro voluptatum illo laudantium nobis aut eaque,
              praesentium inventore minus odit minima nostrum. Perferendis.
              </p>
            </div>
            <div class="card-footer d-flex justify-content-end border-top border-light border-1 bg-transparent">
              <a href=<?=SITEURL.'animal.php?id=1'?> class="btn btn-outline-warning btn-sm">Read more</a>
            </div>
          </div>
        </div>
        <div class="col-auto">
          <img src="img/home/card-lion.jpg" alt="lion" class="img-fluid card-pic">
        </div>
      </div>

    </div>  
  </section>

  <!-- carousel -->
  <section class="p-4 bg-dark">
    <div class="container">
      <div id="carousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src=<?=SITEURL.'img/cards/1.jpeg'?> class="d-block w-100" alt="lion">
            <div class="carousel-caption d-none d-md-block">
              <h5>Lions</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src=<?=SITEURL.'img/cards/2.jpeg'?> class="d-block w-100" alt="crocodile">
            <div class="carousel-caption d-none d-md-block">
              <h5>Crocodile</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src=<?=SITEURL.'img/cards/3.jpeg'?> class="d-block w-100" alt="elephant">
            <div class="carousel-caption d-none d-md-block">
              <h5>Elephant</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    
  </section>

</main>

<script>
  function calcVh() {
    const splash = document.getElementById('splash');
    splash.style.minHeight = window.innerHeight + 'px';
  }
  calcVh();
</script>

<?php include('components/footer.php') ?>