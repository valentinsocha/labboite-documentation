# LabBoîte documentation - front end - version plate

MÀJ le 11 mai 2020 • 20h00

## Avancement 

- Vue Index / liste des catégories : OK
- Vue Index / liste des outils : OK
- Vue Outil / Info : OK
- Vue Outil / Notice : OK
- Vue Outil / FAQ : OK
- Vue Outil / Consommables : OK
- Vue Outil / Astuce : OK

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

### Fiche outil

- Les liens contenus dans la liste `.tool-nav-container` mènent chacun vers une rubrique de la fiche outil. Lorsque le contenu de la rubrique est affiché sur la page, le lien passe en mode « actif » et la classe `.tool-nav-link` est remplacée par la classe `.tool-nav-active`.

### Fiche outil • Infos

- La grande image en en-tête est automatiquement recadrée en CSS à l'aide de la propriété `object-fill`.

### Fiche outil • Notice

- Les images doivent nécessairement avoir la classe `.box-image`
- Les iframes des vidéos sont nécessairement contenues dans une `div` avec la classe `.box-video`.

## Fiche outil • FAQ

- Une stylisation spécifique des listes est proposée dans cette rubrique, avec la classe `.tool-help-list`.

### Fiche outil • Astuces

- Les images doivent nécessairement avoir la classe `.box-image`
- Les iframes des vidéos sont nécessairement contenues dans une `div` avec la classe `.box-video`.