# Schéma de la base de données

## hard_folders

Liste les catégories des outils du fablab

id | title | slug | thumb | goto | order | active
---- | ---- | ---- | ---- | ---- | ---- | ----
*Id* | *intitulé de la catégorie* | *identifiant normalisé pour l'URL* | *nom du fichier pour la vignette, avec l'extension* | *indique vers quoi renvoie le lien : la fiche machine* [prend la valeur du slug] *ou une page avec les outils contenus dans la catégorie* [prend la valeur "folder"] | *position dans la liste* | *active ou désactive le lien* 
1 | Découpe laser | decoupe-laser | decoupelaser.jpg | decoupe-laser | 1 | true
2 | Imprimantes 3D | imprimantes-3D | imprimante3D.jpg | folder | 2 | false 


## hard_items

Liste l'ensemble des outils du fablab

id | type | brand | slug | thumb | relative_folder | order | active
---- | ---- | ---- | ---- | ---- | ---- | ---- | ----
*Id* | *type de l'outil* | *marque de l'outil* | *identifiant normalisé pour l'URL* | *nom du fichier pour la vignette, avec l'extension* | *slug de la catégorie à laquelle l'outil est rattaché* | *position dans la liste* | *active ou désactive le lien* 
1 | Imprimante 3D | Dagoma DiscoEasy | imprimante-3d-dagoma | i3d-dagoma.jpg | imprimantes-3d | 1 | true
2 | Imprimante 3D | Scalar XL | imprimante-3d-scalar | i3d-scalar.jpg | imprimantes-3d | 2 | false


## soft_folders

Liste les catégories des logiciels du fablab

id | title | slug | thumb | order | active
---- | ---- | ---- | ---- | ---- | ---- 
*Id* | *intitulé de la catégorie* | *identifiant normalisé pour l'URL* | *nom du fichier pour la vignette, avec l'extension* | *position dans la liste* | *active ou désactive le lien*
1 | Dessin vectoriel | dessin-vectoriel | dessinvectoriel.jpg | 1 | true
2 | Retouche photo | retouche-photo | retouchephoto.jpg | 2 | false


## soft_items

Liste l'ensemble des logiciels du fablab

id | brand | slug | thumb | relative_folder | order | active
---- | ---- | ---- | ---- | ---- | ---- | ---- 
*Id* | *marque du logiciel* | *identifiant normalisé pour l'URL* | *nom du fichier pour la vignette, avec l'extension* | *slug de la catégorie à laquelle le logiciel est rattaché* | *position dans la liste* | *active ou désactive le lien* 
1 | Affinity Designer | affinity-designer | affinitydesigner.jpg | dessin-vectoriel | 1 | true
2 | Illustrator CS2 | illustrator-cs2 | illustratorcs2.jpg | dessin-vectoriel | 2 | false
