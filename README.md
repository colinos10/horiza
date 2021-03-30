# SYMFONY

## NOUVEAU PROJET

- ouvrir un vouveau terminal
- se rendre dans le dossier où l'on veut créer le projet (ex.: MAMP) :
```
cd chemin_vers_le_dossier_MAMP
```
- créer le projet avec composer (pas besoin de créer le dossier du projet)
```
composer create-project symfony/website-skeleton nom_du_projet
```

## GIT

- créer un dépôt Git sur GitHub
- avec un terminal, se rendre dans le dossier du projet (cd ... ou VSC)
- initialtiser un dépôt local :
```
git init
```
- lier le dépôt distant au dépôt local :
```
git remote add origin https://github.com/davidHurtrel/symfony-WF3-787.git
```
- ajouter tous les fichiers :
```
git add *
```
- donner un nom au commit :
```
git commit -m "message_du_commit"
```
- récupérer les dernières modifications :
```
git pull origin master
```
- envoyer vos modifications :
```
git push origin master
```
- voir la liste des commit (flèches haut bas pour naviguer dans la liste, q pour quitter) :
```
git log
```

## RÉCUPÉRER UN PROJET

- télécharger le zip ou faire un pull
- recréer le fichier .env à la racine du projet (avec ses propres informations)
- les infos importantes sont APP_ENV et MAILER_URL
- mettre à jour le projet :
```
composer update
```
- créer la base de données :
```
php bin/console doctrine:database:create
```
- créer les tables :
```
php bin/console doctrine:migrations:migrate
```
- importer les "fausses" données :
```
php bin/console doctrine:fixtures:load
```

## APACHE-PACK

- barre de débug / routing / .htaccess
- dans le terminal :
```
composer require symfony/apache-pack
```

## CONTROLLER

```
php bin/console make:controller Nom_du_controller
```

## BASE DE DONNÉES

- .env :
```
DATABASE_URL="mysql://root:root@127.0.0.1:8889/symfony-wf3-787?serverVersion=5.7"
```
- créer la base de données :
```
php bin/console doctrine:database:create
```
- créer une entité (table) :
```
php bin/console make:entity
```
- migration :
```
php bin/console make:migration
```
```
php bin/console doctrine:migrations:migrate
```

## FIXTURES

- installer le bundle :
```
composer require --dev orm-fixtures
```
- compléter le fichier src/DataFixtures/AppFixtures.php
- persist()
- flush()
- envoyer en base de données (en écrasant) :
```
php bin/console doctrine:fixtures:load
```
- envoyer en base de données (en ajoutant à la suite) :
```
php bin/console doctrine:fixtures:load --append
```
- bundle pour générer de fausses données :
```
composer require fakerphp/faker
```

## ROUTER

- voir toutes les routes :
```
php bin/console debug:router
```
- vérifier si une route existe (et obtenir ses informations) :
```
php bin/console router:match /url_de_la_route
```

## FORMULAIRE

- créer un formulaire :
```
php bin/console make:form
```
- ajouter un bouton de validation du formualire (dans le Form) :
```
->add('valider', SubmitType::class)
```

## COMMANDES IMPORTANTES

- vider le cache :
```
php bin/console cache:clear
```

## MESSAGES FLASH

- dans un controller :
```
$this->addFlash('succes', 'La maison a bien été ajoutée);
```
- à l'endroit où l'on veut afficher les messages :
```
{% for label, messages in app.flashes %}
    {% for message in messages %}
        <div class="flash-{{ label }} bg-{{ label }} text-light p-3 mb-5 rounded">{{ message }}</div>
    {% endfor %}
{% endfor %}
```

## LOGIN

- créer l'entité User :
```
php bin/console make:user
```
- migration
- créer "l'authentification" :
```
php bin/console make:auth
```
- 1
- Authenticator
- SecurityController
- yes
- dans config/packages/security.yaml, décommenter :
```
- { path: ^/admin, roles: ROLE_ADMIN }
```

## REGISTER

- créer le formulaire d'inscription :
```
php bin/console make:registration-form
```
- installer Rollerworks :
```
composer require rollerworks/password-strength-bundle
```
- dans le formulaire :
```
use Rollerworks\...\PasswordStrength
```
```
new PasswordStrength
```
- y ajouter les contraintes souhaitées

## SÉCURITÉ - DROITS - RÔLES - HIÉRARCHIE

- pour se déconnecter :
```
<a href="{{ path('app_logout') }}"></a>
```
- afficher du code selon un rôle :
```
{% if is_granted('ROLE_SUPER_ADMIN') %}
    le_code_ici
{% endif %}
```
- config/packages/security.yaml :
```
acces_control:
    - { path: ^/admin/users, roles: ROLE_SUPER_ADMIN }
    ...
role-hierarchy:
    ROLE_ADMIN: ROLE_USER
    ROLE_SUPER_ADMIN: ROLE_ADMIN
```

## EMAIL

- installer SwiftMailer :
```
composer require symfony/swiftmailer-bundle
```
- dans les paramètres du compte Google => Sécurité => Connexion à Google : activer la Validation en deux étapes pour pouvoir accéder aux Mots de passe des applications
- créer un nouveau mot de passe d'application
- .env :
```
MAILER_URL=gmail://david.hurtrel@gmail.com:password@localhost
```
- créer le formulaire de contact
- créer le controller associé
- afficher le formulaire dans une page / vue

## REPRENDRE

- afficher nom du fichier dans contactForm
- lien contact dans footer
- message succes envoi mail
- message succès CRUD User
- décomposition d'un formulaire twig
- email (contact)

## PAGES D'ERREUR
- si nécessaire :
```
composer require symfony/twig-pack
```
- créer l'arborescence templates/bundle/TwigBundle/Exception
- y créer les fichiers avec l'écriture errorXXX.html.twig (où XXX est le numéro de l'erreur)
- error.html.twig pour tous les autres
- tester l'erreur404 : taper une URL n'ont existante
- tester l'erreur500 : {% {% extends 'bas%}

- 1xx : information
- 2xx : succès
- 3xx : redirection
- 4xx : client web
    - 401 : accès refusé
    - 403 : interdit
    - 404 : non trouvé
- 5xx : serveur
    - 500 : erreur interne
    - 503 : service indisponible