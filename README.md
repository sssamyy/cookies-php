# Gestion de Cookies en PHP

Petite application PHP multi-pages démontrant l’usage des **cookies** pour stocker et partager des données utilisateur entre pages.

## Fonctionnalités
- Formulaire sur **page1.php** : saisie du pseudo, pays et genre.  
- Création de cookies valides 24 h pour conserver ces données.  
- Affichage automatique sur **page2.php** et **page3.php**.  
- Redirection vers page1.php si les cookies sont absents.

## Installation
1. Copier les fichiers dans le dossier de votre serveur web (ex. `htdocs` ou `www`).  
2. Lancer le serveur PHP :  
   ```bash
   php -S localhost:8000
3. Ouvrir http://localhost:8000/page1.php
 dans un navigateur.
