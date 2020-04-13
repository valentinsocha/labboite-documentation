<main>
    <!-- TABS -->
    <div class="container">
        <div class="row justify-content-center mt-5">
            <ul class="nav-sections">
                <li class="nav-sections-item">
                    <a class="nav-sections-link active" href="#">Outils et machines</a>
                </li>
                <li class="nav-sections-item">
                    <a class="nav-sections-link" href="<?php echo base_url('software'); ?>">Logiciels</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- TITLE -->
    <div class="container mt-4">
        <div class="row justify-content-start px-4">
            <div class="mr-3">
                <a href="<?php echo base_url('hardware'); ?>">
                    <span class="icon-back"></span>
                </a>
            </div>
            <div>
                <h1 class="title-index-item"><?php echo $hard_title['title']; ?></h1>
            </div>
        </div>
    </div>
    <!-- CONTENT -->
    <div class="container mt-6">
        <div class="row">
            <?php foreach ($hard_items as $hard_item) : ?>
                <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-3 mb-5">
                    <?php if ($hard_item['active'] == 'true'): ?>
                        <div class="index-item">
                            <div class="index-img">
                                <a href="<?php echo base_url('/tool/info/'.$hard_item['slug']); ?>">
                                    <img src="<?php echo base_url('assets/img/thumbs/'.$hard_item['thumb']); ?>" alt="" />
                                </a>
                            </div>
                            <div class="index-body">
                                <a href="<?php echo base_url('/tool/info/'.$hard_item['slug']); ?>">
                                    <?php if ($hard_item['brand'] == ''): ?>
                                        <div>
                                            <span class="item-brand">
                                                <?php echo $hard_item['type']; ?>
                                            </span>
                                        </div>
                                    <?php else: ?>
                                        <div>
                                            <span class="item-brand">
                                                <?php echo $hard_item['brand']; ?>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="item-type">
                                                <?php echo $hard_item['type']; ?>
                                            </span>
                                        </div>
                                    <?php endif; ?>
                                </a>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="index-item">
                            <div class="index-img">
                                <img src="<?php echo base_url('assets/img/thumbs/'.$hard_item['thumb']); ?>" alt="" />
                            </div>
                            <div class="index-body">
                                <?php if ($hard_item['brand'] == ''): ?>
                                    <div>
                                        <span class="item-brand">
                                            <?php echo $hard_item['type']; ?>
                                        </span>
                                    </div>
                                <?php else: ?>
                                    <div>
                                        <span class="item-brand">
                                            <?php echo $hard_item['brand']; ?>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="item-type">
                                            <?php echo $hard_item['type']; ?>
                                        </span>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>