<div class="progressContainer">
    <div class="progressBar"></div>
</div>

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
                    <span class="icon-tool-notice active"></span>
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
                        <a href="<?php echo base_url('tool/info/'); echo $tool_head['slug']; ?>" class="tool-mobile-link">
                            <div class="menu-mobile-icon mb-2"><span class="icons-info"></span></div>  
                            <div class="menu-mobile-text">Infos</div>    
                        </a>
                    </div>
                    <div class="menu-mobile-item">
                        <a href="#" class="tool-mobile-link active">
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
        <div class="row">
            <!-- DESKTOP MENU -->
            <div class="d-none d-lg-block col-lg-4 col-xl-4">
                <div class="tool-notice-menu" id="toStick">
                    <div class="notice-menu-part">
                        <div class="notice-menu-item notice-menu-h1">
                            <a href="#step1">Obtenir un modèle 3D</a>
                        </div>
                    </div>
                    <div class="notice-menu-part">
                        <div class="notice-menu-item notice-menu-h1">
                            <a href="#step2">Préparer son impression</a>
                        </div>
                        <div class="notice-menu-item notice-menu-h2">
                            <a href="#step2-1">Éditer votre objet</a>
                        </div>
                        <div class="notice-menu-item notice-menu-h2">
                            <a href="#step2-2">Régler les paramètres d’impression</a>
                        </div>
                        <div class="notice-menu-item notice-menu-h2">
                            <a href="#step2-3">Finaliser le fichier d’impression</a>
                        </div>
                    </div>
                    <div class="notice-menu-part">
                        <div class="notice-menu-item notice-menu-h1">
                            <a href="#step3">Imprimer son objet</a>
                        </div>
                        <div class="notice-menu-item notice-menu-h2">
                            <a href="#step3-1">Installer son filament</a>
                        </div>
                        <div class="notice-menu-item notice-menu-h2">
                            <a href="#step3-2">Lancer son impression</a>
                        </div>
                        <div class="notice-menu-item notice-menu-h2">
                            <a href="#step3-3">Récupération de l’impression</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CONTENT -->
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">

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
                    <div class="tool-notice">
                        <div class="p-6">

                            <div class="step-level-1">
                                <h2 id="step1" class="mb-4">Obtenir un modèle 3D</h2>
                                <p>L’objet que vous souhaitez imprimer doit préalablement se présenter sous la forme d’un fichier contenant votre objet modélisé en 3D.</p>
                                <p>Si votre objet est très spécifique, il vous faudra préalablement le dessiner en trois dimensions dans un logiciel de modélisation 3D. Gardez en tête que prendre en main le logiciel peut prendre un certain temps.</p>
                                <p>Si votre objet est générique, vous pouvez peut-être en trouver un modèle déjà existant en ligne. À ce titre, il existe des plateformes qui permettent de partager et de télécharger des objets modélisés en 3D. Ces fichiers sont libres et proposés gratuitement par des contributeurs du monde entier. Parmi ces plateformes, citons <a href="https://www.thingiverse.com/">Thingiverse</a> ou <a href="https://cults3d.com/fr">Cults</a>.</p>
                                <p>Quoiqu’il en soit, il est impératif d’obtenir un fichier au format STL pour commencer à préparer votre impression 3D.</p>
                            </div>

                            <div class="step-level-1">
                                <h2 id="step2" class="mb-4">Préparer son impression</h2>
                                <p>Il nous faut maintenant configurer notre impression dans un logiciel de tranchage ou slicer en anglais.</p>
                                <p>Nous utilisons le logiciel libre Cura. Il est disponible sur les ordinateurs du fablab mais vous pouvez également le télécharger et l’installer sur votre ordinateur personnel pour préparer vos impressions chez vous. Ce logiciel est compatible avec Windows, Mac OS et Linux.</p>
                                <p>Lancez le logiciel Cura, reconnaissable à son icône bleue.</p>
                                <img class="img-fluid mb-6" src="<?php echo base_url('assets/img/toolnotice/i3d-cura-icon.png'); ?>">
                                <p>Une fois le logiciel ouvert, choisissez <span class="notice-ui-input">Dagoma DiscoEasy200</span> dans la liste des imprimantes.</p>
                                <img class="img-fluid mb-6" src="<?php echo base_url('assets/img/toolnotice/i3d-cura-select-printer.png'); ?>">
                                <p>Importez votre fichier STL dans le logiciel en cliquant sur le bouton.</p>
                                <img class="img-fluid mb-6" src="<?php echo base_url('assets/img/toolnotice/i3d-cura-action-open.png'); ?>">
                                
                                <div class="step-level-2 mt-8">
                                    <h3 id="step2-1" class="mb-4">Éditer votre objet</h3>
                                    <p>Votre objet s'affiche au centre, dans une représentation de l'espace d’impression.</p>
                                    <p>Vous pouvez ajuster la vue pour plus de confort. Vous pouvez faire tourner la vue en glissant votre pointeur tout en appuyant sur le clic droit ; pour zoomer, utilisez la roulette de la souris.</p>
                                    <p>Vous pouvez également afficher des vues prédéfinies (de face, du haut, de la gauche, de la droite…) via les icônes en bas de la fenêtre.</p>
                                    <img class="img-fluid mb-6" src="<?php echo base_url('assets/img/toolnotice/i3d-cura-select-view.png'); ?>">
                                    <p>Vous pouvez également jouer sur la position et la taille de votre pièce à l’aide de différents contrôles, accessibles sur la gauche de la fenêtre.</p>
                                    <img class="img-fluid mb-6" src="<?php echo base_url('assets/img/toolnotice/i3d-cura-action-edit.png'); ?>">

                                        <h4 class="mb-2">Déplacement (1)</h4>
                                        <p>Déplacer vos pièces si vous souhaitez l’imprimer dans un endroit particulier du plateau ou si vous avez plusieurs pièces à placer</p>                                    
                                        <h4 class="mb-2">Mise à l’échelle (2)</h4>
                                        <p>Vérifier la taille de vos objets et la modifier en conséquence</p>
                                        <h4 class="mb-2">Rotation (3)</h4>
                                        <p>Tourner votre objet, ce qui peut être utile pour faciliter l’impression. Ainsi, si votre objet est très haut mais peu large, vous aurez peut-être intérêt à le coucher pour optimiser les temps d’impression. Notez que l'objet est toujours « posé » sur le plateau.</p>
                                        <h4 class="mb-2">Symétrie (4)</h4>
                                        <p>Vous pouvez ici inverser verticalement ou horizontalement votre objet.</p>
                                </div>

                                <div class="step-level-2 mt-8">
                                    <h3 id="step2-2" class="mb-4">Régler les paramètres d’impression</h3>
                                    <p>Sélectionnez le bon matériau, à savoir du PLA. Pour cela, allez dans le menu <span class="notice-ui-input">Matériau > Générique > PLA</span></p>
                                    <img class="img-fluid mb-6" src="<?php echo base_url('assets/img/toolnotice/i3d-cura-select-material.png'); ?>">
                                    <p>Vous pouvez ensuite régler les paramètres d’impression dans le menu dédié. Un certain nombre de préréglages vous sont proposés. Choisissez en un selon ce que vous souhaitez faire : une impression rapide, précise… Le logiciel configure les différents paramètres en conséquence.</p>
                                    <img class="img-fluid mb-6" src="<?php echo base_url('assets/img/toolnotice/i3d-cura-view-parameters.png'); ?>">
                                    <p>Vous pouvez néanmoins affiner les différents paramètres pré-programmés. Nous allons passer en revue les principaux réglages à prendre en compte. Mais attention, ne modifiez pas les paramètres au hasard au risque de faire échouer votre impression.</p>

                                        <h4 class="mb-2">Qualité</h4>
                                        <p>Vous pouvez régler ici la hauteur de la couche. Sur la Dagoma, 0,15 mm est une valeur standard. Si vous voulez une impression plus précise, réduisez la valeur à 0,1 mm ; si vous souhaitez une impression plus rapide (mais moins précise), augmenter cette valeur à 0,2 mm. Attention, si vous mettez une trop grande hauteur, les couches ne seront pas écrasées et il y aura risque de désolidarisation.</p>
                                        <h4 class="mb-2">Coque</h4>
                                        <p>Vous pouvez faire varier l’épaisseur de la paroi de votre objet en modifiant le réglage <span class="notice-ui-input">Épaisseur de la paroi</span>. Cette valeur correspond forcément à un multiple du diamètre de la buse.</p>
                                        <h4 class="mb-2">Remplissage</h4>
                                        <p>Définissez ici une densité de remplissage à l'intérieur de votre objet. En pratique, 20% est une valeur de remplissage standard. Il est inutile d’aller au delà de 50%, au risque de perdre beaucoup de matière et de temps. Vous pouvez choisir le motif du remplissage : en grille, en ligne, en triangle…</p>
                                        <h4 class="mb-2">Matériau</h4>
                                        <p>Le réglage <span class="notice-ui-input">Température d’impression</span> permet de régler la température à laquelle chauffera la buse. Vérifiez que ce paramètre est réglé sur 205°, la température moyenne d’usinage du PLA.</p>
                                        <h4 class="mb-2">Supports</h4>
                                        <p>Si votre objet contient des parties qui ne sont pas en contact avec le plateau, ces parties risquent de s’affaisser sans la présence de supports. Vous pouvez donc demander à générer de petits piliers pour supporter les parties aériennes. </p>
                                        <p>En choisissant le réglage <span class="notice-ui-input">En contact avec le plateau</span> le logiciel ne va générer des piliers qu’entre l’objet et le plateau</p>
                                        <p>En choisissant <span class="notice-ui-input">Partout</span> le logiciel va générer des supports pour solidariser l’objet avec le plateau, mais également les éléments de l’objet entre eux.</p>
                                        <h4 class="mb-2">Adhérence</h4>
                                        <p>En refroidissant, les pièces risquent de se décoller du plateau. Vous pouvez générer un support tout autour de votre objet pour en renforcer l'adhérence.</p>
                                        <p>En sélectionnant <span class="notice-ui-input">Bordure</span>, la buse va imprimer une simple couche tout autour de votre objet)</p>
                                        <p>En sélectionnant <span class="notice-ui-input">Radeau</span>, la buse va imprimer plusieurs couches avec un maillage, formant un support plus épais</p>
                                        <p>En sélectionnant <span class="notice-ui-input">Jupe</span>, l’imprimante va dessiner simple contour tout autour qui va former un « mur » autour de votre impression, pour la protéger des courants d'air</p>
                                </div>

                                <div class="step-level-2 mt-8">
                                    <h3 id="step2-3" class="mb-4">Finaliser le fichier d’impression</h3>
                                    <p>Lorsque vous avez paramétré votre impression, cliquez sur <span class="notice-ui-button">Découper</span></p>
                                    <img class="img-fluid mb-6" src="<?php echo base_url('assets/img/toolnotice/i3d-cura-action-slice.png'); ?>">
                                    <p>Le logiciel va estimer le temps d’impression ainsi que la matière nécessaire. Vous pouvez jouer à nouveau sur la taille de votre objet ou ses paramètres d’impression pour réduire un peu le temps, si vous le jugez trop long.</p>
                                    <p>Vous pouvez aussi visualiser votre objet découpé en couche, tel qu'il sera imprimé. Pour ce faire, cliquez sur l’onglet <span class="notice-ui-button">Aperçu</span></p>
                                    <p>Si vous êtes satisfait, cliquez sur <span class="notice-ui-button">Enregistrer sous fichier</span>. Le logiciel va générer un fichier Gcode contenant votre objet modélisé ainsi que les paramètres d’impression. Vous devez sauvegarder ce fichier sur une carte SD.</p>
                                    <img class="img-fluid mb-6" src="<?php echo base_url('assets/img/toolnotice/i3d-cura-view-preview.png'); ?>">
                                </div>

                            </div>

                            <div class="step-level-1">
                                <h2 id="step3" class="mb-4">Imprimer son objet</h2>
                                <p>Allumez la machine sur le bouton situé en façade.</p>
                                <p>L’écran s’allume. La navigation dans les menus de réglages de l’imprimante se fait à l’aide du bouton métallique. Tourner le bouton pour naviguer entre les menus ; appuyer sur le bouton pour sélectionner un menu.</p>

                                <div class="step-level-2 mt-8">
                                    <h3 id="step3-1" class="mb-4">Installer son filament</h3>
                                    <p>Il vous faut maintenant placer votre filament. Sur l’écran, allez dans le menu <span class="notice-ui-input">Préparer > Préchauffage PLA</span>. La buse se met alors à chauffer pour atteindre une température de 180°.</p>
                                    <div class="notice-bloc-security mb-4">Il est formellement interdit de toucher la buse lorsque l’imprimante est allumée, au risque de se brûler.</div>
                                    <p>Si un fil est déjà chargé, appuyez sur la gâchette située derrière l’imprimante, poussez légèrement le fil puis tirez-le pour le retirer. </p>
                                    <p>Couper l’extrémité de votre fil en biseau pour rendre l’insertion plus aisée. Posez votre bobine sur un support qui lui permettra de se dérouler correctement. </p>
                                    <div class="notice-bloc-security mb-4">Assurez-vous que le filament n’est pas emmêlé sur la bobine et que celle-ci tourne correctement. Si ce n’est pas le cas, le filament risque de ce coincer et de mettre en difficulté la tête d’impression.</div>
                                    <p>Appuyez sur la gâchette et insérez votre fil. Faites le progresser dans le tuyau jusqu’à ce qu’il atteigne la buse et que vous sentiez une résistance. </p>
                                    <p>Il s’agit alors de purger la buse : en poussant votre fil, vous évacuez le plastique restant dans la tête d’impression. Lorsque la couleur du plastique qui s’échappe de la buse correspond à celle de votre fil, vous pouvez considérer que la buse est purgée et qu’elle est prête pour votre impression.</p>
                                </div>

                                <div class="step-level-2 mt-8">
                                    <h3 id="step3-2" class="mb-4">Lancer son impression</h3>
                                    <p>Sur l’écran, sélectionnez <span class="notice-ui-input">Imprimer depuis SD</span> puis votre fichier dont le nom devrait apparaître dans la liste. </p>
                                    <p>L’imprimante va progressivement monter en température et la tête va palper le plateau. Ceci fait, l’impression se lance. Vérifiez que les premières couches s’impriment bien. Vous pouvez ensuite laisser l’impression se dérouler.</p>
                                    <div class="notice-bloc-security mb-4">Lors de vos manipulations sur l’imprimante, il est recommandé d’éviter les objets pendants (cravates, pendentifs…) et de s’attacher les cheveux. Ceux ci pourraient être entraînés par la tête d’impression.</div>
                                    <p>Un filtre relié à la tête d’impression permet d'absorber les particules de plastique qui pourraient se répandre dans l’air. Vous pouvez l’allumer en appuyant sur le bouton.</p>
                                </div>

                                <div class="step-level-2 mt-8">
                                    <h3 id="step3-3" class="mb-4">Récupération de l’impression</h3>
                                    <p>L’impression se termine normalement. Décollez la pièce avec une spatule, en insérant l’outil entre le plateau et le bord de l’objet et en donnant un petit coup sec.</p>
                                    <p>Avant d’éteindre la machine, vous devez impérativement faire refroidir la buse. Pour cela, sur l’écran de contrôle, sélectionnez <span class="notice-ui-input">Préparer > Refroidir</span></p>
                                    <div class="notice-bloc-security mb-4">N'éteignez sous aucun prétexte la machine tant que le ventilateur est en marche ou que la température de la buse est supérieur à 50°C, au risque d'endommager l'imprimante.</div>
                                    <p>Vous pouvez éteindre la machine la machine via le bouton d’allumage. Pensez à ranger le matériel que vous avez utilisé avant de partir.</p>
                                </div>

                            </div>



                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</main>