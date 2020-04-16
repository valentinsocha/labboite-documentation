<main>
    <!-- HEADING -->
    <div class="d-none d-lg-block">
        <div class="tool-heading">
            <div class="tool-heading-text">
                <div>
                    <span class="tool-heading-type"><?php echo $tool_head['type']; ?></span>
                </div>
                <div>
                    <span class="tool-heading-brand"><?php echo $tool_head['brand']; ?></span>
                </div>
            </div>
            <div class="tool-heading-nav">
                <div class="tool-heading-link">
                    <a href="<?php echo base_url('tool/info/'); echo $tool_head['slug']; ?>">
                        <span class="icon-tool-info"></span>
                    </a>
                </div>
                <div class="tool-heading-link">
                    <a href="<?php echo base_url('tool/notice/'); echo $tool_head['slug']; ?>">
                        <span class="icon-tool-notice"></span>
                    </a>
                </div>
                <div class="tool-heading-link">   
                    <a href="<?php echo base_url('tool/consumables/'); echo $tool_head['slug']; ?>">
                        <span class="icon-tool-consumables"></span>
                    </a>
                </div>
                <div class="tool-heading-link">
                    <a href="<?php echo base_url('tool/help/'); echo $tool_head['slug']; ?>">
                        <span class="icon-tool-help"></span>
                    </a>
                </div>
                <div class="tool-heading-link">
                    <span class="icon-tool-tips active"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- MOBILE MENU -->
    <div class="d-sm-block d-md-block d-lg-none d-xl-none">
        <div class="tool-menu-mobile">
            <div class="menu-mobile-content">
                    <div class="menu-mobile-item">
                        <a href="<?php echo base_url('tool/info/'); echo $tool_head['slug']; ?>" class="tool-mobile-link">
                            <div class="menu-mobile-icon mb-2"><span class="icons-info"></span></div>  
                            <div class="menu-mobile-text">Infos</div>    
                        </a>
                    </div>
                    <div class="menu-mobile-item">
                        <a href="<?php echo base_url('tool/notice/'); echo $tool_head['slug']; ?>" class="tool-mobile-link">
                            <div class="menu-mobile-icon mb-2"><span class="icons-notice"></span></div>  
                            <div class="menu-mobile-text">Notice</div>    
                        </a>
                    </div>
                    <div class="menu-mobile-item">
                        <a href="<?php echo base_url('tool/consumables/'); echo $tool_head['slug']; ?>" class="tool-mobile-link">
                            <div class="menu-mobile-icon mb-2"><span class="icons-consumable"></span></div>  
                            <div class="menu-mobile-text">Consommables</div>    
                        </a>
                    </div>
                    <div class="menu-mobile-item">
                        <a href="<?php echo base_url('tool/help/'); echo $tool_head['slug']; ?>" class="tool-mobile-link">
                            <div class="menu-mobile-icon mb-2"><span class="icons-faq"></span></div>  
                            <div class="menu-mobile-text">FAQ</div>   
                        </a>
                    </div>
                    <div class="menu-mobile-item">
                        <a href="#" class="tool-mobile-link active">
                            <div class="menu-mobile-icon mb-2"><span class="icons-tips"></span></div>  
                            <div class="menu-mobile-text">Astuces</div>   
                        </a>
                    </div>
            </div>
        </div>
    </div>

    <div class="container mt-8">
        <div class="row justify-content-center">

            <!-- CONTENT -->
            <div class="col-sm-12 col-md-12 col-lg-9 col-xl-9">

                <!-- MOBILE TITLE -->
                <div class="d-sm-block d-md-block d-lg-none d-xl-none mb-6">
                    <div class="tool-menu-head p-5">
                        <div>
                            <span class="tool-menu-type"><?php echo $tool_head['type']; ?></span>
                        </div>
                        <div>
                            <span class="tool-menu-brand"><?php echo $tool_head['brand']; ?></span>
                        </div>
                    </div>
                </div>

                <!-- DISCLAMER -->
                <div class="beta-disclamer" role="alert">
                La fiche outil de la Dagoma DiscoEasy 200 est proposée pour le moment à titre de démonstration pour l'ensemble des machines
                </div>

                <div class="tool-content">

                    <!-- TIP ITEM -->
                    <div class="tool-tip mb-6">
                        <div class="p-6">
                            <h2 class="mb-4">Comment entretenir son imprimante 3D</h2>
                            <div class="tip-media mb-4">
                                <div class="video-responsive">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Kpgm-9Viwd8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="tip-description">
                                <p>Le GueroLoco propose une vidéo donnant quelques astuces et bons conseils pour entretenir son imprimante 3D.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</main>