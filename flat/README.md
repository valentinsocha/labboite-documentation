# LabBoîte documentation - front end - version plate

MÀJ le 29 avril 2020 • 21h00

## Avancement 

- Vue Index / liste des catégories : OK
- Vue Index / liste des outils : OK
- Vue Outil / Info : en cours
- Vue Outil / Notice : en cours
- Vue Outil / FAQ : en cours
- Vue Outil / Consommables : en cours
- Vue Outil / Astuce : en cours

## Organisation

- Chaque vue est dans un fichier HTML à la racine
- `assets/scss` : les feuilles de styles en SASS
- `assets/css` : les feuilles de styles compilées en CSS
- `assets/fonts` : les fichiers de webfonts
- `assets/graphics` : les éléments graphiques de l'interface (icônes, ect)
- `assets/img` : les éléments images du contenu
- `assets/js` : les scripts

## Précisions

### Header

- Les liens `.tab-group` mènent chacun vers un ensemble. Lorsque le contenu de l'ensemble est affiché sur la page, le lien passe en mode « actif » et la classe `.active` s'ajoute au lien.

### Index

- Les vignettes affichées dans l'index sont automatiquement recadrées en CSS à l'aide de la propriété `object-fill`.
- Les textes de chaque item de la grille tiennent chacun sur une seule ligne ; s'ils sont trop longs, ils sont automatiquement tronqués à l'aide des propriétés CSS `text-overflow: ellipsis; white-space: nowrap;`.