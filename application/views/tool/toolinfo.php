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
                    <span class="icon-tool-info active"></span>
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
                    <a href="<?php echo base_url('tool/tips/'); echo $tool_head['slug']; ?>">
                        <span class="icon-tool-tips"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- MOBILE MENU -->
    <div class="d-sm-block d-md-block d-lg-none d-xl-none">
        <div class="tool-menu-mobile">
            <div class="menu-mobile-content">
                    <div class="menu-mobile-item">
                        <a href="#" class="tool-mobile-link active">
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
                        <a href="<?php echo base_url('tool/tips/'); echo $tool_head['slug']; ?>" class="tool-mobile-link">
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

                    <!-- PICTURE -->
                    <div class="tool-picture">
                        <img src="<?php echo base_url('assets/img/toolinfo/i3d-hero.jpg'); ?>" alt="">
                    </div>

                    <!-- INTRO AND SPECS -->
                    <div class="tool-info">
                        <div class="p-6">
                            <div class="info-description mb-6">
                                <p>Nous possédons au fablab deux exemplaires de la Dagoma DiscoEasy 200. Cette imprimante 3D de petit format est idéale pour réaliser des volumes réduits.</p>
                            </div>
                            <div class="info-specs mb-6">
                                <h2 class="mb-4">Caractéristiques</h2>
                                <ul class="specs-list">
                                    <li>Plateau chauffant</li>
                                    <li>1 extrudeur</li>
                                    <li>Buse : 0.4 mm</li>
                                    <li>Diamètre du filament : 1.75 mm</li>
                                    <li>Précision : 100 microns</li>
                                    <li>Volume : 200 × 200 × 200 mm</li>
                                    <li>Vitesse : 30 à 150 mm/s</li>
                                    <li>Température d’extrusion : 280°C max</li>
                                    <li>Matériaux supportés : PLA, PET</li>
                                </ul>
                            </div>
                            <div class="info-ressources">
                                <h2 class="mb-4">Ressources</h2>
                                <ul class="ressources-list">
                                    <li>
                                        <div class="ressources-content">
                                            <div class="ressources-icon">
                                                <span class="icon-ressource"></span>
                                            </div>
                                            <div class="ressources-link">
                                                <a href="https://start.dagoma3d.com/printer/de200/notice-utilisation">Notice du constructeur</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</main>