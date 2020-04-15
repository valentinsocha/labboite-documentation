<main>
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
                        <a href="#" class="tool-mobile-link active">
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

    <div class="container">
        <div class="row">
            <!-- DESKTOP MENU -->
            <div class="d-none d-lg-block col-lg-4 col-xl-4">
                <div class="tool-menu">
                    <div class="tool-menu-head p-5">
                        <div>
                            <span class="tool-menu-type"><?php echo $tool_head['type']; ?></span>
                        </div>
                        <div>
                            <span class="tool-menu-brand"><?php echo $tool_head['brand']; ?></span>
                        </div>
                    </div>
                    <div class="tool-menu-body p-5">
                        <ul>
                            <li class="tool-menu-link py-3">
                                <a href="<?php echo base_url('tool/info/'); echo $tool_head['slug']; ?>" class="tool-link">
                                    <div class="tool-link-item">
                                        <div><span class="icons-info mr-4"></span></div>
                                        <div><span class="tool-link-text">Informations</span></div>
                                    </div>
                                </a>
                            </li>
                            <li class="tool-menu-link py-3">
                                <a href="<?php echo base_url('tool/notice/'); echo $tool_head['slug']; ?>" class="tool-link">
                                    <div class="tool-link-item">
                                        <div><span class="icons-notice mr-4"></span></div>
                                        <div><span class="tool-link-text">Notice</span></div>
                                    </div>
                                </a>
                            </li>
                            <li class="tool-menu-link py-3">
                                <a href="#" class="tool-link active">
                                    <div class="tool-link-item">
                                        <div><span class="icons-consumable mr-4"></span></div>
                                        <div><span class="tool-link-text">Consommables</span></div>
                                    </div>
                                </a>
                            </li>
                            <li class="tool-menu-link py-3">
                                <a href="<?php echo base_url('tool/help/'); echo $tool_head['slug']; ?>" class="tool-link">
                                    <div class="tool-link-item">
                                        <div><span class="icons-faq mr-4"></span></div>
                                        <div><span class="tool-link-text">FAQ</span></div>
                                    </div>
                                </a>
                            </li>
                            <li class="tool-menu-link py-3">
                                <a href="<?php echo base_url('tool/tips/'); echo $tool_head['slug']; ?>" class="tool-link">
                                    <div class="tool-link-item">
                                        <div><span class="icons-tips mr-4"></span></div>
                                        <div><span class="tool-link-text">Astuces</span></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- CONTENT -->
            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">

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

                    <!-- CONSUMABLE ITEM -->
                    <div class="tool-consumable">
                        <div class="p-6">
                            <div class="consumable-content">
                                <div class="mr-6">
                                    <img src="<?php echo base_url('assets/img/toolconsumables/i3D-material-pla.jpg'); ?>" class="consumable-picture" />
                                </div>
                                <div>
                                    <h2 class="mb-4">PLA</h2>
                                    <div class="consumable-description">
                                        <p>Le PLA est un plastique biodégradable. Il est facile à imprimer mais c'est un matériau sensible à l'humidité et cassant. Le filament à imprimer se présente sous la forme de bobines. Il est impératif de choisir un film d'un diamètre de 1.75 mm pour l'utiliser avec la Dagoma.</p>
                                    </div>
                                    <div class="consumable-burden">
                                        <div class="mr-4">
                                            <span class="icon-burden"></span>
                                        </div>
                                        <div>
                                            <p>Chaque utilisateur doit ramener ses propres bobines de filament pour ses projets. Quelques bobines sont disponibles au fablab à des fins de dépannage uniquement.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>