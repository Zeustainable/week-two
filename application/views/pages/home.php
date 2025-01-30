<section class="carouselSection">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="/week-two/assets/images/developer.png" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="/week-two/assets/images/dlsud.png" alt="Second slide">
            </div>
            <div class="carousel-item">
            <a href="https://olpmc.net:12443/Index" target="_blank"><img class="d-block w-100" src="/week-two/assets/images/olpmc.png" alt="Third slide"></a>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<section class="sectionMargin">
    <section class="mainSection">
        <div class="divIntroduction">
          <h1>WELCOME TO MY WEBSITE</h1>
        </div>
        <div class="divDashboard">
        <div class="card card-hover" style="width: auto;">
            <img src="/week-two/assets/images/resume-image.png" class="card-img-top" alt="...">
            <div class="card-body card-introduction">
              <h5 class="card-title">Portfolio</h5>
              <p class="card-text card-justify">A portfolio showcases your skills, achievements, and experiences, presenting your best work to potential employers or clients.</p>
              <a href="<?=base_url('Pages/Portfolio'); ?>" class="btn btn-primary btn-introduction">Portfolio</a>
            </div>
          </div>
          <div class="card card-hover" style="width: auto;">
            <img src="/week-two/assets/images/crud-image.png" class="card-img-top" alt="...">
            <div class="card-body card-introduction">
              <h5 class="card-title">CRUD Application</h5>
              <p class="card-text card-justify">A CRUD application manages data by enabling Create, Read, Update, and Delete operations, streamlining database interactions for users.</p>
              <a href="<?=base_url('Pages/Login'); ?>" class="btn btn-primary btn-introduction">CRUD Application</a>
            </div>
          </div>
          <div class="card card-hover" style="width: auto;">
            <img src="/week-two/assets/images/calculator-image.png" class="card-img-top" alt="...">
            <div class="card-body card-introduction">
              <h5 class="card-title">Calculator</h5>
              <p class="card-text card-justify">A simple calculator performs basic arithmetic operations: addition, subtraction, multiplication, and division, enabling quick calculations.</p>
              <a href="<?=base_url('Pages/Login'); ?>" class="btn btn-primary btn-introduction">Calculator</a>
            </div>
          </div>
        </div>
    </section>
</section>