#Classiq startup
L'objectif de ce repo est de vous permettre d'installer le CMS Classiq en un minimum de temps.
Le CMS une fois installé offre un site volontairement simple et qui contient les fonctionnalités suivantes:
* site anglais / français
* page d'accueil
* page exemple
* 404 qui redirige vers la home
* Une inderface d'administration WYSIWYG
* quelques blocks
    * Titre
    * Texte
    * Image
    * Iframe
    * liste de pages
    * grille de photos
    


##Prérequis

On part du principe que sur votre machine sont installés:
* php 7
* apache
* composer
* node js

##Installation

###Librairies

Vous pouvez installer tout ce qui est nécessaire à partir du package.json.

![Scripts npm](./_doc/npm-scripts.png)
```
//Lancez les commandes:
npm-install
composer-update
build-svg-icons (qui génère des libriarie d'icones svg)
watch-dev (qui compile automatiquement les fichiers less et javascript dans le répertoire /dist)
```
Une fois tout installé vous devez avoir des répéertoires
* vendor (les librairies php installées depuis composer)
* node_module (les librairies node js qui vous permettront de vous amuser avec webpack, less css, etc...)

###Dans votre navigateur
Allez sur :

`http://la-ou-est/configuré-votre/document-root/_install.php`

Ceci devrait générer dans le répertoire `configs/routes` les fichiers de config pour votre site en Français et en Anglais.

Pour voir vos sites en anglais et en français allez sur :

* `http://la-ou-est/configuré-votre/document-root/en`
* `http://la-ou-est/configuré-votre/document-root/fr`

##Traductions
### Traductions d'interface
* Allez sur `https://docs.google.com/spreadsheets/d/1kefhXt0Z7g0P2cGItQK4k_hqhSoFTMaJyvzNYjKeqw8`
* Copiez le google sheet afin de pouvoir le modifier
* Modifiez l'url dans vos fichiers de config (`configs/routes/etc..`)

##Connectez-vous
* Allez sur `http://la-ou-est/configuré-votre/document-root/fr/login`
* identifiez-vous avec 
    * email: `admin@admin.com`
    * mot de passe: `admin`
    
    









