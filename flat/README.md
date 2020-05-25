# LabBoîte documentation - version plate

MÀJ le 25 mai 2020 • 13h00

## Avancement 

### Public

- Vue Index / liste des catégories : &#127383;
- Vue Index / liste des outils : &#127383;
- Vue Outil / Info : &#127383;
- Vue Outil / Notice : &#127383;
- Vue Outil / FAQ : &#127383;
- Vue Outil / Consommables : &#127383;
- Vue Outil / Astuce : &#127383;

### Admin

- Vue Index / Catégorie / liste des catégories : &#127383;
- Vue Index / Catégorie / nouvelle catégorie : &#127383;
- Vue Index / Outils / liste des outils : &#127383;
- Vue Index / Outils / nouvel outil : &#127383;
- Vue Outil / Info / formulaire info : &#127383;
- Vue Outil / Notice / formulaire notice : -
- Vue Outil / FAQ / liste des questions : &#127383;
- Vue Outil / FAQ / nouvelle question : -
- Vue Outil / Consommables / liste des consommables : &#127383;
- Vue Outil / Consommables / nouveau consommable : &#127383;
- Vue Outil / Astuce / liste des astuces : &#127383;
- Vue Outil / Astuce / nouvelle astuce : &#127383;
- Vue Utilisateurs / liste des utilisateurs : &#127383;
- Vue Utilisateurs / éditer un utilisateur : &#127383;
- Vue Utilisateurs / changer un mot de passe : &#127383;
- Vue Utilisateurs / nouvel utilisateur : &#127383;
- Vue Panneau de connexion : &#127383;

## Organisation

Chaque vue est dans un fichier HTML à la racine

- les fichiers commençant par `public-` concernent des vues de pages publiques (front office)
- les fichiers commençant par `admin-` concernent des vues de pages d'administation (back office)

Organisation des assets :

- `assets/scss` : les feuilles de styles en SASS
- `assets/css` : les feuilles de styles compilées en CSS
- `assets/fonts` : les fichiers de webfonts
- `assets/graphics` : les éléments graphiques de l'interface (icônes, ect)
- `assets/img` : les éléments images du contenu
- `assets/js` : les scripts

## Précisions

### MAJ du 22 mai

- Les styles spécifiques au front end / back end sont désormais consignées dans un fichier SCSS `sides.scss`. Une classe `.website-public` ou `.website-admin` attribuée au `body` permet de définir l'ensemble des motifications — &#9888; en conséquence, l'ensemble des tags `body` des pages existantes ont été modifiés.
- Les icônes `labboite-doc` dans le dossier `assets/fonts` ont été mises à jour.
- L'ensemble des feuilles de styles du dossier `assets/scss` a été mis à jour.
- Sur les pages outils : une nouvelle classe `.box-bg` a été crée pour définir un arrière-plan blanc à la boîte. Par défaut, la classe `.box` n'est plus stylisée. &#9888; En conséquence, l'ensemble des pages `public-tool-XXXX.html` et `admin-tool-XXXX.html` ont été modifiées.

### MAJ passées

- Les liens `.tab-group` mènent chacun vers un ensemble. Lorsque le contenu de l'ensemble est affiché sur la page, le lien passe en mode « actif » et la classe `.active` s'ajoute au lien.
- Les vignettes affichées dans l'index sont automatiquement recadrées en CSS à l'aide de la propriété `object-fill`.
- Les textes de chaque item de la grille tiennent chacun sur une seule ligne ; s'ils sont trop longs, ils sont automatiquement tronqués à l'aide des propriétés CSS `text-overflow: ellipsis; white-space: nowrap;`.
- Les liens contenus dans la liste `.tool-nav-container` mènent chacun vers une rubrique de la fiche outil. Lorsque le contenu de la rubrique est affiché sur la page, le lien passe en mode « actif » et la classe `.tool-nav-link` est remplacée par la classe `.tool-nav-active`.
- La grande image en en-tête est automatiquement recadrée en CSS à l'aide de la propriété `object-fill`.
- Les images doivent nécessairement avoir la classe `.box-image`
- Les iframes des vidéos sont nécessairement contenues dans une `div` avec la classe `.box-video`.
- Une stylisation spécifique des listes est proposée dans cette rubrique, avec la classe `.tool-help-list`.
- Les images doivent nécessairement avoir la classe `.box-image`
- Les iframes des vidéos sont nécessairement contenues dans une `div` avec la classe `.box-video`.