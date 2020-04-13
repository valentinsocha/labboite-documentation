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
    <!-- TITLE -->
    <div class="container mt-5">
        <div class="row justify-content-start px-4">
            <div class="mr-3">
                <a href="<?php echo base_url('software'); ?>">
                    <span class="icon-back"></span>
                </a>
            </div>
            <div>
                <h1 class="title-index-item"><?php echo $soft_title['title']; ?></h1>
            </div>
        </div>
    </div>
    <!-- CONTENT -->
    <div class="container mt-5">
        <div class="row">
            <?php foreach ($soft_items as $soft_item) : ?>
                <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-3 mb-5">
                    <div class="index-item">
                        <div class="index-img">
                            <a href="#">
                                <img src="<?php echo base_url('/assets/img/thumbs/'.$soft_item['thumb']); ?>" alt="" />
                            </a>
                        </div>
                        <div class="index-body">
                            <a href="#">
                                <div>
                                    <span class="item-brand">
                                        <?php echo $soft_item['brand']; ?>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>