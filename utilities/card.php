<div class="card col-10 mx-auto my-2">
    <!-- Product image-->
    <img class="card-img-top" src="<?= $path; ?>" alt="<?= $film['title']; ?>" />
    <!-- Product details-->
    <div class="card-body p-4">
        <div class="text-center">
            <!-- Product name-->
            <h3 class="fw-bolder"><?= $film['title']; ?></h3>
            <!-- Product reviews-->
            <div class="d-flex justify-content-center small text-warning mb-2">
                <?= $film['rating']; ?> / 10 &nbsp;
                <?php getStar($film['rating']); ?>
            </div>
            <h5>Par : <?= $film['director']; ?></h5>
            <!-- Product price-->
            <span class="text-muted">
                Année de réalisation : <?= $film['year_released']; ?>
            </span>
            
        </div>
        <div class="d-flex justify-content-between my-2">
            <h2>
                <span class="badge bg-primary">
                    <i class="bi bi-ticket-perforated"></i> <?= $film['box_office']; ?>
                </span>
            </h2>
            <h2>
                <span class="badge bg-primary">
                    <i class="bi bi-cash"></i> <?= $film['budget']; ?> $
                </span>
            </h2>
            <h2>
                <span class="badge bg-primary">
                    <i class="bi bi-flag"></i> <?= $film['languages']; ?>
                </span>
            </h2>
            <h2>
                <span class="badge bg-primary">
                    <i class="bi bi-alarm"></i> <?= $film['duration']; ?> min.
                </span>
            </h2>
        </div>
        <div class="d-flex justify-content-around my-3">
            <h4 class="text-muted">De : <?= $film['distributeur']; ?></h4>
            <h4 class="text-muted">Genre : <?= $film['genre']; ?></h4>
        </div>
        
    </div>
</div>