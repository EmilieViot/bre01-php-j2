# Exercice require

## Étape 0

- Créez un dossier `require` dans le dossier `bre01-php-j2`

## Étape 1 : Création des fichiers

Vous allez créer les fichiers suivants :

### home.phtml

```html
<main>
    <h1>Ceci est la page d'accueil</h1>
</main>
```

### about.phtml

```html
<main>
    <h1>Ceci est la page à propos</h1>
</main>
```

### contact.phtml

```html
<main>
    <h1>Ceci est la page contact</h1>
</main>
```

### header.phtml

```html
<header>
    <nav>
        <ul>
            <li>
                <a href="">Accueil</a>
            </li>
            <li>
                <a href="">À propos</a>
            </li>
            <li>
                <a href="">Contact</a>
            </li>
        </ul>
    </nav>
</header>
```

### footer.phtml

```html
<footer>

</footer>
```

### layout.phtml

```html
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice require</title>
        <link rel="stylesheet" href="assets/style.css" />
    </head>
    <body>
        
    </body>
</html>
```

### index.php

```php
<?php 

?>
```

## Étape 2 : Assembler la page d'accueil

Dans votre ficher `index.php`, ppelez votre fichier `layout.phtml`.

Dans votre fichier `layout.phtml` appelez les bons fichiers dans le bon ordre pour que que le body de votre page ait, de haut en bas un `header`, un `main` qui précise qu'il s'agit de la page d'accueil et un `footer`.

## Étape 3 : naviguer à la main

Dans votre fichier `index.php` vous allez vérifier si la superglobal `$_GET["route"]` existe et n'est pas vide.

Si elle existe, stockez-la dans une variable `$route`. Si elle n'existe pas ou qu'elle est vide, votre variable `$route` vaut `null`.

Dans votre fichier `layout.phtml` faites en sorte d'afficher un `<main>` différent selon la valeur de `$route`.

Si `$route` vaut `home` : affichez `home.phtml`.
Si `$route` vaut `about` : affichez `about.phtml`.
Si `$route` vaut `contact`: affichez `contact.phtml`.
Dans tous les autres cas, affichez `home.phtml`.

### Tester 

Pour tester vous allez devoir changer à la main la barre d'URL de votre navigateur.

votresite.io/?route=home : doit afficher l'accueil
votresite.io/?route=about : doit afficher à propos
votresite.io/?route=contact : doit afficher contact

Les autres URLs sur le site doivent afficher l'accueil.

## Étape 4 : dynamiser la nav

Faits en sorte de modifier les liens dans la nav de telle façon que le bon lien affiche le bon `<main>`.
