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
                        <span class="icon-tool-help active"></span>
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
                        <a href="#" class="tool-mobile-link active">
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

                    <div class="accordion" id="accordionExample">

                        <!-- QUESTION ITEM -->
                        <div class="tool-question mb-6">
                            <div class="question-header p-6" id="headingOne">
                                <a type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="question-text">
                                        <div>Le fil ne sort pas pendant l’impression.</div>
                                        <div class="p-4">
                                            <span class="icon-more"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="question-body p-6">
                                    <p>Cela signifie que la buse est bouchée.</p>
                                    <p><span class="icon-arrow-list mr-2"></span> Essayer de déboucher la buse avec les aiguilles souples (à chaud). Si ça ne suffit pas c’est que le problème vient de plus haut.</p>
                                    <p><span class="icon-arrow-list mr-2"></span> Démonter la tête pour pouvoir retirer le fil (à chaud). S’il est fondu à l’intérieur du tube métal : utiliser une perceuse et un petit foret pour déboucher (attention de ne pas abîmer l’intérieur du tube)</p>
                                </div>
                            </div>
                        </div>

                        <!-- QUESTION ITEM -->
                        <div class="tool-question mb-6">
                            <div class="question-header p-6" id="headingTwo">
                                <a type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    <div class="question-text">
                                        <div>Le moteur d’un des axes continue de tourner alors que la tête est en butée. Le moteur force et fait du bruit.</div>
                                        <div class="p-4">
                                            <span class="icon-more"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="question-body p-6">
                                    <p><span class="icon-arrow-list mr-2"></span> Éteindre le plus vite possible l’imprimante et la rallumer tout de suite après pour ne pas laisser la buse refroidir sans ventilateur.</p>
                                    <p><span class="icon-arrow-list mr-2"></span> Vérifiez que rien ne gêne le déplacement du plateau sur l'axe Y.</p>
                                    <p><span class="icon-arrow-list mr-2"></span> Vérifiez que le palpeur est fonctionnel sur l'axe Z. Il arrive souvent qu’il se débranche lors d’un déplacement.</p>
                                </div>
                            </div>
                        </div>

                        <!-- QUESTION ITEM -->
                        <div class="tool-question mb-6">
                            <div class="question-header p-6" id="headingThree">
                                <a type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <div class="question-text">
                                        <div>La première couche ne se dépose pas comme il faut car la tête est trop haute.</div>
                                        <div class="p-4">
                                            <span class="icon-more"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="question-body p-6">
                                    <p><span class="icon-arrow-list mr-2"></span> Réglez le Zoffset dans Contrôle, “réglage Zoffset”. N’oubliez pas de faire “sauver config” pour valider.</p>
                                </div>
                            </div>
                        </div>

                        <!-- QUESTION ITEM -->
                        <div class="tool-question mb-6">
                            <div class="question-header p-6" id="headingFour">
                                <a type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    <div class="question-text">
                                        <div>Lors de la première couche aucun fil ne sort car la tête est trop basse. Le moteur de l’extrudeur claque.</div>
                                        <div class="p-4">
                                            <span class="icon-more"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="question-body p-6">
                                    <p><span class="icon-arrow-list mr-2"></span> Réglez le Zoffset dans Contrôle, “réglage Zoffset”. N’oubliez pas de faire “sauver config” pour valider.</p>
                                </div>
                            </div>
                        </div>

                        <!-- QUESTION ITEM -->
                        <div class="tool-question mb-6">
                            <div class="question-header p-6" id="headingFive">
                                <a type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                    <div class="question-text">
                                        <div>La hauteur de la première couche est bonne mais elle n’adhère pas.</div>
                                        <div class="p-4">
                                            <span class="icon-more"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                <div class="question-body p-6">
                                    <p><span class="icon-arrow-list mr-2"></span> Ajoutez du Dimafix</p>
                                    <p><span class="icon-arrow-list mr-2"></span> Vérifiez la température du fil et du plateau</p>
                                    <p><span class="icon-arrow-list mr-2"></span> Vérifiez vos paramètres de vitesse d’impression</p>
                                </div>
                            </div>
                        </div>

                        <!-- QUESTION ITEM -->
                        <div class="tool-question mb-6">
                            <div class="question-header p-6" id="headingSix">
                                <a type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                    <div class="question-text">
                                        <div>Les différentes couches n’adhèrent pas entre elles.</div>
                                        <div class="p-4">
                                            <span class="icon-more"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                <div class="question-body p-6">
                                    <p><span class="icon-arrow-list mr-2"></span> Votre fil n’est pas assez chaud et/ou vous avez mis une trop grande vitesse d’impression</p>
                                </div>
                            </div>
                        </div>

                        <!-- QUESTION ITEM -->
                        <div class="tool-question mb-6">
                            <div class="question-header p-6" id="headingSeven">
                                <a type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                    <div class="question-text">
                                        <div>Des parties du fichier ne sont pas imprimées.</div>
                                        <div class="p-4">
                                            <span class="icon-more"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                                <div class="question-body p-6">
                                    <p><span class="icon-arrow-list mr-2"></span> Votre fil n’est pas assez chaud et/ou vous avez mis une trop grande vitesse d’impression</p>
                                </div>
                            </div>
                        </div>

                        <!-- QUESTION ITEM -->
                        <div class="tool-question mb-6">
                            <div class="question-header p-6" id="headingEight">
                                <a type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                    <div class="question-text">
                                        <div>Un décalage en X ou Y s'opère pendant l’impression.</div>
                                        <div class="p-4">
                                            <span class="icon-more"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                                <div class="question-body p-6">
                                    <p><span class="icon-arrow-list mr-2"></span> Vérifiez la tension des courroies. Si elles sont trop détendues elles sautent des pas et créent des décalages. Attention il ne faut pas non plus qu’elles soient trop tendues.</p>
                                    <p><span class="icon-arrow-list mr-2"></span> Si cela ne vient pas des courroies, le problème peut venir des potentiomètres liés aux moteurs mais il est peu probable qu’ils se dérèglent.</p>
                                </div>
                            </div>
                        </div>

                        <!-- QUESTION ITEM -->
                        <div class="tool-question mb-6">
                            <div class="question-header p-6" id="headingNine">
                                <a type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                    <div class="question-text">
                                        <div>La tête rentre dans le plateau.</div>
                                        <div class="p-4">
                                            <span class="icon-more"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                                <div class="question-body p-6">
                                    <p><span class="icon-arrow-list mr-2"></span> Le fil du capteur (fil gris gainé) est sûrement débranché.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</main>