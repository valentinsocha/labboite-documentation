<main>
    <!-- TABS -->
    <div class="container">
        <div class="row justify-content-center mt-5">
            <ul class="nav-sections">
                <li class="nav-sections-item">
                    <a class="nav-sections-link" href="<?php echo base_url('hardware'); ?>">Outils et machines</a>
                </li>
                <li class="nav-sections-item">
                    <a class="nav-sections-link active" href="#">Logiciels</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- CONTENT -->
    <div class="container mt-5">
        <div class="row">
            <?php foreach ($soft_folders as $soft_folder) : ?>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-5">
                    <div class="index-item">
                        <div class="index-img">
                            <a href="<?php echo base_url('/software/'.$soft_folder['slug']); ?>">
                                <img src="<?php echo base_url('/assets/img/thumbs/'.$soft_folder['thumb']); ?>" alt="" />
                            </a>
                        </div>
                        <div class="index-body">
                            <a href="<?php echo base_url('/software/'.$soft_folder['slug']); ?>">
                                <span class="folder-name">
                                    <?php echo $soft_folder['title']; ?>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>