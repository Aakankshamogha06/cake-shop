<section class="forex-page analytics-sec z-0 position-relative overflow-visible" style="background-image: url(./img/analytics-bg1.svg);">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="title mb-3 wow fadeInUp" data-wow-delay="200ms"><span class="text-gradient">Analytics</span></h2>
                <p class="wow fadeInUp">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere corrupti minus sit architecto qui aliquid quod libero dolores ipsam quasi.</p>
            </div>
        </div>
    </div>
</section>

<section class="funding-section">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 text-center">
                <h2 class="title mb-3 wow fadeInUp"><span class="text-gradient">Analytics</span> News</h2>
            </div>
            <div class="col-12">
                <ul class="nav nav-tabs border-0 flex-nowrap justify-content-md-center mb-5 overflow-x-auto overflow-y-hidden pb-1 text-nowrap" id="myTab" role="tablist">
                    <li class="nav-item m-0" role="presentation">
                        <button class="nav-link text-uppercase active" id="technincal-tab" data-bs-toggle="tab" data-bs-target="#technincal-tab-pane" type="button" role="tab" aria-controls="technincal-tab-pane" aria-selected="true">
                            <span>Technincal</span>
                        </button>
                    </li>
                    <li class="nav-item m-0" role="presentation">
                        <button class="nav-link text-uppercase" id="fundamental-tab" data-bs-toggle="tab" data-bs-target="#fundamental-tab-pane" type="button" role="tab" aria-controls="fundamental-tab-pane" aria-selected="false">
                            <span>Fundamental</span>
                        </button>
                    </li>
                    <li class="nav-item m-0" role="presentation">
                        <button class="nav-link text-uppercase" id="economic-tab" data-bs-toggle="tab" data-bs-target="#economic-tab-pane" type="button" role="tab" aria-controls="economic-tab-pane" aria-selected="false">
                            <span>Economic</span>
                        </button>
                    </li>
                    <li class="nav-item m-0" role="presentation">
                        <button class="nav-link text-uppercase" id="video-tab" data-bs-toggle="tab" data-bs-target="#video-tab-pane" type="button" role="tab" aria-controls="video-tab-pane" aria-selected="false">
                            <span>Video</span>
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="technincal-tab-pane" role="tabpanel" aria-labelledby="technincal-tab" tabindex="0">
                        <div class="row gy-4 blog-card-section">
                            <?php
                            for ($i = 0; $i < 3; $i++) {
                            ?>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="card border-0 wow fadeInUp" data-wow-delay="200ms">
                                        <a href="#">
                                            <img src="./img/seminar-card.jpg" class="card-img-top img-fluid" alt="Seminar in Tanzania – Simple Strategies that work better in Forex">
                                        </a>
                                        <div class="card-body">
                                            <label class="text-primary fw-semibold text-uppercase mb-1">Technincal</label>
                                            <a href="#">
                                                <h5 class="card-title text-white">Seminar in Tanzania – Simple Strategies that work better in Forex</h5>
                                            </a>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <p class="mb-0"><?= date('M d, Y') ?></p>
                                                <div>
                                                    <a href="#" class="btn btn-blog">
                                                        <i class="fa fa-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="fundamental-tab-pane" role="tabpanel" aria-labelledby="fundamental-tab" tabindex="0">
                        <div class="row gy-4 blog-card-section">
                            <?php
                            for ($i = 0; $i < 3; $i++) {
                            ?>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="card border-0 wow fadeInUp" data-wow-delay="200ms">
                                        <a href="#">
                                            <img src="./img/seminar-card.jpg" class="card-img-top img-fluid" alt="Seminar in Tanzania – Simple Strategies that work better in Forex">
                                        </a>
                                        <div class="card-body">
                                            <label class="text-primary fw-semibold text-uppercase mb-1">fundamental</label>
                                            <a href="#">
                                                <h5 class="card-title text-white">Seminar in Tanzania – Simple Strategies that work better in Forex</h5>
                                            </a>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <p class="mb-0"><?= date('M d, Y') ?></p>
                                                <div>
                                                    <a href="#" class="btn btn-blog">
                                                        <i class="fa fa-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="economic-tab-pane" role="tabpanel" aria-labelledby="economic-tab" tabindex="0">
                        <div class="row gy-4 blog-card-section">
                            <?php
                            for ($i = 0; $i < 3; $i++) {
                            ?>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="card border-0 wow fadeInUp" data-wow-delay="200ms">
                                        <a href="#">
                                            <img src="./img/seminar-card.jpg" class="card-img-top img-fluid" alt="Seminar in Tanzania – Simple Strategies that work better in Forex">
                                        </a>
                                        <div class="card-body">
                                            <label class="text-primary fw-semibold text-uppercase mb-1">economic</label>
                                            <a href="#">
                                                <h5 class="card-title text-white">Seminar in Tanzania – Simple Strategies that work better in Forex</h5>
                                            </a>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <p class="mb-0"><?= date('M d, Y') ?></p>
                                                <div>
                                                    <a href="#" class="btn btn-blog">
                                                        <i class="fa fa-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="video-tab-pane" role="tabpanel" aria-labelledby="video-tab" tabindex="0">
                        <div class="row gy-4 blog-card-section">
                            <?php
                            for ($i = 0; $i < 3; $i++) {
                            ?>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="card border-0 wow fadeInUp" data-wow-delay="200ms">
                                        <a href="#">
                                            <img src="./img/seminar-card.jpg" class="card-img-top img-fluid" alt="Seminar in Tanzania – Simple Strategies that work better in Forex">
                                        </a>
                                        <div class="card-body">
                                            <label class="text-primary fw-semibold text-uppercase mb-1">video</label>
                                            <a href="#">
                                                <h5 class="card-title text-white">Seminar in Tanzania – Simple Strategies that work better in Forex</h5>
                                            </a>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <p class="mb-0"><?= date('M d, Y') ?></p>
                                                <div>
                                                    <a href="#" class="btn btn-blog">
                                                        <i class="fa fa-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="system">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 text-center">
                <h5 class="text-primary fw-bold">Supported Payment Systems</h5>
                <h2 class="title">For convenient <span class="text-gradient">deposits </span>
                    <div class="d-lg-block text-gradient">and withdrawals</div>
                </h2>
            </div>
            <div class="col-12">
                <div class="group-btn text-center mt-4">
                    <a href="https://area.yamarkets.com/register" class="btn btn-primary wow fadeInUp" data-wow-delay="100ms">Open live account</a>
                    <a href="https://area.yamarkets.com/register" class="btn btn-secondary ms-md-2 wow fadeInUp" data-wow-delay="300ms">Open demo account</a>
                </div>
            </div>
        </div>
    </div>
</section>